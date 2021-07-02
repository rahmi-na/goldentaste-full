<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Posts extends Authenticatable
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = ['title', 'chef', 'categories_id', 'person', 'cook_time', 'description', 'photo'];
    protected $guarded=[];

    public function categories(){
        return $this->belongsTo('App\Models\Categories');
    }

    // public function Transactions(){
    //     return $this->hasMany(Transactions::class);
    // }
}
