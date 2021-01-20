<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;
    protected $fillable=[
        'cat_id','name','en_name','parent_id','type'
    ];
    public $timestamps = false;
}
