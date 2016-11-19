<?php

namespace Todolist\Http\Controllers;

use Illuminate\Http\Request;
use Todolist\Http\Requests;
use Todolist\Http\Controllers\Controller;
use Todolist\Models\Banda;

class BandaController extends Controller {

    public function listar(Banda $banda) {
        $data['bandas'] = $banda->all();
        return view('bandas.listar_bandas', $data);
    }

    public function nova() {
        return view('bandas.nova_banda');
    }

    public function alterar(Banda $banda, $id_banda) {
        $banda = $banda->find($id_banda);
        if ($banda != null) {
            $data['banda'] = $banda;
            return view('bandas.alterar_banda', $data);
        } else {
            return redirect(url('banda'));
        }
    }

    public function salvar(Request $request, Banda $banda) {
        if ($request->has('id_banda')) {
            $banda = $banda->find($request->get('id_banda'));
            
            if ($banda != null) {
                $banda->update($request->all());
                return redirect('bandas/listar_bandas');
            }
        }
        
        $banda->create($request->all());
        return redirect('bandas/listar_bandas');
    }

    public function excluir(Request $request, Banda $banda, $id_banda = null) {
        $banda = $banda->find($id_banda);
        if ($banda != null) {
            $banda->destroy($banda->id_banda);
            return redirect('bandas/listar_bandas');
        } else {
            return redirect(url('banda'));
        }
    }

}
