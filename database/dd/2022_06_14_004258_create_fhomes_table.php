<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fhomes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('streetaddress')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->integer('zip_code')->nullable();   
            $table->string('phone')->nullable();
            $table->string('warranty')->nullable();
            $table->string('contact')->nullable();
            $table->string(' business_description')->nullable();
            $table->string('senior_discount')->nullable();
            $table->string('excluded_service')->nullable();
            $table->string('service')->nullable();
            $table->string('website')->nullable();
            $table->string('service_area')->nullable();
            $table->string('office_hour')->nullable();
            $table->string('licensed')->nullable();
            $table->string('city_served')->nullable();
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
        Schema::dropIfExists('fhomes');
    }
};
