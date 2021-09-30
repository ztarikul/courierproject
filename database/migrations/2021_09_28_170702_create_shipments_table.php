<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string("s_company")->nullable();
            $table->string("s_name")->nullable();
            $table->string("s_address")->nullable();
            $table->string("s_country")->nullable();
            $table->string("s_state")->nullable();
            $table->string("s_city")->nullable();
            $table->string("s_zipcode")->nullable();
            $table->string("s_nidorpp")->nullable();
            $table->string("s_telephone")->nullable();
            $table->string("s_mobile")->nullable();
            $table->string("r_company")->nullable();
            $table->string("r_name")->nullable();
            $table->string("r_address")->nullable();

            $table->string("r_country")->nullable();
            $table->string("r_city")->nullable();
            $table->string("r_zipcode")->nullable();
            $table->string("r_id")->nullable();
            $table->string("r_mobile")->nullable();
            $table->string("r_telephone")->nullable();
            $table->string("cou_name")->nullable();
            $table->string("cou_number")->nullable();
            $table->string("cou_sample")->nullable();
            $table->string("cou_height")->nullable();
            $table->string("cou_width")->nullable();
            $table->string("cou_length")->nullable();
            $table->string("v_weight")->nullable();
            $table->string("g_weight")->nullable();
            $table->string("prepaid_amount")->nullable();
            $table->string("coll_amount")->nullable();
            $table->string("booked_by")->nullable();
            $table->string("dateNtime")->nullable();

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
        Schema::dropIfExists('shipments');
    }
}
