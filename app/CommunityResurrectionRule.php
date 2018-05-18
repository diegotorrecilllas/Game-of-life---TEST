<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 18/05/18
 * Time: 9:58
 */

namespace App;


class CommunityResurrectionRule extends AbstractRule
{
    public function apply(Cell $cell)
    {
       $liveNeighbours = $this->getNumberAliveNeighbours($cell);
       if(in_array($liveNeighbours, array(2,3))){
           $resurrectionaction = new ResurrectAction($cell);
           $resurrectionaction->execute($cell);
           return $resurrectionaction;
       }

        $nullaction = new NullAction($cell);
        $nullaction->execute($cell);
        return $nullaction;


    }

}