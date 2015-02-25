<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class Comment extends Eloquent {

    protected $fillable = array(
        'author',
        'text'
    );
}

class CommentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('comments')->delete();

        Comment::create(array(
            'author' => 'Chris Sevilleja',
            'text' => 'Look I am a test comment.'
        ));

        Comment::create(array(
            'author' => 'Nick Cerminara',
            'text' => 'This is going to be super crazy.'
        ));

        Comment::create(array(
            'author' => 'Holly Lloyd',
            'text' => 'I am a master of Laravel and Angular.'
        ));
    }

}