<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        try {
            $data = $request->validated();

            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
            $data['preview_image'] = trim(Storage::put('public/image', $data['preview_image']),'public ');
            $data['main_image'] = trim(Storage::put('public/image', $data['main_image']),'public ');
            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagIds);
        }catch (\Exception $exception){
            abort(404);
        }
        return redirect()->route('admin.post.index');
    }
}
