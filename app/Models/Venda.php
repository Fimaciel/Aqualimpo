<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $table = 'vendas';
    protected $guarded = [];

    public function linhas()
    {
      return $this->hasMany(LinhaVenda::class, 'venda_id');
    }
  public function cliente()
  {
    return $this->belongsTo(Cliente::class);
  }

  public function itensVendaJson()
  {
    return $this->linhas->map(function($linha) {
      return [
        'id' => $linha->produto_id,
        'produto' => $linha->produto->nome,
        'quantidade' => $linha->quantidade,
        'precoUnitario' => $linha->preco_unitario,
        'precoTotal' => $linha->preco_total
      ];
    });
  }

  protected  static function booted()
  {
    self::addGlobalScope('ordered', function (Builder $queryBuilder){
      $queryBuilder->orderBy('id');
    });
  }
}
