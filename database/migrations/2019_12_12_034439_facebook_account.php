<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FacebookAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facebook_account', function (Blueprint $table) {
            $table->string('facebook_id','50')->nullable(false);
            $table->bigInteger('user_profile_id')->unsigned()->nullable(false);
            $table->foreign('user_profile_id')->references('id')->on('user_profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facebook_account');
    }
}
