<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerfilCreateUpdate;
use App\Http\Requests\PerfilUpdate;
use App\Models\PerfilUsuario;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function create(PerfilCreateUpdate $request): RedirectResponse
    {
        try{
            Perfil::create([
                'nome'=> $request->nome,
                'descricao'=> $request->descricao,
                'usuario_criador_id' => Auth()->id
            ]);
            return back()->withInput()->with(['status'=>'sucess','message'=>'Perfil alterado!','perfil'=>$perfil]);
        }catch(Exception $e){
            return back()->withInput()->with(['status'=>'error','message'=> $e->getMessage()]);
        }
    }
    public function update(PerfilCreateUpdate $request, int $id): RedirectResponse
    {
        try{
            $perfil = Perfil::find($id);
            if (empty($perfil)){
                return back()->withInput()->with(['status'=>'error','message'=>'Perfil não encontrado!']);
            }
            $perfil->update([
                'nome'=> $request->nome,
                'descricao'=> $request->descricao,
            ]);
            return back()->withInput()->with(['status'=>'sucess','message'=>'Perfil alterado!','perfil'=>$perfil]);
        }catch(Exception $e){
            return back()->withInput()->with(['status'=>'error','message'=> $e->getMessage()]);
        }
    }
    public function destroy(int $id): RedirectResponse
    {
        try{
            $perfil = Perfil::find($id);
            if (empty($perfil)){
                return back()->withInput()->with(['status'=>'error','message'=>'Perfil não encontrado!']);
            }
            $perfil->delete(); 
            return back()->withInput()->with(['status'=>'sucess','message'=>'Perfil excluído!','perfil'=>$perfil]);
        }catch(Exception $e){
            return back()->withInput()->with(['status'=>'error','message'=> $e->getMessage()]);
        }
    }
}
