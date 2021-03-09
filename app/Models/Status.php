<?php

namespace App\Models;
use App\Models\User;
use App\Traits\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use Likeable;
    use HasFactory;
    protected $fillable = ['hash','body'];
    protected $withCount =['comments'];
    public function getPublishedAttribute()
    {
        return $this->created_at->diffForhumans();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}

