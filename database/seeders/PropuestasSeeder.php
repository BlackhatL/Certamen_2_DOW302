<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('estudi')->insert([
            ['rut'=>'20224312-6','nombre'=>'Lautaro','apellido'=>'Piderit','email'=>'lpiderit@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'20484779-7','nombre'=>'Nelson','apellido'=>'Amigo','email'=>'amigocordovanelson@gmail.com','created_at'=>Carbon::now()]
        ]);
    }
}
