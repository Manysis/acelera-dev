<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Doc;

class CreateDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->integer('tamanho');
            $table->integer('num_assin');
            $table->string('assim_resp');
            $table->integer('qtd_paginas');
            $table->timestamps();
        });
        
        $this->newDoc('RG',65, 24, 'João Cleber Salino', 21);
        $this->newDoc('CNH',65, 42, 'Pedro Cleber Salino',  32);
        $this->newDoc('CNH',65, 92, 'Lucas Cleber Salino',  52);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docs');
    }
    public function newDoc($titulo,$tamanho,$num_assin, $assim_resp, $qtd_paginas){
        $cad = new doc();
        $cad->titulo = $titulo;
        $cad->tamanho = $tamanho;
        $cad->num_assin = $num_assin;
        $cad->assim_resp = $assim_resp;
        $cad->qtd_paginas = $qtd_paginas;
        $cad->save();
    }
}
