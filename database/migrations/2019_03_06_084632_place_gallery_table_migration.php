<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlaceGalleryTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::PLACE_GALLERY_DB, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('place_id');
            $table->string('path');
            $table->boolean('is_default')->default(false);
            $table->timestamps();
        });
        Schema::table(Constants::PLACE_GALLERY_DB, function (Blueprint $table) {
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
        Schema::dropIfExists(Constants::PLACE_GALLERY_DB);
    }
}
