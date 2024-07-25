<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
    ];

    protected $guarded = [];

    protected function name():Attribute{
        return new Attribute(

            get: function($value){
                return ucwords($value);
            },
            set: function($value){
                return filter_var($value, FILTER_SANITIZE_STRING);
            }
        );
    }

    public function getRouteKeyName(){
        return 'slug';
    }

}
