<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected  $table = 'fornecedor';
    protected $guarded = [];

    public function produtos()
    {
      return $this->hasMany(Produto::class, 'fornecedor_id');
    }
}
