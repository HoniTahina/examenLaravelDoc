<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Demande extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'date',
        'message',
        'type',
        'etat',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
