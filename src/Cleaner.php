<?php

class Cleaner
{
    public function cleanClothes(Laundry $clothes)
    {
        $clothes->isDirty=false;
        return $clothes;
    }
}
