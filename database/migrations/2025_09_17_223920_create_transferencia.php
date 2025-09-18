<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferencia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conta_origem_id');
            $table->foreign('conta_origem_id')
                ->references('id')
                ->on('conta');
            $table->timestamps();
            $table->unsignedBigInteger('conta_destino_id');
            $table->foreign('conta_destino_id')
                ->references('id')
                ->on('conta');
            $table->double('valor', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transferencia');
    }
}
