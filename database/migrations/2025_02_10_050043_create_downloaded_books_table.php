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
        Schema::create('downloaded_books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('books_id')->constrained('books')->onDelete('cascade');
            $table->foreignId('agents_id')->constrained('agents')->onDelete('cascade');
            $table->string('cust_name');
            $table->string('cust_org');
            $table->string('cust_email');
            $table->date('downloaded_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('downloaded_books');
    }
};
