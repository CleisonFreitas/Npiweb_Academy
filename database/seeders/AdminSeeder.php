<?php

namespace Database\Seeders;
use App\Models\Admin;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'      => 'Administrador',
            'email'     => 'admin@npitecnologia.com.br',
            'password'  => Hash::make('secret@2025'),
            'status'    => 'Ativo',
            'profile'   => 'undraw_profile_2.svg',
        ]);
    }
}
