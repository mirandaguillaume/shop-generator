<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 07/03/16
 * Time: 19:47
 */

namespace CharacterBundle\Services;


use CharacterBundle\Entity\Person;
use Symfony\Component\Intl\Exception\MethodNotImplementedException;

class CharacterUtilities
{

    /**
     * @var array
     */
    private $basic_stats;

    public function __construct(array $basic_stats){
        $this->basic_stats = $basic_stats;
    }

    public function __call($name, $arguments){

        if (strstr($name,'lower')) {
            $changePart = 'lower';
            $operation = '-';
            $function = 'changeStat';
        }
        elseif (strstr($name,'upper')) {
            $changePart = 'upper';
            $operation = '+';
            $function = 'changeStat';
        }

        return $this->$function($arguments[0], $operation, strtolower(substr($name,strlen($changePart))), $arguments[1]);
    }

    private function changeStat(Person $character, $operation, $stat, $level){

        if (in_array($stat,$this->basic_stats)) {

            $setFunction = 'set' . $stat;
            $getFunction = 'get' . $stat;

            if ($operation == '+')
                if ($character->$getFunction() < 12)
                    $character->$setFunction($character->$getFunction() + (2 * $level));
                elseif ($operation == '-')
                    if ($character->$getFunction() > 2)
                        $character->$setFunction($character->$getFunction() - (2 * $level));

            $character->reevaluate();

            return $character;
        } else {
            throw new \Exception();
        }
    }
}