<?php

namespace app\models;

use illuminati\Database\Eloquent\Factories\hasfactory;
use illuminati\Database\Eloquent\Model;

class student extends model 
{
    use hasfactory;
    protected $table = "student";
    protected $fillable -['id','name','code','career','state','created_at','created_at'];
}