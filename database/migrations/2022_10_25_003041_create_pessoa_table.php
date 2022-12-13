<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->increments('cd_pessoa');
            $table->string('nm_pessoa', 200);
            $table->date('dt_nascimento');
            $table->string('cpf', 11);
            $table->string('rua', 200);
            $table->string('bairro', 200);
            $table->integer('numero');
            $table->integer('cep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa');
    }
}
