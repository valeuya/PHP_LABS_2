<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public $timestamps = false;
}
