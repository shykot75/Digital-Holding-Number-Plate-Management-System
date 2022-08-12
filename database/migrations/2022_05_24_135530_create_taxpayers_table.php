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
        Schema::create('taxpayers', function (Blueprint $table) {
            $table->id();
            $table->string('house_name');
            $table->string('house_owner');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('profession')->nullable();
            $table->text('road_name')->nullable();
            $table->text('present_address')->nullable();
            $table->text('land_quantity')->nullable();
            $table->longText('non_taxable_part')->nullable();
            $table->integer('men_number');
            $table->integer('women_number');
            $table->integer('other_number')->nullable();
            $table->integer('child_number')->nullable();
            $table->integer('disabled_number')->nullable();
            $table->integer('employee_number')->nullable();
            $table->integer('unemployee_number')->nullable();
            $table->integer('govt_benefi_number')->nullable();
            $table->integer('hw_number')->nullable();
            $table->tinyInteger('water_connection_number')->nullable();
            $table->string('connection_size')->nullable();
            $table->integer('subscribers_number')->nullable();
            $table->tinyInteger('sanitation_faicilities')->nullable();
            $table->tinyInteger('tubewell_facilities')->nullable();
            $table->text('fiscal_period');
            $table->text('effective_date');
            $table->text('image')->nullable();
            $table->string('mobile_number');
            $table->bigInteger('nid');
            $table->integer('ward_no');
            $table->string('holding_no');
            $table->string('category');
            $table->bigInteger('estimated_price')->nullable();
            $table->string('plate_no');
            $table->tinyInteger('holding_plate_status')->default('0');
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
        Schema::dropIfExists('taxpayers');
    }
};
