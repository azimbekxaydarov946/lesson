<?php

namespace App\Fields;


class TextField extends Field
{
    public function __construct($name, $type = 'text')
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function fill($item, $data)
    {
        $value = $data[$this->name];
        if($this->beforSaveClouser) //yechim funksiy kutmasligini
        {
            $beforeSave=$this->beforSaveClouser;
            //proccess
            $value = $beforeSave($value);
        }
        $item->{$this->name} = $value;
    }
}
