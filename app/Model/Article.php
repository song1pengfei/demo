<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
   // public function hasOneContents()
    //{
    //	return $this->hasOne('Contents','article_cid','id');
    //}
    public $timestamps = false;
    
}
