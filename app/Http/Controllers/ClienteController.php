<?php

namespace Uxcamp\Http\Controllers;

use Illuminate\Http\Request;
use Uxcamp\Cliente;
use Uxcamp\Http\Requests\StoreClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    
    public function index(Request $request)
    {
        $name  = $request->get('name');
    	$slug = $request->get('slug');
    	$bio   = $request->get('bio');
        //$request->user()->authorizeRoles(['admin','user']);
        $clientes = Cliente::orderBy('id', 'DESC')
        ->name($name)
        ->slug($slug)
        ->bio($bio)
        ->paginate(2);
        //$clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = new Cliente();

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $namea = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $namea);
        }

        $cliente->name = $request->input('name');
        $cliente->bio = $request->input('bio');
        $cliente->avatar = $namea; 
        $cliente->slug = $request->input('name');
        $cliente->save();

        
        return redirect()->route('cliente.index');
        return view('cliente.card', $request);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        $cliente = Cliente::where('slug','=',$slug)->firstOrFail();
        //$cliente = Cliente::find($id);
        return view('cliente.show', compact('cliente'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        $cliente->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $namea = time().$file->getClientOriginalName();
            $cliente->avatar =$namea;
            $file->move(public_path().'/images/', $namea);
        }
        $cliente->save();
        return redirect()->route('cliente.show', [$cliente])->with('status','Cliente actualizado correctament');
        //return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        $file_path = public_path().'/images/'.$cliente->avatar;
        \File::delete($file_path);
        $cliente->delete();
        return redirect()->route('cliente.index')->with('status','Cliente Eliminado');
        //return 'deleted';
    }
}
