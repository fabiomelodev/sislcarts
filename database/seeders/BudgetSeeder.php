<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('budgets')->insert([
            'budget_type'  => 'Valor fechado',
            'value'        => '100',
            'service_id'   => 2,
            'customer_id'  => 1,
            'user_id'      => 1,
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);

        DB::table('budgets')->insert([
            'budget_type'  => 'Valor fechado',
            'value'        => '100',
            'service_id'   => 2,
            'customer_id'  => 2,
            'user_id'      => 1,
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ]);
    }
}
