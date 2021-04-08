<?php

declare(strict_types=1);

namespace App\Models\ImageNews;

class ImageNews extends Model
{
    /**
     * @var string
     * Define a tabela a qual este Model é responsável
     */
    protected $table = 'imagens_noticia';

    // Define os campos da tabela Autores
    protected $fillable = [
        'noticia_id',
        'imagem',
        'descricao',
        'created_at'
    ];

    /**
     * @var bool
     * Torna não obrigatório informar o
     * update_at e created_at pois é feito no database
     */
    public $timestamps = false;

    /**
     * @var array
     * Define as regras de validação para cada campo
     * da tabela Autores
     */

    public array $rules = [
        'noticia_id' => 'required|numeric',
        'imagem' => 'required',
        'descricao'=> 'required|min:10|max:255'
    ];

}
