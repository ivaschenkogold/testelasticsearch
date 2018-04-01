<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'name' => 'Account1',
                'user_id' => 1
            ],

            [
                'name' => 'Account2',
                'user_id' => 1
            ],

            [
                'name' => 'Account3',
                'user_id' => 1
            ],

            [
                'name' => 'Account4',
                'user_id' => 1
            ],

            [
                'name' => 'Account5',
                'user_id' => 1
            ],

            [
                'name' => 'Account6',
                'user_id' => 1
            ],

            [
                'name' => 'Account7',
                'user_id' => 1
            ],

            [
                'name' => 'Account8',
                'user_id' => 1
            ],

            [
                'name' => 'Account9',
                'user_id' => 1
            ],

            [
                'name' => 'Account10',
                'user_id' => 1
            ],

            [
                'name' => 'Account11',
                'user_id' => 1
            ],

            [
                'name' => 'Account12',
                'user_id' => 1
            ],

            [
                'name' => 'Account13',
                'user_id' => 1
            ],
        ]);
    }
}
