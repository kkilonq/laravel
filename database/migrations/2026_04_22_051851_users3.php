<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('users3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('SecondName');
            $table->date('birthday');
            $table->foreign('CytiName');
            $table->date('DateOfCreationUser');
            $table->integer('age')->nullable()->unsigned();
            $table->string('email')->comment('this email');
            $table->integer('salary')->default('0');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users3');
    }
};
