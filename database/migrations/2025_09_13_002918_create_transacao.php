<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conta_id');
            $table->foreign('conta_id')->references('id')->on('conta');
            $table->enum('tipo', [
                'deposito', 
                'saque', 
                'transferencia_entrada', 
                'transferencia_saida', 
                'pagamento',
                'recarga_celular'
            ]);
            $table->string('descricao')->nullable();
            $table->decimal('valor', 14, 2);
            $table->unsignedBigInteger('conta_relacionada_id')->nullable();
            $table->foreign('conta_relacionada_id')->references('id')->on('conta')->nullOnDelete();
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
        Schema::dropIfExists('transacao');
    }
}
