<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('profesores')->insert([
            ['rut'=>'12345654-6','nombre'=>'Hernan','apellido'=>'Saavedra','created_at'=>Carbon::now()],
            ['rut'=>'09155654-6','nombre'=>'Dagoberto','apellido'=>'Cabrera','created_at'=>Carbon::now()]
        ]);
    }
}
