<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('userdbs', function (Blueprint $table) {
        	$table->id();
        	$table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('photo')->nullable();
            $table->string('combine_photo')->nullable();
            $table->string('birth_reg')->nullable();
            $table->string('nid')->nullable();
            $table->string('marriage_certificate')->nullable();
            $table->text('p_address')->nullable();
            $table->text('m_address')->nullable();
            $table->date('dob')->nullable();
            $table->string('profession')->nullable();
        	$table->timestamps();
    	});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
   
    }
};
