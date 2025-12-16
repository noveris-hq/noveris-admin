<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Disable FK checks to allow drops
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Drop customer_id FK if exists
        DB::statement('ALTER TABLE projects DROP FOREIGN KEY IF EXISTS `projects_customer_id_foreign`;');

        // Drop customer_id column if exists
        Schema::table('projects', function (Blueprint $table) {
            if (Schema::hasColumn('projects', 'customer_id')) {
                $table->dropColumn('customer_id');
            }
        });

        // Add user_id if not exists
        Schema::table('projects', function (Blueprint $table) {
            if (! Schema::hasColumn('projects', 'user_id')) {
                $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            }
        });

        // Re-enable FK checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            if (Schema::hasColumn('projects', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
        });

        // Optionally restore customer_id (if needed for rollback)
        Schema::table('projects', function (Blueprint $table) {
            if (! Schema::hasColumn('projects', 'customer_id')) {
                $table->foreignId('customer_id')->nullable()->constrained('customers')->onDelete('cascade');
            }
        });
    }
};
