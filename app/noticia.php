<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'descripcion', 'UrlImg',
    ];

}
