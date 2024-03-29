<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $sql = file_get_contents(__DIR__.'/article.sql');
        DB::unprepared($sql);

        $sql = file_get_contents(__DIR__.'/image.sql');
        DB::unprepared($sql);

        $sql = file_get_contents(__DIR__.'/article_image.sql');
        DB::unprepared($sql);

        // même chose mais avec une boucle foreach
        // $files = [
        //     'article.sql',
        //     'image.sql',
        //     'article_image.sql',
        // ];

        // foreach ($files as $foo) {
        //     $sql = file_get_contents(__DIR__.'/'.$foo);
        //     DB::unprepared($sql);
        // }
    }
}
