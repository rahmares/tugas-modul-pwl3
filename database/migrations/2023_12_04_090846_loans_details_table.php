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
        Schema::dropIfExists('loans_details', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->unsignedBigInteger('loan_id');
            $table->unsignedBigInteger('book_id');
            $table->boolean('is_return');
            $table->timestamps();
            $table->foreign('loan_id')->references('id')->on('loans');
        $table->foreign('book_id')->references('id')->on('books');
        
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
        Schema::dropIfExists('loans_details');
        //
    }
};
