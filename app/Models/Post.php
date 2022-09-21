<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body'
    ];

    public function tags() {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function scopeLatest($query) {
        return $query->orderBy('id', 'asc')->get();
    }
}
