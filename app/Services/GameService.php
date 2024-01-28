<?php

namespace App\Services;

use App\Models\CountModul;
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
        

        for ($i=1; $i < 100; $i++) { 

            $count = CountModul::where('yes','>=',$i)->limit(10)->pluck('modul_id')->toArray();
            $question = $this->model->with('count')->where('category_id',$id)->whereNotIn('id',$count)->inRandomOrder()->first();

            if($question != null)
            {
                break;
            }

        }

        return $question;

    }
}

