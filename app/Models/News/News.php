<?php

declare(strict_types=1);

namespace App\Models\News;

class News extends Model
{
    /**
     * @var string
     * Define a tabela a qual este Model é responsável
     */
    protected $table = 'noticias';

    // Define os campos da tabela noticias
    protected $fillable = [
        'autor_id',
        'titulo',
        'subtitulo',
        'descricao',
        'published_at',
        'slug',
        'ativo',
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
     * da tabela noticias
     */

    public array $rules = [
        'autor_id' => 'required|numeric',
        'titulo' => 'required|min:20|max:100',
        'subtitulo' => 'required|min:20|max:155',
        'descricao' => 'required|min:100',
        'slug' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function images()
    {
        return $this->hasMany(ImageNews::class);
    }

}
