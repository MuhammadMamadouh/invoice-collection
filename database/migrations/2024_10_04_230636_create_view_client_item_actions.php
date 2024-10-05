<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        if (DB::connection()->getDriverName() === 'mysql') {
            DB::statement('
            CREATE OR ALTER VIEW view_client_item_actions AS
            SELECT
                c.id as client_id,
                c.company_name as client_name,
                c.collection_scenario_id as collection_scenario_id,
				cs.en_name collection_scenario_name,
                i.item_type_id,
				i.remaining_amount_inc_tax,
                i.due_date,
                a.action_name,
				a.automatic_action,
				a.automatic_action_to_be_confirmed,
				a.internal_interactive_emailLink,
				a.action_type_id,
				act.en_name action_type_name,
				act.icon as action_type_icon,
                a.no_of_days,
                DATE_ADD(i.due_date, INTERVAL a.no_of_days DAY) AS action_date
            FROM
                clients c
            JOIN
                items i ON c.id = i.company_id
            JOIN
                actions a ON c.collection_scenario_id = a.collection_scenario_id
            JOIN
                action_types act ON a.action_type_id = act.id
            JOIN
				collection_scenarios cs ON cs.id = c.collection_scenario_id
            ');
        } elseif (DB::connection()->getDriverName() === 'sqlsrv') {
            DB::statement('
            CREATE OR ALTER VIEW view_client_item_actions AS
                WITH RankedActions AS (
                    SELECT
                        c.id as client_id,
                        c.company_name as client_name,
                        c.collection_scenario_id as collection_scenario_id,
                        cs.en_name as collection_scenario_name,
                        i.item_type_id,
                        i.remaining_amount_inc_tax,
                        i.due_date,
                        a.action_name,
                        a.automatic_action,
                        a.automatic_action_to_be_confirmed,
                        a.internal_interactive_emailLink,
                        a.action_type_id,
                        act.en_name as action_type_name,
                        act.icon as action_type_icon,
                        a.no_of_days,
                        DATEADD(DAY, a.no_of_days, i.due_date) AS action_date,
                        ROW_NUMBER() OVER (PARTITION BY c.id ORDER BY i.due_date ASC) as row_num
                    FROM
                        clients c
                    JOIN
                        items i ON c.id = i.company_id
                    JOIN
                        actions a ON c.collection_scenario_id = a.collection_scenario_id
                    JOIN
                        action_types act ON a.action_type_id = act.id
                    JOIN
                        collection_scenarios cs ON cs.id = c.collection_scenario_id
                )
                SELECT
                    client_id,
                    client_name,
                    collection_scenario_id,
                    collection_scenario_name,
                    item_type_id,
                    remaining_amount_inc_tax,
                    due_date,
                    action_name,
                    automatic_action,
                    automatic_action_to_be_confirmed,
                    internal_interactive_emailLink,
                    action_type_id,
                    action_type_name,
                    action_type_icon,
                    no_of_days,
                    action_date
                FROM
                    RankedActions
                WHERE
            row_num = 1;
            ');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('view_client_item_actions');
    }
};
