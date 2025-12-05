<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table = 'contatos';

    protected $fillable = [
        'contact_name',
        'contact_phone',
        'contact_email',
        'icon_perfil'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
