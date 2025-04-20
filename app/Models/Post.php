<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{   
    use HasFactory;
    protected $table = 'posts';

    public function author() :BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

} 


