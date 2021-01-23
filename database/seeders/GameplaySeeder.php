<?php

namespace Database\Seeders;

use App\Models\Gameplay;
use App\Models\Version;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameplaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();//disable log
        //
        $startDate = Carbon::create(2014, 1, 1, 12);
        $gaminDays =60;
        // $gaminDays =300;
        // $noOfGamePlaysPerDay = 10;
        while ($gaminDays > 0) {
            $versionsAllowable = Version::where('year', '<=', $startDate->year)->get();
           
            $gameplayCount = 0;
            while ($gameplayCount < 50) {
                // $slectedGameVersion = $versionsAllowable->random()->id;
                $slectedGameVersion = $versionsAllowable->random()->id;
                $multiplayerChoice = array_rand([true, false], 1);
                $gameplayData [] = 
                [
                    'version_id'    =>  $slectedGameVersion,
                    'multiplayer'   =>  $multiplayerChoice,
                    'no_players'    =>   $multiplayerChoice ? rand(2, 3) : 1,
                    'created_at'    => $startDate,
                ];
                $gameplayCount++;
            }
            // $startDate->addYear();
            $startDate->addDay(1);
            $gaminDays--;
            echo $gaminDays . " gameplays left fetch" . "\n";
        }
        
        $gameplayDataInChunks = array_chunk($gameplayData, 100);
        foreach ($gameplayDataInChunks as $key => $gameplayDataInChunk) {
            print_r ((($key/5000)*100)*100) .PHP_EOL;
           Gameplay::insert($gameplayDataInChunk);
        }
       
    }
}
