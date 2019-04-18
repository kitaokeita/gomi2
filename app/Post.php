<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  #変更できるカラム指定
  protected $fillable = [
      'title',
      'body',
  ];

  public function user()
    {
        return $this->belongsTo('App\User');
    }
}
