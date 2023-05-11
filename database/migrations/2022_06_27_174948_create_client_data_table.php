<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("client_id")->unique();
            $table->foreign("client_id")->references("id")->on("clients")->onDelete("cascade");
            $table->integer("weight")->nullable();
            $table->integer("height")->nullable();
            $table->unsignedBigInteger("body_shape_id")->nullable();
            $table->foreign("body_shape_id")->references("id")->on("body_shapes")->onDelete("cascade");
            $table->unsignedBigInteger("gender_id");
            $table->foreign("gender_id")->references("id")->on("genders")->onDelete("cascade");
            $table->integer("chest_size")->nullable();
            $table->integer("waist_size")->nullable();
            $table->integer("hip_size")->nullable();
            $table->integer("collar_size")->nullable();
            $table->integer("shoe_size")->nullable();
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
        Schema::dropIfExists('client_data');
    }
}
