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
        // $versions = Version::all();
        echo "Assiging version of games to users";
        sleep(1);
        for ($i = 10; $i < 45; $i++) {
            foreach ($players as  $player) {
                $randomVersionID = rand(1, 45);
                if (DB::table('version_user')->where('version_id', '=', $randomVersionID)->where('user_id', $player->id)->exists()) {
                    continue;
                } else {
                    $versionID = Version::where('id', $randomVersionID)->value('id');
                    echo "picked version id of: " . $versionID . "\n";
                    
                    $userVersions[] = [
                        'version_id' => $versionID,
                        'user_id' => $player->id,
                    ];
                }
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
