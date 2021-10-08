<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoyagerThemesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('themes')->delete();

        DB::table('themes')->insert([
            [
                'id' => 1,
                'name' => 'Tailwind Theme',
                'folder' => 'tailwind',
                'active' => 0,
                'version' => '1.0',
                'created_at' => '2020-08-23 08:06:45',
                'updated_at' => '2020-08-23 08:06:45',
            ],
            [
                'id' => 2,
                'name' => 'Bimbala Theme',
                'folder' => 'bimbala',
                'active' => 1,
                'version' => '1.0',
                'created_at' => '2020-08-23 08:06:45',
                'updated_at' => '2020-08-23 08:06:45',
            ]
        ]);


    }
}
