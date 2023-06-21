<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Destination extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['top_left_country_name', 'left_country_name', 'right_country_name'];

    protected $fillable = [
        'top_left_country_name',
        'top_left_image',
        'top_left_sale',
        'left_country_name',
        'left_image',
        'left_sale',
        'right_country_name',
        'right_image',
        'right_sale',
    ];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function scopeWithTl($query)
    {
        return $query->where('top_left_country_name', '!=', '');
    }

    public function scopeWithl($query)
    {
        return $query->where('left_country_name', '!=', '');
    }

    public function scopeWithR($query)
    {
        return $query->where('right_country_name', '!=', '');
    }
}
