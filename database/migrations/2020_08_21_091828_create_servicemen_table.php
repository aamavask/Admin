<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicemen', function (Blueprint $table) {
            $table->id();
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->('Email');
            $table->string('Password');
            $table->('Put_Image');
            $table->string('Mobile_Number');
            $table->string('Employee_Address');
            $table->date('DOB');
            $table->string('Adhaar_Number');
            $table->string('Shop_Name');
            $table->string('Order_Completed');
            $table->('Shop_Image');
            $table->string('Shop_Address');
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
        Schema::dropIfExists('servicemen');
    }
}
