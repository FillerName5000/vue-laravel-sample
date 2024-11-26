<?php

namespace App\Modules\Movies\Services;

use App\Modules\Core\Services\Service;
use App\Models\Movie;

class MovieService extends Service{

    protected $_rules = [
        'title' => 'required|string|max:255',
        'year' => 'required|integer|min:1900',
        'rating' => 'required|numeric|min:0|max:5',
        'genre' => 'required|string|max:255',
        'director_id' => 'required|integer|exists:people,id',
        'poster' => 'required|max:255',
    ];

    public function __construct(Movie $movie){
        parent::__construct($movie);
    }

    public function getModelWithDescription($languageCode) {
        return $this->_model->leftJoin('movies_languages', function ($join) use ($languageCode) {
            $join->on('movies.id', '=', 'movies_languages.movie_id')
                 ->where('movies_languages.code', '=', $languageCode);
        })
        ->select('movies.*', 'movies_languages.short_description');
    }

    
    public function all($pages) {
        return $this->_model->with('movieLanguageAll')->paginate($pages);
    }


    public function find($id, $languageCode = 'en') {
        return [
            $this->getModelWithDescription($languageCode)->get()->find($id)
        ];
    }

    public function search($query, $pages, $languageCode) {
        return $this->getModelWithDescription($languageCode)->where('title', 'like', "%$query%")->paginate($pages);
    }

    public function popular($pages, $languageCode) {
        return $this->getModelWithDescription($languageCode)->orderBy('rating', 'desc')->paginate($pages);
    }

    public function create($data) {
        $this->validate($data);

        if ($this->hasErrors()) {
            return;
        }

        return $this->_model->create($data);
    }
}
