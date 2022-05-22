<?php

namespace App\Servies;

class Servies
{
    protected $model;
    protected $modelClass;

    public function __construct()
    {
        $this->model = new $this->modelClass;
    }

    public function index()
    {
        $item = $this->model::all();
        return $item;
    }

    public function store($data)
    {
        $item = $this->model;
        $fields=$this->getFields();
        foreach($fields as $field)
        {
            $field->fill($item,$data);
        }
        $item->save();
        return $item;
    }

    public function find($id)
    {
        $item = $this->model->find($id);
        return $item;
    }

    public function update($id, $data)
    {
        $item = $this->find($id);
        $item->update($data);
        return $item;
    }

    public function destroy($id)
    {
        $item=$this->find($id);
        $item->delete();
    }

    public function getFields()
    {
        return [];
    }
}
