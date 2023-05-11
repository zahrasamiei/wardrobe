<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReplyIdToMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropColumn(["reply"]);
            $table->unsignedBigInteger("reply_id")->nullable();
            $table->foreign("reply_id")->references("id")->on("messages")->onDelete("cascade");
            $table->unsignedBigInteger("admin_id")->nullable();
            $table->foreign("admin_id")->references("id")->on("admins")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->text("reply")->nullable();
            $table->dropColumn(["reply_id", "admin_id"]);
        });
    }
}
