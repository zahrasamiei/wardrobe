<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutfitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outfits', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("season_id")->nullable();
            $table->foreign("season_id")->references("id")->on("seasons")->onDelete("cascade");
            $table->unsignedBigInteger("occasion_id")->nullable();
            $table->foreign("occasion_id")->references("id")->on("occasions")->onDelete("cascade");
            $table->tinyInteger("bookmarked")->default(0);
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
        Schema::dropIfExists('outfits');
    }
}
