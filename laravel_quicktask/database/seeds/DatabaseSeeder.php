<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('cards')->insert([
            [
                'title' => 'Learn Basic Japanese',
                'description' => 'An imaginative way to learn the Japanese language online for free. Learn to read the Japanese Kana, basic grammar, verbs and phrases though this basic course. This course contains 300 meticulously selected Japanese words and phrases, broken up into lessons by subject, to help you begin learning how to read and speak Japanese',
                'image' => 'https://static.memrise.com/img/400sqf/from/uploads/course_photos/32000130403193614.jpg',
                'user_id' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'title' => 'JLPT N5 Vocab',
                'description' => 'This is where you come to start getting to grips with Japanese vocabulary. This is a revised list for the N5 Japanese Language Proficiency Test that is a conglomerate of a lot of different lists available on the web as well as from personal experience and best guesses.',
                'image' => 'https://static.memrise.com/img/400sqf/from/uploads/course_photos/kana-JLPT5.png',
                'user_id' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
