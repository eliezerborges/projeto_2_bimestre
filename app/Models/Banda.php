<?php

namespace Todolist\Models;

use Illuminate\Database\Eloquent\Model;

class Banda extends Model {
	public $timestamps = false;
	protected $primaryKey = 'id_banda';
    protected $table = "bandas";
    protected $fillable = array('nome','vocalista');

    public function albuns()
    {
        return $this->hasMany('Todolist\Models\Album');
    }

    public function musicas()
    {
        return $this->hasMany('Todolist\Models\Musica');
    }

}

