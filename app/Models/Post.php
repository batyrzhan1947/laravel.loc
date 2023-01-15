<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $table = 'my_posts';
//    protected $primaryKey = 'post_id';
//    public $timestamps = '';
//    public $imcrementing = false;
//    protected $keyType = 'string';

   protected $attributes = [
    'content'=>'Lorem ipsum -- default'
   ];
}
