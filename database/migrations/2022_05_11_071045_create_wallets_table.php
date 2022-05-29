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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();

            //table column structure will be here
            $table->foreignId('currency_id')->constrained('currencies');
            $table->string('wallet_type');
            $table->string('relation_id');
            $table->double('balance' , 15 , 2);
            $table->double('pending_amount' , 15 , 2);

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
        Schema::dropIfExists('wallets');
    }
};
