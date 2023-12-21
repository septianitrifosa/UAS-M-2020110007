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
        Schema::create('transactions', function (Blueprint $table) {
            $table->integer('id')->index()->autoIncrement90;
            $table->string('kategori');
            $table->double('nominal');
            $table->string('tujuan');
            $table->char('account_id');
            $table->timestamp('created_at')->default(null);
            $table->timestamp('updated_at')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
