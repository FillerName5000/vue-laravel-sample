<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\Movies\Services\MovieService;

class MovieAdminApiController extends Controller
{
    private const DEFAULT_PAGES_ADMIN = 5;

    public function __construct(MovieService $service)
    {
        $this->_service = $service;
    }

    public function all(Request $request)
    {
        $pages = $request->query('pages', $this::DEFAULT_PAGES_ADMIN);
        return $this->_service->all($pages);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $movie = $this->_service->create($data);
        if ($this->_service->hasErrors()) {
            return [
                "errors" => $this->_service->getErrors()
            ];
        }
        return [
            "data" => $movie
        ];
    }
}
