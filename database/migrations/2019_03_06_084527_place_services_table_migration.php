<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlaceServicesTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::PLACE_SERVICES_DB, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('place_id');
            $table->string('key');
            $table->json('value');
            $table->bigInteger('created_at');
        });
        Schema::table(Constants::PLACE_SERVICES_DB, function (Blueprint $table) {
            $table->foreign('place_id')->references('id')->on(Constants::PLACE_DB)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::PLACE_SERVICES_DB);
    }
}
