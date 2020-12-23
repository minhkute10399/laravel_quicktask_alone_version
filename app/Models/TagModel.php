<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PostModel;

class TagModel extends Model
{
    protected $fillable = [
        'name',
    ];

    public function posts()
    {
        return $this->hasMany(PostModel::class);
    }
}
