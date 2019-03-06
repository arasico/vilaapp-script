<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlaceTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::PLACE_DB, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('title_en')->nullable();
            $table->string('title_fa')->nullable();
            $table->string('desc_en')->nullable();
            $table->string('desc_fa')->nullable();
            $table->bigInteger('price');
            $table->bigInteger('type_id');
            $table->bigInteger('country_id');
            $table->string('address_en')->nullable();
            $table->string('address_fa')->nullable();
            $table->bigInteger('lat');
            $table->bigInteger('long');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table(Constants::PLACE_DB, function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on(Constants::USERS_DB)->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on(Constants::TYPE_DB)->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on(Constants::COUNTRY_DB)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::PLACE_DB);
    }
}
