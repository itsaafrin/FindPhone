<?php

class PhoneDBTableSeeder extends Seeder
{
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('phonedb')->truncate();

        $phonedb = array(
            array(
                'name' => 'John',
                'social_security' => '123456',
                'phone' => '12345678'
            ),
            array(
                'name' => 'John',
                'social_security' => '123456',
                'phone' => '123456789'
            )
        );

        // Uncomment the below to run the seeder
        DB::table('phonedb')->insert($phonedb);
    }

}
