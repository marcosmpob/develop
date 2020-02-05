<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('documento')->unique();
            $table->string('email');
            $table->string('telefone');
            $table->boolean('inadimplente');
            $table->date('data_nasc')->nullable();
            $table->char('sexo')->nullable();
            $table->enum('estado_civil', array_keys(\App\Cliente::ESTADOS_CIVIS))->nullable();
            $table->string('deficiencia_fisica')->nullable();
            $table->string('fantasia')->nullable();
            $table->string('pessoa');
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
        Schema::dropIfExists('Clientes');
    }
}