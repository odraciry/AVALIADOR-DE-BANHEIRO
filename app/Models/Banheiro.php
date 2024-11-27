<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Banheiro extends Model
{
    use HasFactory, AsSource;
    protected $table = 'banheiro';
    protected $fillable = ['name','description'];

    public function avalicao()
    {
        return $this->hasMany(Avaliacao::class);
        // return $this->hasMany(Avaliacao::class, 'banheiro_id', 'id');
    }
}
