<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CountryTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::COUNTRY_DB, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country_en')->nullable();
            $table->string('city_en')->nullable();
            $table->string('country_fa')->nullable();
            $table->string('city_fa')->nullable();
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
        Schema::dropIfExists(Constants::COUNTRY_DB);
    }
}
