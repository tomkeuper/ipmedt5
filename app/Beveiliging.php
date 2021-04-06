<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beveiliging extends Model
{
    protected $fillable = ['triggered'];
    public $primary_key = ['triggered'];
    protected $table = 'beveiliging';
}
