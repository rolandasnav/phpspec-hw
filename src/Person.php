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

    public function setDirtyClothes($items)
    {
        $this->clothes = new Laundry();
        $this->clothes->items=$items;
        $this->clothes->isDirty=true;
    }

    public function sendToClean(Cleaner $cleaner)
    {
        $this->setDirtyClothes(array('shorts','pants'));
        $this->clothes=$cleaner->cleanClothes($this->clothes);
    }





}
