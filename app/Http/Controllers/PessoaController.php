<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = <<<SQL
            SELECT cd_pessoa, nm_pessoa, dt_nascimento
              FROM pessoa
             ORDER BY cd_pessoa
SQL;
        $data = DB::select($sql);

        return view('pessoa.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //Adicionar
    {
        return view('pessoa.adicionar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // Criar pessoa
    {
        try {
            DB::beginTransaction();
            $pessoa = new Pessoa();
            $pessoa->nm_pessoa     = $request->nm_pessoa;
            $pessoa->dt_nascimento = $request->dt_nascimento;
            $pessoa->save();
            DB::commit();
            return redirect()->route('pessoa.create')->with('sucesso', 'Cadastrado com Sucesso!');
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->route('pessoa.create')->with('error', 'Erro pessoa já cadastrada!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit($cd_pessoa) // Editar Pessoa
    {
        $pessoa = Pessoa::findOrFail($cd_pessoa);

        return view('pessoa.editar')->with('pessoa', $pessoa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa) //Atualizar Pessoa
    {
        try {
            DB::beginTransaction();
            $pessoa->nm_pessoa       = $request->nm_pessoa;
            $pessoa->dt_nascimento   = $request->dt_nascimento;
            $pessoa->save();
            DB::commit();
            return redirect()->route('pessoa.index')->with('sucesso', 'Pessoa Atualizada com sucesso!');
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->route('pessoa.index')->with('error', 'Erro ao atualizar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy($cd_pessoa) //Exclui 
    {
        try {
            Pessoa::findOrFail($cd_pessoa)->delete();
            return redirect()->route('pessoa.index')->with('sucesso', 'Cliente excluído com sucesso!');
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->route('pessoa.index')->with('error', 'Erro ao excluir evento!');
        }
    }
}
