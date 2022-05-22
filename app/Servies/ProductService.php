<?php

namespace App\Servies;

use App\Fields\NumberField;
use App\Fields\TextField;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductService extends Servies
{
    protected $modelClass=Product::class;

    public function getFields()
    {
        return [
            TextField::make('name')->beforeSave(fn($value)=>Str::upper($value)),
            NumberField::make('price')
         ];
    }
}
