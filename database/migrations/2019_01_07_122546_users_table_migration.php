<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::USERS_DB, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->rememberToken()->nullable();
            $table->string('gmail');
            $table->integer('active');
            $table->string('user_level');
            $table->tinyInteger('auto_charge');
            $table->string('name');
            $table->integer('birthday');
            $table->text('bio');
            $table->integer('gender')->nullable();
            $table->string('ref_link')->nullable();
            $table->json('info')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::USERS_DB);
    }
}
