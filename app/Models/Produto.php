<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $guarded = [];

    public function fornecedor()
    {
      return $this->belongsTo(Fornecedor::class, 'fornecedor_id');
    }
  public function descricaoFormatada($maxLength = 60)
  {
    $descricao = $this->descricao;
    $chunks = str_split($descricao, $maxLength);
    return implode("<br>", $chunks);
  }
  public function marcaFormatada($maxLength = 60)
  {
    $descricao = $this->marca;
    $chunks = str_split($descricao, $maxLength);
    return implode("<br>", $chunks);
  }
  public function nomeFormatada($maxLength = 49)
  {
    $descricao = $this->nome;
    $chunks = str_split($descricao, $maxLength);
    return implode("<br>", $chunks);
  }
}
