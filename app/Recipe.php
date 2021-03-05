<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // questo fillable serve ad accorciare il codice nel controller
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'img_path',
        'description',
    ];

    // una ricetta può essere stata scritta da un solo utente
    public function user() {
        return $this->belongsTo('App\User');
    }
}
