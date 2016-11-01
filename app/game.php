<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{

    //
     protected $casts = [
        'question' => 'json',
        'answer' => 'json'
    ];

    protected $fillable = ['name','question','answer','level'];


    public function user ()
    {
        return $this->belongsTo('App\User');
    }

}
