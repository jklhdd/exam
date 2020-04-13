<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSurvey extends Model
{
    //
    protected $table = "surveys";
    protected $fillable = ["name","email","feedback","telephone"];



}
