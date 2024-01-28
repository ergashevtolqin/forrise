<?php

namespace App\Services;

use App\Models\Modul;

class GameService extends BaseService
{
    protected $model;

    public function __construct(Modul $moudl)
    {
        $this->model = $moudl;
    }
    public function getQuestion(int $id)
    {
        $question = $this->model->where('category_id',$id)->inRandomOrder()->first();

        
        // return $question;

        return view('pages.game.index',[
            'question'=> $question
        ]);
    }
}

