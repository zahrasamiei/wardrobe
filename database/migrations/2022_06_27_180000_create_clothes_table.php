<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image")->nullable();
            $table->unsignedBigInteger("client_id");
            $table->foreign("client_id")->references("id")->on("clients")->onDelete("cascade");
            $table->unsignedBigInteger("color_id");
            $table->foreign("color_id")->references("id")->on("colors")->onDelete("cascade");
            $table->unsignedBigInteger("occasion_id");
            $table->foreign("occasion_id")->references("id")->on("occasions")->onDelete("cascade");
            $table->unsignedBigInteger("season_id");
            $table->foreign("season_id")->references("id")->on("seasons")->onDelete("cascade");
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
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
        Schema::dropIfExists('clothes');
    }
}
