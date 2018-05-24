<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password',60);
            $table->enum('type', ['member', 'admin'])->default('member');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    //
    //Users: id, name, email, password, type(member, admin)
    //categories: id, name
    //Articles: id, title, content, category_id, user_id
    //Images: id, name, article_id
    //Tags: id, name
    //
    //
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
