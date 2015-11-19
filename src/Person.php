<?php


class Person
{
    public $name;
    public $lastname;
    public $clothes;

    public function __construct($name, $lastname)
    {
        $this->name=$name;
        $this->lastname=$lastname;
    }

    public function setDirtyClothes(Laundry $clothes, $items)
    {
        $this->clothes=$clothes;
        $this->clothes->items=$items;
        $this->clothes->isDirty=true;
    }



}
