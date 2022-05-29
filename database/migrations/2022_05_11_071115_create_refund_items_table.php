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
        Schema::create('refund_items', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();

            //table column structure will be here
            $table->foreignId('invoice_item_id')->constrained('invoice_items');
            $table->double('amount' , 15 , 2);
            $table->double('nr_amount' , 15 , 2);
            $table->double('refundable_amount' , 15 , 2);

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
        Schema::dropIfExists('refund_items');
    }
};
