<?php

namespace Todolist\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {
	public $timestamps = false;
	protected $primaryKey = 'id_album';
    protected $table = "albuns";
    protected $fillable = array('nome','id_banda');

    public function banda()
    {
        return $this->belongsTo('Todolist\Models\Banda','id_banda');
    }

}

