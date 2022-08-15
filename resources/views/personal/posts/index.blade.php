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
                        <h1 class="m-0">Post</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                    <div class="col-1">
                        <a href="{{route('admin.post.create')}}" class="btn btn-block btn-primary btn-lg">Добавить</a>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Responsive Hover Table</h3>


                            </div>
                            <!-- /.card-header -->
                            <div class=" card-body table-responsive ">
                                <table class="  table table-hover text-nowrap">
                                    <thead class="w-25">
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th >Content</th>
                                        <th>Date</th>
                                        <th>Show</th>
                                        <th>Action</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}} </td>
                                        <td class="w-50">{{$post->content}}</td>
                                        <td>{{$post->created_at}}</td>
                                        <td><a href="{{route('admin.post.show',$post->id)}}"><i class="fa-solid fa-eye"></i></a></td>
                                        <td><a href="{{route('admin.post.edit',$post->id)}}"><i class="fas fa-pencil-alt"></i></a></td>

                                        <td>
                                            <form  method="POST" action="{{route('admin.post.delete',$post->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fas fa-solid fa-trash text-danger" role="button"></i>
                                                </button>

                                            </form>

                                        </td>


                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.layouts.footer')



    <!-- /.control-sidebar -->
</div>
@endsection
