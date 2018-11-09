<?php

namespace Uxcamp\Http\Controllers;

use Illuminate\Http\Request;
use Uxcamp\Empresa;
use Uxcamp\Http\Requests\Store;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    
    public function index(Request $request)
    {
       //$request->user()->authorizeRoles(['admin','user']);
        //$empresas = empresa::all();

        $name  = $request->get('name');
        $slug = $request->get('slug');
        $bio   = $request->get('bio');
        $empresas = Empresa::orderBy('id', 'DESC')
        ->name($name)
        ->slug($slug)
        ->bio($bio)
        ->paginate(10);
        return view('empresa.index', compact('empresas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin','domin']);
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $empresa = new Empresa();

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $namea = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $namea);
        }

        $empresa->name = $request->input('name');
        $empresa->bio = $request->input('bio');
        $empresa->avatar = $namea; 
        $empresa->slug = $request->input('slug');
        $empresa->save();

        
        return redirect()->route('empresa.index');
    }

    public function show(empresa $empresa)
    {
        //$empresa = empresa::where('slug','=',$slug)->firstOrFail();
        //$empresa = empresa::find($id);
        return view('empresa.show', compact('empresa'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(empresa $empresa)
    {

        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empresa $empresa)
    {
        $request->user()->authorizeRoles(['admin','domin']);
        $empresa->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $namea = time().$file->getClientOriginalName();
            $empresa->avatar =$namea;
            $file->move(public_path().'/images/', $namea);
        }
        $empresa->save();
        return redirect()->route('empresa.show', [$empresa])->with('status','empresa actualizado correctament');
        //return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, empresa $empresa)
    {
        $request->user()->authorizeRoles(['admin','domin']);
        $file_path = public_path().'/images/'.$empresa->avatar;
        \File::delete($file_path);
        $empresa->delete();
        return redirect()->route('empresa.index')->with('status','empresa Eliminado');
        //return 'deleted';
    }
}
