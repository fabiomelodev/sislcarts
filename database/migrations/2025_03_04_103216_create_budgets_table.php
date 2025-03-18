<?php

use App\Models\Customer;
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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('type_budget');
            $table->string('value')->nullable();
            $table->string('per_hour')->nullable();
            $table->string('service_type')->nullable();
            $table->string('frame_type')->nullable();
            $table->string('frame_size')->nullable();
            $table->foreignIdFor(Customer::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
