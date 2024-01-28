<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountModul;
class CountModulController extends Controller
{
    protected $model;

    public function __construct(CountModul $model)
    {
        $this->model = $model;
    }
    public function no(int $id)
    {
        $no = $this->model::where('modul_id', $id)->first();
        if ($no) {
            $no->no = $no->no + 1;
            $no->save();
        } else {
            $no = new $this->model;
            $no->modul_id = $id;
            $no->no = $no->no + 1;
            $no->save();
        }

        return redirect()->back();
    }

    public function yes(int $id)
    {
        $yes = $this->model::where('modul_id', $id)->first();
        if ($yes) {
            $yes->yes = $yes->yes + 1;
            $yes->save();
        } else {
            $yes = new $this->model;
            $yes->modul_id = $id;
            $yes->yes = $yes->yes + 1;
            $yes->save();
        }
        

        return redirect()->back();
    }
}
