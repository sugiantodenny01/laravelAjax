<?php

use Illuminate\Database\Seeder;
use App\admin;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin= new admin();
        $admin->name='admin123';
        $admin->password=bcrypt('admin');
        $admin->save();
    }
}
