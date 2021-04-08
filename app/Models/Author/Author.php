<?php

declare(strict_types=1);

namespace App\Models\Author;

class Author extends Model
{
    /**
     * @var string
     * Define a tabela a qual este Model é responsável
     */
    protected $table = 'autores';

    // Define os campos da tabela Autores
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'senha',
        'sexo',
        'ativo',
        'created_at'
    ];

    /**
     * @var string[]
     * Define os campos que não serão exibidos no response
     */
    protected $hidden = [
        'senha'
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
        'nome' => 'required|min:2|max:45|alpha',
        'sobrenome' => 'required|min:2|max:60|alpha',
        'email' => 'required|max:100|email:rfc,dns',
        'senha' => 'required|between:6,12',
        'sexo' => 'required|max:1|alpha'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function news()
    {
        return $this->hasMany(News::class);
    }

}
