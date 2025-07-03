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
        Schema::table('student', function (Blueprint $table) {
            //
            $table->string('age')->after('email');
            $table->string('date_of_birth')->after('age');
            $table->enum('gender',['M','F'])->default('F')->after('date_of_birth');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student', function (Blueprint $table) {
            //
            $table->dropColumn(['age', 'date_of_birth', 'gender']);
        });
    }
};
