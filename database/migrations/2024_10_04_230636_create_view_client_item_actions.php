<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        if (DB::connection()->getDriverName() === 'mysql') {
            DB::statement('
            CREATE VIEW view_client_item_actions AS
            SELECT
                c.id as client_id,
                c.company_name as client_name,
                c.collection_scenario_id as client_collection_scenario,
                i.item_type_id,
                i.due_date,
                a.action_name,
                a.no_of_days,
                DATE_ADD(i.due_date, INTERVAL a.no_of_days DAY) AS action_date
            FROM
                clients c
            JOIN
                items i ON c.id = i.company_id
            JOIN
                actions a ON c.collection_scenario_id = a.collection_scenario_id;
            ');
        }elseif(DB::connection()->getDriverName() === 'sqlsrv'){
            DB::statement('
            CREATE VIEW view_client_item_actions AS
            SELECT
                c.id as client_id,
                c.company_name as client_name,
                c.collection_scenario_id as client_collection_scenario,
                i.item_type_id,
                i.due_date,
                a.action_name,
                a.no_of_days,
                DATEADD(DAY, a.no_of_days, i.due_date) AS action_date
            FROM
                clients c
            JOIN
                items i ON c.id = i.company_id
            JOIN
                actions a ON c.collection_scenario_id = a.collection_scenario_id;
            ');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_client_item_actions');
    }
};
