<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('writer');
            $table->Integer('catagory_id');
            $table->TinyInteger('qty');
            $table->TinyInteger('original_price');
            $table->TinyInteger('selling_price');
            $table->string('image');
            $table->string('disciption');
            $table->char('status');
            $table->char('tax');
            // catagory information 
            $table->string('slug');
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
        Schema::dropIfExists('_books');
    }
}
