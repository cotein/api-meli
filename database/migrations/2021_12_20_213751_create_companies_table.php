<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->nullable();
            $table->string('number', 11)->nullable();
            $table->unsignedInteger('inscription_id')->nullable();
            $table->unsignedInteger('purchaser_document_id')->nullable();
            $table->json('datos_generales')->nullable();
            $table->json('regimen_general')->nullable();
            $table->json('monotributo')->nullable();
            $table->json('afip_data')->nullable();
            $table->boolean('percep_iibb')->default(false)->after('monotributo');
            $table->boolean('percep_iva')->default(false);
            $table->boolean('ret_suss')->default(false);
            $table->boolean('ret_iva')->default(false);
            $table->boolean('ret_iibb')->default(false);
            $table->boolean('ret_gcias')->default(false);
            $table->date('activity_init')->nullable()->after('ret_gcias');
            $table->string('iibb_conv')->nullable();
            $table->json('settings')->nullable();
            $table->integer('pto_vta_fe')->unsigned()->nullable();
            $table->integer('pto_vta_fe_exterior')->unsigned()->nullable();
            $table->integer('pto_vta_fce')->unsigned()->nullable();
            $table->integer('pto_vta_fce_exterior')->unsigned()->nullable();
            $table->integer('pto_vta_remito')->unsigned()->nullable();
            $table->integer('pto_vta_remito_exterior')->unsigned()->nullable();
            $table->integer('pto_vta_recibo')->unsigned()->nullable();
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
        Schema::dropIfExists('companies');
    }
}
