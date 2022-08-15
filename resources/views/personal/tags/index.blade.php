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
                        <h1 class="m-0">Tag</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tag</li>
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
                        <a href="{{route('admin.tag.create')}}" class="btn btn-block btn-primary btn-lg">Добавить</a>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Responsive Hover Table</h3>


                            </div>
                            <!-- /.card-header -->
                            <div class=" card-body table-responsive ">
                                <table class="  table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Show</th>
                                        <th>Action</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tags as $tag)
                                    <tr>
                                        <td>{{$tag->id}}</td>
                                        <td>{{$tag->title}}</td>
                                        <td>{{$tag->created_at}}</td>
                                        <td><a href="{{route('admin.tag.show',$tag->id)}}"><i class="fa-solid fa-eye"></i></a></td>
                                        <td><a href="{{route('admin.tag.edit',$tag->id)}}"><i class="fas fa-pencil-alt"></i></a></td>

                                        <td>
                                            <form  method="POST" action="{{route('admin.tag.delete',$tag->id)}}">
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
