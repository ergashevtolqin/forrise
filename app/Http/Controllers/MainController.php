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
        $category = $this->categoryService->findById($id);

        $question = $this->gameService->getQuestion($id);

        // return $category;

        return view('pages.game.index',[
            'question'=> $question,
            'category'=> $category,
        ]);
    }
}
