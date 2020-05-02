<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeltes;

    protected $fillable = [
      'content'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }



}
