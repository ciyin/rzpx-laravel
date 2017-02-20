<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name'=>'刘丹霞',
            'email'=>'liudanxia@onebest.cn',
            'password'=>bcrypt('123456'),
            'role_id'=>'1',
            'status'=>'1',
            'city'=>'上海',
            'created_by'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
