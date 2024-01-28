<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Services\GameService;

class MainController extends Controller
{
    protected $categoryService;
    protected $gameService;
    public function __construct(CategoryService $categoryService, GameService $gameService)
    {
        $this->categoryService = $categoryService;
        $this->gameService = $gameService;
    }
    public function index()
    {
        $categories = $this->categoryService->getList(relation: ['modul']);

        return view('index',[
            'categories'=> $categories
        ]);
    }

    public function game($id)
    {
        $q = $this->gameService->getQuestion($id);
        return $q;
    }
}
