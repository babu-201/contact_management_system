<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable(false);
            $table->string('email', 50)->nullable(false)->unique();
            $table->string('phone', 15);
            $table->string('address', 50);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};


// id: Integer, Primary Key


// name: String, Required


// email: String, Required, Unique


// phone: String, Optional


// address: String, Optional


// created_at: Timestamp


// updated_at: Timestamp


