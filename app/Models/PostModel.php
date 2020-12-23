<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TagModel;

class PostModel extends Model
{
    protected $fillable = [
        'name',
        'description',
        'tag_id',
    ];

    public function tag()
    {
        return $this->belongsTo(TagModel::class);
    }
}
