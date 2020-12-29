<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id',16);               //userid:PK
            $table->string('email',255)->nullable();    //メール:UQ
            $table->string('tel',20)->nullable();       //電話番号
            $table->string('age')->nullable();          //住所
            $table->enum('sex', ['1','2','3']);         //性別
            $table->string('password',255);             //パスワード
            $table->enum('dlflag', ['1','2','3']);      //削除フラグ
            $table->timestamps();                       //create_day update_day 
            
            $table->primary(['user_id']); // primary
            $table->unique(['email']); // unique
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_tb');
    }
}
