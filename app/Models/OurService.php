<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class OurService extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['title', 'description'];

    protected $fillable = [
        'title',
        'description',
        'icon'
    ];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
