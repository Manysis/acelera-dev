<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Assinatura;

class CreateAssinaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assinaturas', function (Blueprint $table) {
            $table->id();            
            $table->integer('qtd_caracteres');   
            $table->string('assim_padrao'); 
            $table->integer('num_assin_used');
            $table->timestamps();
        });
        $this->newSing('15','Romulando Alencar Tavares','2');
        $this->newSing('26','João Silvasantos','6');
        $this->newSing('30','Geral Castanhares Pereira', '12');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assinaturas');
    }

    public function newSing($qtd_caracteres,$assim_padrao,$num_assin_used){
        $cad = new Assinatura();
        $cad->qtd_caracteres = $qtd_caracteres;
        $cad->assim_padrao = $assim_padrao;
        $cad->num_assin_used = $num_assin_used;
        $cad->save();
    }
}
