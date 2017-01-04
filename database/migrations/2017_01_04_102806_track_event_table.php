<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrackEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_event', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            //
            // This data is filled up by client
            // Each event may have account or session keys
            //
            $table->string('event_account_key', 191)->index()->nullable();
            $table->string('event_session_key', 191)->index()->nullable();
            $table->text('event_payload');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('track_event');
    }
}
