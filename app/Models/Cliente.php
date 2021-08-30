<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = ['name'];

    public function contatos()
    {
        return $this->hasMany(Contato::class);
    }

    public function animais()
    {
        return $this->hasMany(Animal::class);
    }
}
