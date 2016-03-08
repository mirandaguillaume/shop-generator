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

    public function __call($name, $arguments){
        if (strstr($name,'lower') != ''){
            return $this->lowerStat($arguments[0],substr($name,strlen('lower')),$arguments[1]);
        } elseif (strstr($name,'upper') != ''){
            return $this->upperStat($arguments[0],substr($name,strlen('lower')),$arguments[1]);
        } else {
            throw new MethodNotImplementedException($name);
        }
    }

    private function lowerStat(Person $character, $stat, $level){

        $setFunction = 'set'.$stat;
        $getFunction = 'get'.$stat;

        $character->$setFunction($character->$getFunction()-(2*$level));

        return $character;
    }

    private function upperStat(Person $character, $stat, $level){

        $setFunction = 'set'.$stat;
        $getFunction = 'get'.$stat;

        $character->$setFunction($character->$getFunction()+(2*$level));

        return $character;
    }

}