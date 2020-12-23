<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $fillable = [
        'name',
        'description',
        'tag_id',
    ];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
