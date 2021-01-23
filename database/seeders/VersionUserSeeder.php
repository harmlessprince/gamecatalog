<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Version;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VersionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $players = User::all();
        $versionCount = Version::count();
        // $versions = Version::all();
        echo "Assiging version of games to users";
        sleep(1);
        for ($i = 1; $i <= $versionCount; $i++) {
            foreach ($players as  $player) {
            //     $randomVersionID = rand(1, 45);
                // if (DB::table('version_user')->where('version_id', '=', $i)->where('user_id', $player->id)->exists()) {
                    // continue;
                // } else {
                    // $versionID = Version::where('id', $i)->value('id');
                    // echo "picked version id of: " . $versionID . "\n";
                    $userVersions[] = [
                        'version_id' => $i,
                        'user_id' => $player->id,
                        'created_at'   => now(),
                    ];
                // }
            }
        }
        $userVersionsChunks = array_chunk($userVersions, 500);
        foreach ($userVersionsChunks as $key =>  $userVersionsChunk) {
            // print_r(($key / 100) * 100) . " %" . PHP_EOL;
            DB::table('version_user')->insert($userVersionsChunk);
            // sleep(1);
            echo "\n";
        }
        echo DB::table('version_user')->count();
    }
}
