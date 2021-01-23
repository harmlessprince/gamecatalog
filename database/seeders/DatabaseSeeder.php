<?php

namespace Database\Seeders;

use App\Models\Gameplay;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        ini_set('memory_limit', '20480M');//allocate memory
        DB::disableQueryLog();//disable log
       
       
        $this->call([
            UserSeeder::class,
            GameSeeder::class,
            VersionUserSeeder::class,
            GameplaySeeder::class,
            GamplayPlayersSeeder::class,
            
        ]);
    }
}
