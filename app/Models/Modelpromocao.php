<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelpromocao extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = ['id','nome','descricao','quantidade','preco'];

    public static function exibir()
    {
        return Modelpromocao::all()
                            ->where('id',1)
                            ->pluck('nome');
    }
    public static function inserir()
    {
         Modelpromocao::create([
            'nome'=>'morango',
            'descricao'=>'fruta',
            'quantidade'=>'5',
            'preco'=>'12'
        ]);
        return "criado com sucesso!";
    }
    public static function alterar()
    {
        Modelpromocao::where('id',4)
        ->update([
            'nome'=>'morango',
            'descricao'=>'fruta',
            'quantidade'=>'5',
            'preco'=>'12'
        ]);
        return 'atualizado ';
    }
    public static function excluir()
    {
        Modelpromocao::where('id',4)->delete();
        return 'deletado';

    }

}
