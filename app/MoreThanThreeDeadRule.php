<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 18/05/18
 * Time: 10:35
 */

namespace App;


class MoreThanThreeDeadRule extends AbstractRule
{

    public function apply(Cell $cell)
    {
       if($this->getNumberAliveNeighbours($cell)>3){
           $killAction = new KillAction($cell);
           $killAction->execute($cell);
           return $killAction;
       }
        $NullAction = new NullAction($cell);
        $NullAction->execute($cell);
        return $NullAction;

    }
}