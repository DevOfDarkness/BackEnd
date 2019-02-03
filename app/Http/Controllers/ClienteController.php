<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Resources\ClienteResource;

class ClienteController extends Controller
{

  public function list(){
    return Cliente::all();
  }


  public function create(Request $request){

    $cliente = new Cliente;

    $cliente->nome = $request->nome;
    $cliente->sexo = $request->sexo;
    $cliente->idade = $request->idade;
    $cliente->sobrenome = $request->sobrenome;
    $cliente->cpf_id = $request->cpf_id;
    $cliente->email = $request->email;
    $cliente->save();

    return response()->json([$cliente]);
    }

    public function show($id){
      $cliente = Cliente::findOrFail($id);
      return new ClienteResource($cliente);
  }


    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrfail($id);

        if($request->id)
          $cliente->id = $request->id;
        if($request->nome)
          $cliente->nome = $request->nome;
        if($request->sobrenome)
          $cliente->sobrenome = $request->sobrenome;
        if($request->cpf_id)
          $cliente->cpf_id = $request->cpf_id;
        if($request->sexo)
          $cliente->sexo = $request->sexo;
        if($request->email)
          $cliente->email = $request->email;
          if($request->idade)
          $cliente->idade = $request->idade;
        $cliente->save();

          return response()->json([$cliente]);
    }

      public function destroy($id)
      {
        Cliente::destroy($id);
        return response()->json(['DELETADO']);
      }



  }
