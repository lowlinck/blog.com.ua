<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Personal;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\If_;

class IndexController extends Controller
{
    public function __invoke()
    {
        $persons = Personal::all();

        return view('personal.main.index', compact('persons'));

    }
}
