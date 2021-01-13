<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserveTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_tb', function (Blueprint $table) {
            $table->string('reserve_id',16);               
            $table->string('user_id',255);
            $table->integer('number')->unique();    
            $table->string('reserve_time',255);          
            $table->enum('dlflag', ['1','2','3']);
            $table->timestamps();

            $table->primary('reserve_id','user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserve_tb');
    }
}
