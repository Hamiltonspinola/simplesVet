<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animais';
    protected $fillable = ['nome', 'historico_clinico', 'nascimento', 'cliente_id', 'raca_id', 'especie_id'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function raca()
    {
        return $this->hasOne(Raca::class);
    }

    public function especie()
    {
        return $this->hasOne(Especie::class);
    }
}
