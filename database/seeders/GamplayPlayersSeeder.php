<?php

namespace Database\Seeders;

use App\Models\Gameplay;
use App\Models\User;
use App\Models\Version;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;


class GamplayPlayersSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $games = 1500;
        $gameplays = Gameplay::all();

        // echo "We are creating " . $games . "number of games been played by players" . "\n";
        // while ($games > 0) {
        //     $randomID = rand(1, 1500);
        //     // $randomID = rand(1, 73);
        //     $value = Gameplay::where('id', $randomID)->first();

        //     $noOfUsers = $value->no_players;
        //     echo $games . " gameplays left to fecth" . "\n";
        //     echo "Picked gameplay of id: " . $value->id . "\n";
            //  echo $gameplay;

            // echo $noOfUsers;
            // $countForNoOfUsers = 0;

          

            foreach ($gameplays as  $gameplay) {
                for ($i = 0; $i < $gameplay->no_players; $i++) {
                    $role = ($i == 0) ? 'host' : 'guest';
                    $randomUserId = rand(1, 50);
                    $userID = User::where('id', $randomUserId)->value('id');
                    // $usercounts =  User::where('id', $userID)->withCount('gameplays')->get();
                    //check if user has the version of game
                    // if (DB::table('version_user')->where('version_id', '=', $value->version_id)->where('user_id', $userID)->exists()) {

                    $GamingsData[] = [
                        'user_id' => $userID,
                        'gameplay_id' => $gameplay->id,
                        'role' => $role,
                        'created_at' => now(),
                    ];
                    // }
                    // $i--;
                    // continue;
                }
            }
            // for ($i = 0; $i < $noOfUsers; $i++) {
            //     $role = ($i == 0) ? 'host' : 'guest';
            //     $randomUserId = rand(1, 50);

            //     $userID = User::where('id', $randomUserId)->value('id');

            //     // $usercounts =  User::where('id', $userID)->withCount('gameplays')->get();

            //     //check if user has the version of game
            //     // if (DB::table('version_user')->where('version_id', '=', $value->version_id)->where('user_id', $userID)->exists()) {

            //     $GamingsData[] = [
            //         'user_id' => $userID,
            //         'gameplay_id' => $value->id,
            //         'role' => $role,
            //         'created_at' => $value->created_at,
            //     ];
            //     // }
            //     // $i--;
            //     // continue;
            // }

            // $games--;
        // }


        $GamingsChunks = array_chunk($GamingsData, 100);
        foreach ($GamingsChunks as $key =>  $GamingsChunk) {
            // print_r(($key / 100) * 100) . " %" . PHP_EOL;
            DB::table('gameplay_players')->insert($GamingsChunk);
            echo "\n";
            echo DB::table('gameplay_players')->count();
        }
    }
}
