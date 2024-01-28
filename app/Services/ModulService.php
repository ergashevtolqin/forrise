<?php

namespace App\Services;
use App\Models\Modul;
class ModulService extends BaseService
{
    public function __construct(Modul $modul){
        $this->model = $modul;
    }
}

