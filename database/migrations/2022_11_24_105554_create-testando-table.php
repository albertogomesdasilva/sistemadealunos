<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestandoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testando', function (Blueprint $table) {
            $table->id();
            $table->string('string');
            $table->integer('integer');
            $table->decimal('decimal');
            $table->boolean('boolean')->default(0);
            $table->enum('enum', ['opcao_1', 'opcao_2', 'opcao_3']);
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
        //
    }
}
