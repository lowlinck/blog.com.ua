<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tag;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
            $data = $request->validated();
             $this->service->store($data);

        return redirect()->route('admin.post.index');
    }
}
