<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinhaVenda extends Model
{
    use HasFactory;

    protected $table = 'linha_venda';
    protected $guarded = [];

    public function venda()
    {
      return $this->belongsTo(Venda::class, 'venda_id');
    }

    public function produto()
    {
      return $this->belongsTo(Produto::class, 'produto_id');
    }


}
