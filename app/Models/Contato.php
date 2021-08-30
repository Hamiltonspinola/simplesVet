<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $table = 'contatos';
    protected $fillable = ['tel_1', 'tel_2', 'email','cliente_id'];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
