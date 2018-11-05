<?php

use Illuminate\Database\Seeder;

class CreateDirectoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //el pathh es /resources/public  se define en el fichero /config/filesystems.php
        Storage::deleteDirectory('courses');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');
    }
}
