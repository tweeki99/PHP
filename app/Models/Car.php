<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 * @package App\Models
 *
 * @property $manufacturer
 * @property $model
 * @property $release_date
 * @property $price
 * @property $wheels
 * @property $is_electricity
 * @property $max_speed
 */

class Car extends Model
{
    protected $fillable = [
        'manufacturer', 'model', 'release_date', 'price', 'wheels', 'is_electricity', 'max_speed'
    ];

    public $rules = [
        'manufacturer' => 'required|max:100',
        'model' => 'required|max:100',
        'release_date' => 'required|numeric',
        'price' => 'required|numeric|min:0',
        'wheels' => 'required|numeric|min:0',
        'max_speed' => 'required|numeric|min:0'
    ];
}
