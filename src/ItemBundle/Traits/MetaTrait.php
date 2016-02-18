<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 15/02/16
 * Time: 17:03
 */

namespace ItemBundle\Traits;


trait MetaTrait
{

    private $methods = array();

    public function addMethod($methodName, $methodCallable)
    {
        if (!is_callable($methodCallable)) {
            throw new \InvalidArgumentException('Second param must be callable');
        }
        $this->methods[$methodName] = \Closure::bind($methodCallable, $this, get_class());
    }

    public function __call($methodName, array $args)
    {
        if (isset($this->methods[$methodName])) {
            return call_user_func_array($this->methods[$methodName], $args);
        }

        throw RunTimeException('There is no method with the given name to call');
    }

}