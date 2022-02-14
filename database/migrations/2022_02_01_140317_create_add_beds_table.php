<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddBedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_beds', function (Blueprint $table) {
            $table->id();
            // $table->string('hospitalname');
            // $table->string('hospitalimage');
            $table->string('total_bed')->nullable();
            $table->string('available_bed')->nullable();
            $table->string('total_icu')->nullable();
            $table->string('available_icu')->nullable();
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
        Schema::dropIfExists('add_beds');
    }
}
