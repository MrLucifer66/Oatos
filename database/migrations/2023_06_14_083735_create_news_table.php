<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('news', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->text('summary'); // краткое описание новости
        $table->string('image')->nullable();
        $table->unsignedBigInteger('author_id'); // id автора новости
        $table->foreign('author_id')->references('id')->on('users'); // связываем с таблицей пользователей
        $table->timestamp('published_at')->nullable(); // дата публикации
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
        Schema::dropIfExists('news');
    }
}