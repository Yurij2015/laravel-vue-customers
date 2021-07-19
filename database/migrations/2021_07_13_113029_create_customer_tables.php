<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 255)->comment('Customer Full Name');
            $table->string('email', 150)->comment('Email');
            $table->string('phone', 20)->comment('Phone Number');
            $table->string('telegram', 150)->comment('Telegram Login');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 155)->comment('Service Name');
            $table->string('description', 250)->comment('Service Description');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('orderdate')->comment('Order Date');
            $table->string('description', 250)->comment('Service Description');
            $table->unsignedBigInteger('customer_id')->index('customer_id')->comment('Customer Id');
            $table->unsignedBigInteger('service_id')->index('service_id')->comment('Service Id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('service_id')->references('id')->on('services');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
        Schema::dropIfExists('services');
        Schema::dropIfExists('orders');
    }
}
