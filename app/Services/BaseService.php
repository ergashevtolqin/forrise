<?php

namespace App\Services;

class BaseService
{
    protected $model;
    public function save(array $data)
    {
        $model = $this->model->create($data);
    }

    public function getList($orderby = 'id', $order = 'ASC',$relation = [])
    {
        $model = $this->model::orderBy($orderby, $order);

        foreach ($relation as $key => $value) {
            $model = $model->withCount($value);
        }
        foreach ($relation as $key => $value) {
            $model = $model->with($value);
        }

        $model = $model->get();
        return $model;
    }

    public function first()
    {
        $model = $this->model::first();
        return $model;
    }
}

