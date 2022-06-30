<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {

            $table->id();
    
            $table->string("agency", 20);
            $table->string("departure_station", 20);
                    
            $table->string("arrival_station", 20);
            $table->date("departure_time");
            $table->date("arrival_time");
            $table->string("train_code", 8);
            $table->unsignedTinyInteger("carrage_numbers");
            $table->boolean("is_on_time");
            $table->boolean("is_canceled");
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
        Schema::dropIfExists('trains');
    }
}
