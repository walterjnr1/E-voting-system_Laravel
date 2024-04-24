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
        Schema::create('tblvoters', function (Blueprint $table) {
            $table->ID();
            $table->string('voterID')->unique();
            $table->string('fullname');
            $table->string('maritalstatus');
            $table->string('sex');
            $table->string('DOB');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('lga');
            $table->string('state');
            $table->string('occupation');
            $table->string('status');
            $table->string('educational_qualification');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('photo')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblvoters');
    }
};
