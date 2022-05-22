<?php

namespace App\Fields;

class Field
{
    protected $name;
    protected $type;
    protected $beforSaveClouser;

    public static function make($name)
    {
        $class = get_called_class();
        return new $class($name);
    }

    public function beforeSave($callback)
    {
        $this->beforSaveClouser = $callback;
        return $this;
    }
}
