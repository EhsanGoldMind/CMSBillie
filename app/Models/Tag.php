<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
}

    public function hastag($tagid)
    {
        return in_array($tagid , $this->tags->pluck('id')->toArry());
}
}
