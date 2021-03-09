<?php

namespace App\Models;

use App\Models\User;
use App\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use Likeable;
    use HasFactory;
    protected $with=['user'];

    protected $fillable = ['body','hash','parent_id', 'status_id'];
    public function user()
    {

        return $this->belongsTo(User::class);
    }
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');

    }
    public function children()
    {
        return $this->hasMany(Comment::class,'parent_id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }


}
