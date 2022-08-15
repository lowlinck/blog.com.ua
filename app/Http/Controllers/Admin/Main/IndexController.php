<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
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
        $data['category'] =  Category::all()->count();
        $data['Tag'] =  Tag::all()->count();
        $data['Post'] =  Post::all()->count();
        $data['Users'] =  User::all()->count();
        foreach ($data as $key=>$values) {
         DB::table('menus')->where('name', $key)->update(['count'=>$values]);
        }
        $menus = Menu::all();
        return view('admin.index', compact('menus', 'data'));

    }
}
