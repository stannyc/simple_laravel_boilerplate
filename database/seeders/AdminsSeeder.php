<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Bouncer;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
/*             $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
             */
            'name' => 'Superadmin',
            'email' => 'superadmin@akutes.id',
            'password'  => Hash::make('5U8#r4D!!!IN')
        ]);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@akutes.id',
            'password' => Hash::make('password')
        ]);

        $superadmin->assign('superadmin');
        $admin->assign('admin');

    }
}
