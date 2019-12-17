<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name' => 'HTML',            
        ]);

        DB::table('skills')->insert([
            'name' => 'CSS',            
        ]);

        DB::table('skills')->insert([
            'name' => 'JavaScript',            
        ]);

        DB::table('skills')->insert([
            'name' => 'PHP',            
        ]);

        DB::table('skills')->insert([
            'name' => 'MySQL',            
        ]);

        DB::table('skills')->insert([
            'name' => 'Laravel',            
        ]);

        DB::table('skills')->insert([
            'name' => 'WordPress',            
        ]);
//
    }
}
