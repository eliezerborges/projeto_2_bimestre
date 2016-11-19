<?php

namespace Todolist\Http\Controllers;

use Illuminate\Http\Request;
use Todolist\Http\Requests;
use Todolist\Http\Controllers\Controller;
use Todolist\Models\Album;
use Todolist\Models\Banda;

class AlbumController extends Controller {

    public function listar(Album $album) {
        $data['albuns'] = $album->all();
        return view('albuns.listar_albuns', $data);
    }

    public function nova() {
        $data['bandas'] = Banda::all(['nome','id_banda']);
        return view('albuns.novo_album', $data);
    }

    public function alterar(Album $album, $id_album) {
        $data['bandas'] = Banda::all(['nome','id_banda']);
        $album = $album->find($id_album);
        if ($album != null) {
            $data['album'] = $album;
            return view('albuns.alterar_album', $data);
        } else {
            return redirect(url('album'));
        }
    }

    public function salvar(Request $request, Album $album) {
        if ($request->has('id_album')) {
            $album = $album->find($request->get('id_album'));
            
            if ($album != null) {
                $album->update($request->all());
                return redirect('albuns/listar_albuns');
            }
        }
        
        $album->create($request->all());
        return redirect('albuns/listar_albuns');
    }

    public function excluir(Request $request, Album $album, $id_album = null) {
        $album = $album->find($id_album);
        if ($album != null) {
            $album->destroy($album->id_album);
            return redirect('albuns/listar_albuns');
        } else {
            return redirect(url('album'));
        }
    }

}
