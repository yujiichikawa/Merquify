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
        DB::unprepared("
            CREATE TRIGGER create_store_after_vendor
            AFTER INSERT ON users
            FOR EACH ROW
            BEGIN
                IF NEW.user_type = 'vendor' THEN
                    INSERT INTO stores (
                        seller_id,
                        name,
                        created_at,
                        updated_at
                    )
                    VALUES (
                        NEW.id,
                        CONCAT('Loja de ', NEW.name),
                        NOW(),
                        NOW()
                    );
                END IF;
            END;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS create_store_after_vendor;');
    }
};
