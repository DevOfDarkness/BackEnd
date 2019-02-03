<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remedio;

class RemedioController extends Controller
{
          public function list(){
          return Remedio::all();
          }


        public function create(Request $request)
          {
          $remedio = new Remedio;

          $remedio->cliente_id = $request->cliente_id;
          $remedio->nome_remedio = $request->nome_remedio;
          $remedio->tipo = $request->tipo;
          $remedio->data_de_fabricacao = $request->data_de_fabricacao;
          $remedio->data_de_vencimento = $request->data_de_vencimento;
          $remedio->qtd_Estoque = $request->qtd_Estoque;
          $remedio->dia_de_chegada = $request->dia_de_chegada;
          $remedio->save();

          return response()->json([$remedio]);
          }

        public function show($id)
          {
          $remedio = Remedio::findOrFail($id);
          return response()->json([$remedio]);
          }

        public function update(Request $request, $id)
          {
          $remedio = Remedio::findOrfail($id);

          if($request->remedio_id)
            $remedio->cliente_id= $request->cliente_id;
          if($request->id)
            $remedio->id= $request->id;
          if($request->nome_remedio)
            $remedio->nome_remedio = $request->nome_remedio;
          if($request->tipo)
            $remedio->tipo = $request->tipo;
          if($request->dia_de_chegada)
            $remedio->dia_de_chegada = $request->dia_de_chegada;
          if($request->data_de_fabricacao)
            $remedio->data_de_fabricacao = $request->data_de_fabricacao;
          if($request->data_de_vencimento)
            $remedio->data_de_vencimento = $request->data_de_vencimento;
          if($request->qtd_Estoque)
            $remedio->qtd_Estoque = $request->qtd_Estoque;
          $remedio->save();

          return response()->json([$remedio]);
          }

          public function destroy($id)
          {
            Remedio::destroy($id);
            return response()->json(['DELETADO']);
          }
  }
