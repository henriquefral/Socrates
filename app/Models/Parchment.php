<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parchment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'tome_id',
        'category',
        'title',
        'content',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tome()
    {
        return $this->belongsTo(Tome::class);
    }
}
