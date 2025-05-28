<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $movies = [
            [
                'title' => 'Big Buck Bunny',
                'description' => 'Three rodents have fun harassing the forest creatures. However, when they mess with a rabbit, he decides to teach them a lesson.',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4',
                'thumbnail_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/70/Big.Buck.Bunny.-.Opening.Screen.png',
                'genre' => 'Comedy',
                'duration' => '10 min',
            ],
            [
                'title' => 'Sintel',
                'description' => 'A lonely young girl, Sintel, helps and befriends a dragon, whom she calls Scales. But when he is kidnapped by an adult dragon, Sintel decides to embark on a dangerous quest to find her lost friend, Scales.',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/Sintel.mp4',
                'thumbnail_url' => 'https://durian.blender.org/wp-content/uploads/2010/06/04.1b_comp_000119.jpg',
                'genre' => 'Adventure',
                'duration' => '15 min',
            ],
            [
                'title' => 'Tears of Steel',
                'description' => 'In an apocalyptic future, a group of soldiers and scientists take refuge in Amsterdam to try to stop an army of robots that threatens the planet.',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/TearsOfSteel.mp4',
                'thumbnail_url' => 'https://mango.blender.org/wp-content/uploads/2013/05/01_thom_celia_bridge.jpg',
                'genre' => 'Action',
                'duration' => '12 min',
            ],
            [
                'title' => "The elephant's dream",
                'description' => 'Friends Proog and Emo travel within the folds of a seemingly infinite Machine, exploring the dark and twisted complex of wires, gears and cogwheels, until a moment of conflict overturns all their assumptions.',
                'video_url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4',
                'thumbnail_url' => 'https://download.blender.org/ED/cover.jpg',
                'genre' => 'Science fiction',
                'duration' => '15 min',
            ],
        ];

        collect($movies)->each(function ($movie) {
            Movie::create($movie);
        });
    }
}
