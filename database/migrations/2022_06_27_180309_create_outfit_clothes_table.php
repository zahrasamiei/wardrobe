<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutfitClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outfit_clothes', function (Blueprint $table) {
            $table->unsignedBigInteger("cloth_id");
            $table->foreign("cloth_id")->references("id")->on("clothes")->onDelete("cascade");
            $table->unsignedBigInteger("outfit_id");
            $table->foreign("outfit_id")->references("id")->on("outfits")->onDelete("cascade");
            $table->unique(["cloth_id", "outfit_id"]);
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
        Schema::dropIfExists('outfit_clothes');
    }
}
