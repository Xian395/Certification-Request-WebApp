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
        Schema::create('bussiness_clearances', function (Blueprint $table) {
            $table->id();
            $table->string('businessName');
            $table->string('natureOfBusiness');
            $table->string('businessAddress');
            $table->string('ownerName');
            $table->string('ownerContact');
            $table->string('validID');
            $table->enum('rtype',['Business Clearance'])->default('Business Clearance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bussiness_clearances');
    }
};
