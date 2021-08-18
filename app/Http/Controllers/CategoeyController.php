<?php

namespace App\Http\Controllers;

use App\Model\CategoeyModel;
use Illuminate\Http\Request;

class CategoeyController extends Controller
{
    public function getAll() {
        $categories = CategoeyModel::all();
        return view('list', ['categories' => $categories]);
    }
}
