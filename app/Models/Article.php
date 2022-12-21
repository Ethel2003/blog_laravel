<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'user_id', 'image'];

    //un article n'a qu'un seul auteur
    public function user(){
        return $this->belongsTo(User::class);
    }

    //un article peut avoir plusieurs commentaires
    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
