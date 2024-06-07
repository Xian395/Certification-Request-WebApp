<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bcertificates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthDate');
            $table->string('contactNumber');
            $table->integer('age');
            $table->enum('sex', ['male', 'female']);
            $table->enum('civilStatus', ['single', 'married', 'divorced', 'widowed']);
            $table->string('occupation');
            $table->enum('purpose', ['Job', 'Scholarship', 'NBI', 'Police']);
            $table->enum('rtype', ['Barangay Certificate', 'Bussiness Clearance', 'Barangay Clearance'])->default('Barangay Certificate');
            $table->enum('status', ['approve', 'reject', 'on process', 'pending'])->default('pending');
            $table->timestamps('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bcertificates');
    }
};
