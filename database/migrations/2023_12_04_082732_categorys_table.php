<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('categorys', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('categories', 255);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('user'); 
           
            
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorys');
        //
    }
};
