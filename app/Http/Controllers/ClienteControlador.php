<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class ClienteControlador extends Controller
{

    private $clientes = [
        ['id' => 1,'nome' => "Ademir"],
        ['id' => 2,'nome' => 'Carla'],
        ['id' => 3,'nome' => 'Bruna'],
        ['id' => 4,'nome' => 'Leila']
    ];

    public function __construct()
    {
        $clientes = session('clientes');
        if(!isset($clientes))
        {
            session(['clientes' => $this->clientes]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = session('clientes');
        return view('clientes.index', ['clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        $id = end($clientes)['id'] + 1;
        $nome = $request->nome;
        $dados = ['id'=>$id, 'nome'=>$nome];
        $clientes[] = $dados;
        session(['clientes'=> $clientes]);
        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $clienteID = $clientes[$index];
        return view('clientes.info', ['clientes'=>$clienteID]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $clienteID = $clientes[$index];
        return view('clientes.edit', ['clientes'=>$clienteID]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $clientes[$index]['nome']= $request->nome;
        session(['clientes'=>$clientes]);
        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        array_splice($clientes, $index,1);
        session(['clientes' => $clientes]);
        return redirect()->route('cliente.index');
    }

    private function getIndex($id, $clientes){
        $ids = array_column($clientes, 'id');
        $index = array_search($id, $ids);
        return $index;
    }
}
