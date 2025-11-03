<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public static function getMovies()
    {
  return [
            1 => [

                'title' => 'Inception',
                'director' => 'Christopher Nolan',
                'category' => 'Sci-Fi',
                'year' => 2010,
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg'
            ],
            2 => [

                'title' => 'The Matrix',
                'director' => 'The Wachowskis',
                'category'=> 'Sci-Fi',
                'year' => 1999,
                'description'=> 'the matrix has you',
                'poster'=> 'https://m.media-amazon.com/images/M/MV5BNjAxYjkxNjktYTU0YS00NjFhLWIyMDEtMzEzMTJjMzRkMzQ1XkEyXkFqcGc@._V1_.jpg'
            ],
            3 => [

                'title' => 'Interstellar',
                'director' => 'Christopher Nolan',
                'category'=> 'Sci-Fi',
                'year' => 2014,
                'description'=> 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'poster'=> 'https://m.media-amazon.com/images/M/MV5BYzdjMDAxZGItMjI2My00ODA1LTlkNzItOWFjMDU5ZDJlYWY3XkEyXkFqcGc@._V1_.jpg'
            ],
            4 => [

                'title' => 'The Godfather',
                'director' => 'Francis Ford Coppola',
                'category'=> 'Crime',
                'year' => 1972,
                'description'=> 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'poster'=> 'https://m.media-amazon.com/images/M/MV5BNGEwYjgwOGQtYjg5ZS00Njc1LTk2ZGEtM2QwZWQ2NjdhZTE5XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'
            ],
            5 => [

                'title' => 'Pulp Fiction',
                'director' => 'Quentin Tarantino',
                'category'=> 'Crime',
                'year' => 1994,
                'description'=> 'The lives of two mob hitmen, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'poster'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8_RuI2FvnQ1njAEPPu7ILl8HMmCZW_KNqMQ&s'
            ]
        ];
    }
}
