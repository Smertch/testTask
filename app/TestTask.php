<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestTask extends Model
{
    protected $fillable = ['code','type','message','application', 'status'];
}
