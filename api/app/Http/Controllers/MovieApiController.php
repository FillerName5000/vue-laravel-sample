<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\Movies\Services\MovieService;

class MovieApiController extends Controller
{
    private $_service;

    public function __construct(MovieService $service)
    {
        $this->_service = $service;
    }

    public function popular(Request $request)
    {
        $pages = $request->query('pages', parent::DEFAULT_PAGES);
        return $this->_service->popular($pages, $this->_service->getLanguage());
    }

    public function find(Request $request, $id)
    {
        return [
            "data" => $this->_service->find($id, $this->_service->getLanguage())
        ];
    }

    public function search(Request $request)
    {
        $query = $request->query('searchTerm', '');
        $pages = $request->query('pages', parent::DEFAULT_PAGES);
        return $this->_service->search($query, $pages, $this->_service->getLanguage());
    }
}
