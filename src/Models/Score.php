<?php

namespace Gameaa\Agroupnine\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
