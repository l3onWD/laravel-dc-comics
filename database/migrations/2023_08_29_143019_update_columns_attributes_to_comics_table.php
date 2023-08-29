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
        Schema::table('comics', function (Blueprint $table) {
            $table->text('description')->nullable()->change();
            $table->string('artists', 255)->nullable()->change();
            $table->string('writers', 255)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->text('description')->change();
            $table->string('artists', 255)->change();
            $table->string('writers', 255)->change();
        });
    }
};
