<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class AboutUs extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['title', 'description_one', 'description_two', 'facilities'];

    protected $fillable = [
        'title',
        'description_one',
        'description_two',
        'facilities',
        'image',
    ];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
