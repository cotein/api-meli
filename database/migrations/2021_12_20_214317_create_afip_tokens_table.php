<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfipTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afip_tokens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ws')->nullable();
            $table->string('unique_id')->nullable();
            $table->string('generation_time')->nullable();
            $table->string('expiration_time')->nullable();
            $table->text('token')->nullable();
            $table->text('sign')->nullable();
            $table->string('environment')->nullable();
            $table->boolean('active')->nullable();
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
        Schema::dropIfExists('afip_tokens');
    }
}
