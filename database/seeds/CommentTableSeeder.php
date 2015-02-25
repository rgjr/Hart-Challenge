<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class Comment extends Eloquent {

    protected $fillComments = array(
        'author',
        'text'
    );
}

class CommentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('comments')->delete();

        $fakeComments = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++)
        {
            Comment::create(array(
                'author' => $fakeComments->name,
                'text' => $fakeComments->text()
            ));
        }
    }
}