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
        Schema::create('payment_gateways', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->string('relation_table')->nullable();
            $table->integer('relation_id')->nullable();
            $table->foreignId('base_currency_id')->constrained('currencies');
            $table->string('type')->nullable(); //sslcommerz, shohozpay, stripe, scrill, paypal
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('store_id')->nullable(); //use by sslcommerz
            $table->string('vendor_id')->nullable(); //use by paddle
            $table->string('key')->nullable(); //use by stripe, paddle
            $table->string('secret')->nullable(); //use by stripe
            $table->string('webhook_secret')->nullable(); //use by stripe
            $table->string('auth_code')->nullable(); //use by paddle

            $table->boolean('active')->default(1);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_gateways');
    }
};
