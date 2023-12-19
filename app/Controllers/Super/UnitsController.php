<?php

namespace App\Controllers\Super;

use App\Controllers\BaseController;
use App\Models\UnitModel;

class UnitsController extends BaseController
{
    /**
     * 
     * 
     * @return ReturnInterface
     */

    public function index()
    {
        $data = [
            'title' => 'Unidades',
            'units' => model(UnitModel::class)->findAll(),
        ];

        return view('Back/Units/index', $data);
    }
}
