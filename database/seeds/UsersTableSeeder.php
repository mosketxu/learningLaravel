<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 1)->create([
        	'name' => 'admin',
	        'email' => 'admin@mail.com',
	        'password' => bcrypt('secret'),
	        'role_id' => \App\Role::ADMIN
        ])
        ->each(function (\App\User $u) {
        	factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

	    factory(\App\User::class, 1)->create([
		    'name' => 'student',
		    'email' => 'student@mail.com',
		    'password' => bcrypt('secret'),
		    'role_id' => \App\Role::STUDENT
	    ])
	        ->each(function (\App\User $u) {
	            factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
	        });

	    factory(\App\User::class, 50)->create()
            ->each(function (\App\User $u) {
                 factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
            });

	    factory(\App\User::class, 10)->create()
            ->each(function (\App\User $u) {
	             factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
                 factory(\App\Teacher::class, 1)->create(['user_id' => $u->id]);
            });
    }
}
