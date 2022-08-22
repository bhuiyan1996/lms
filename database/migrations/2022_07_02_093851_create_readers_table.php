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
        Schema::create('readers', function (Blueprint $table) {
            $table->id()->startingValue(01);
            $table->string('name');
            $table->integer('refid');
            // $table->integer('id');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->enum('gender', ['male', 'female'])->default('male');
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
        Schema::dropIfExists('readers');
    }
};
