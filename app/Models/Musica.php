<?php

namespace Todolist\Models;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model {
	public $timestamps = false;
	protected $primaryKey = 'id_musica';
    protected $table = "musicas";
    protected $fillable = array('titulo','id_album','id_banda');

    public function album()
    {
        return $this->belongsTo('Todolist\Models\Album','id_album');
    }

    public function banda()
    {
        return $this->belongsTo('Todolist\Models\Banda','id_banda');
    }

}

