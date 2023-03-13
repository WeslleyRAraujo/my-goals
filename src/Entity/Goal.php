<?php

namespace MyGoals\Entity;

use Opis\ORM\Entity;

class Goal extends Entity
{
    public function id()
    {
        return $this->orm()->getColumn('id');
    }

    public function name()
    {
        return $this->orm()->getColumn('name');
    }

    public function value()
    {
        return $this->orm()->getColumn('value');
    }

    public function datetime()
    {
        return $this->orm()->getColumn('datetime');
    }
}