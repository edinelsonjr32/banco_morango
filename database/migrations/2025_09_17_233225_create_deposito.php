<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeposito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposito', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conta_id');
            $table->foreign('conta_id')
                ->references('id')
                ->on('conta');
            $table->timestamps();
            $table->double('valor', 10, 2);
            $table->unsignedBigInteger('depositante_id');
            $table->foreign('depositante_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposito');
    }
}
