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
}
