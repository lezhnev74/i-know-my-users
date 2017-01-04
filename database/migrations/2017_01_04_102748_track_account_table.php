<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrackAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_account', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            //
            // This data is filled up by client
            //
            $table->string('account_key', 191)->index();
            $table->text('account_payload');
            
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('track_account');
    }
}
