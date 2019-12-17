<?php

use Illuminate\Database\Seeder;

class InternsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interns')->insert([
            'firstname' => 'Océane',
            'lastname' => 'Belardi',
            'email' => 'o.belardi@it-students.fr',
            'age' => 30,
            'phone_number' => 0621211223
        ]);

        DB::table('interns')->insert([
            'firstname' => 'Benoit',
            'lastname' => 'Perus',
            'email' => 'b.perus@it-students.fr',
            'age' => 30,
            'phone_number' => 0625511223
        ]);

        DB::table('interns')->insert([
            'firstname' => 'Norhen',
            'lastname' => 'Wachani',
            'email' => 'n.wachani@it-students.fr',
            'age' => 30,
            'phone_number' => 0621211553
        ]);

        DB::table('interns')->insert([
            'firstname' => 'Soline',
            'lastname' => 'Molowa',
            'email' => 's.molowa@it-students.fr',
            'age' => 30,
            'phone_number' => 0621211773
        ]);

        DB::table('interns')->insert([
            'firstname' => 'Adam',
            'lastname' => 'Agoune',
            'email' => 'a.agoune@it-students.fr',
            'age' => 30,
            'phone_number' => 0621214423
        ]);

        DB::table('interns')->insert([
            'firstname' => 'Quentin',
            'lastname' => 'Dessertine',
            'email' => 'q.dessertine@it-students.fr',
            'age' => 30,
            'phone_number' => 0621451223
        ]);
        
        DB::table('interns')->insert([
            'firstname' => 'Quentin',
            'lastname' => 'Palmer',
            'email' => 'q.palmer@it-students.fr',
            'age' => 30,
            'phone_number' => 0653451223
        ]);
        
        DB::table('interns')->insert([
            'firstname' => 'Elisabeth',
            'lastname' => 'Hoarau',
            'email' => 'e.hoarau@it-students.fr',
            'age' => 30,
            'phone_number' => 0613451223
        ]);

        DB::table('interns')->insert([
            'firstname' => 'Lasmy',
            'lastname' => 'Rathipanya',
            'email' => 'l.rathipanya@it-students.fr',
            'age' => 30,
            'phone_number' => 0621451463
        ]);

        DB::table('interns')->insert([
            'firstname' => 'Orkun',
            'lastname' => 'Selçuk',
            'email' => 'o.selcuk@it-students.fr',
            'age' => 30,
            'phone_number' => 0621451223
        ]);

        DB::table('interns')->insert([
            'firstname' => 'Claire',
            'lastname' => 'Magisson-Bonnel',
            'email' => 'c.magisson-bonnel@it-students.fr',
            'age' => 30,
            'phone_number' => 0613451253
        ]);
        
    }
}
