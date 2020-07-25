<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_all', function (Blueprint $table) {
            $table->id('add_id');
            $table->id('add_category_id');
            $table->string('add_user_id', 100);
            $table->string('add_title', 100);
            $table->text('add_text');
            $table->string('add_tel', 100);
            $table->string('add_email', 100);
            $table->timestamps('add_date');
            $table->enum('add_status', ['published', 'unpublished'])->default('published');
            $table->string('add_update')->default(0);
            $table->foreign('add_category_id')->references('category_add_id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_all');
    }
}
