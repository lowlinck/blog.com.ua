@extends('admin.layouts.app')
@section('content')
    @include('admin.include.header')
    @include('admin.include.asside')


    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Редактирование поста</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Редактирование поста</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row ">
                        <form action="{{route('admin.post.update', $post->id)}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-50">
                                <label >Введите название поста</label>
                                <input type="text" class="form-control" name="title" value="{{$post->title}}">
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label >Введите контент</label>
                                <textarea type="text" class="form-control" id="summernote"
                                          name="content">{{$post->content}}</textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                                <div class=" w-25 mb-2">
                                    <img src="{{asset( 'storage/'.$post->preview_image) }}" alt="preview_image" class="w-25" >
                                </div>
                            <div class="form-group ">

                                <div class="input-group ">
                                    <div class="custom-file ">
                                        <label class="custom-file-label">Добавить превью изображение</label>
                                        <input type="file" class="custom-file-input w-25" name="preview_image">
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="w-50 mb-2">
                                <img src="{{asset('storage/'.$post->main_image) }}" alt="main_image" class="w-25")>
                            </div>
                            <div class="form-group">
                                <div class="input-group">

                                    <div class="custom-file">

                                        <label class="custom-file-label">Добавить главное изображение</label>

                                        <input type="file" class="custom-file-input" name="main_image">
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Select</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option
                                            value="{{$category->id}}"{{ $category->id == $post->category_id ? 'selected' :'' }} >{{$category->title}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Теги</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple"
                                        data-placeholder="Выберите теги" style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option
                                            {{ is_array( $post->tags->pluck('id')->toArray() ) && in_array($tag->id, $post->tags->pluck('id')->toArray() ) ? ' selected' : '' }} value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('tag_ids[]')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input type="submit" class="btn btn-primary" value="Update">

                        </form>
                    </div>
                </div>
            </section>

        </div>
    @include('admin.layouts.footer')



    <!-- /.control-sidebar -->
    </div>
@endsection
