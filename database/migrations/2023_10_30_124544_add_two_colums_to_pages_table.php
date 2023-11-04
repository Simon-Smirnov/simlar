<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('h1', 256)->after('url')->nullable();
            $table->string('meta_title', 128)->after('h1')->nullable();
            $table->string('meta_description', 256)->after('meta_title')->nullable();
            
        });
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['meta_title', 'meta_description']);
        });
    }
};
