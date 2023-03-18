<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'content',
        'avtor',
    ];

    public function getPostDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
