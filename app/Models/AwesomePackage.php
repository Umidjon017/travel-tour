<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class AwesomePackage extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['country_name', 'period', 'how_many_people', 'description'];

    protected $fillable = [
        'country_name',
        'period',
        'how_many_people',
        'price',
        'description',
        'rating',
        'image',
    ];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
