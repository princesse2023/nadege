<?php

namespace Database\Seeders;
use App\Models\Specialite;
use Illuminate\Database\Seeder;

class SpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialite::create([
            'nom'=>'pediatrie'
        ]);
        Specialite::create([
            'nom'=>'maternité'
        ]);
        Specialite::create([
            'nom'=>'cardiologie'
        ]);
        Specialite::create([
            'nom'=>'dermatologie'
        ]);
    }
}
