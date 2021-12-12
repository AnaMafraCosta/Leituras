<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreLeiturasRequest;

use App\Models\Leituras;

use Illuminate\Support\Facades\Auth;

class LeiturasController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }

    //construir a view de home das leituras
    public function index () {
        //select * from leituras
        $user_id = Auth::user()->id;

        $lista = Leituras::where('user_id', $user_id)->get(); 
        return view('dashboard.leituras.home', ['leituras'=>$lista]);
        
    }

    //retornar o formulario de registro de leituras
    public function create () {
        return view('dashboard.leituras.create');
    }

    public function store (StoreLeiturasRequest $request) {

        /*
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required'
        ]); 
        */

        $leitura = new Leituras;
        $leitura->titulo = $request->post('titulo');
        $leitura->autor= $request->post('autor');
        $leitura->genero = $request->post('genero');
        $leitura->paginas= $request->post('paginas');
        $leitura->editora = $request->post('editora');
        $leitura->idioma= $request->post('idioma');
        $leitura->resenha = $request->post('resenha');
        $leitura->frase= $request->post('frase');
        $leitura->nota = $request->post('nota');
        $leitura->user_id = Auth::user()->id;
        $leitura->save();
        return redirect()->to(route('leituras.index'));
    }

    //Route Model Binding
    public function show (Leituras $leitura) {
        //$leitura = Leituras::find($id);

        if ($leitura){
            return view('dashboard.leituras.show', ['leitura'=>$leitura]);
        } else {
            return redirect()->to(route('leituras.index'));
        }
        
    }

    public function edit (Request $request, Leituras $leitura) {
        //atualização...
        return view('dashboard.leituras.edit', ['leitura'=>$leitura]);
    }

    public function update (StoreLeiturasRequest $request, Leituras $leitura) {
        /*
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required'
        ]);
        */
        
        $titulo = $request->post('titulo');
        $leitura->titulo = $titulo;
        $autor= $request->post('autor');
        $leitura->autor = $autor;
        $genero = $request->post('genero');
        $leitura->genero = $genero;
        $paginas= $request->post('paginas');
        $leitura->paginas = $paginas;
        $editora = $request->post('editora');
        $leitura->editora = $editora;
        $idioma= $request->post('idioma');
        $leitura->idioma = $idioma;
        $resenha= $request->post('resenha');
        $leitura->resenha = $resenha;
        $frase = $request->post('frase');
        $leitura->frase = $frase;
        $nota= $request->post('nota');
        $leitura->nota = $nota;
        $leitura->save();
        return redirect()->to(route('leituras.show' , ['leitura'=>$leitura->id]));
    }

    public function destroy ($id) {
        //
    }
}
