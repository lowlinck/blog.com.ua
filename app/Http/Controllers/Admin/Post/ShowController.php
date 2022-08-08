<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {


        return view('admin.posts.show', compact('post'));
    }
}
