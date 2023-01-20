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
        Schema::create('books', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->unsignedInteger('available_books');
            $table->decimal('price', 20, 2);
            $table->text('description');
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
};
