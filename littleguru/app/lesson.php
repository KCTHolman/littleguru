<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    protected $fillable = ['title','start_date','end_date'];
}
