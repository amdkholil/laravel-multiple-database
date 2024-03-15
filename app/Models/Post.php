<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $connection='mysql';

    protected $guarded = ['id'];

    public function user(){
        return $this->setConnection('sqlite')->belongsTo(User::class);
    }

    public function comments(){
        return $this->setConnection('pgsql')->hasMany(Comment::class);
    }
}
