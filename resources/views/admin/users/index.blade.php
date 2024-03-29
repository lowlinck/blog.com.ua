@extends('admin.layouts.app')
@section('content')
    @include('admin.include.inc')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row ">
                    <div class="col-1">
                        <a href="{{route('admin.user.create')}}" class="btn btn-block btn-primary btn-lg">Добавить</a>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Show</th>
                                        <th>Action</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><a href="{{route('admin.user.show',$user->id)}}"><i class="fa-solid fa-eye"></i></a></td>
                                        <td><a href="{{route('admin.user.edit',$user->id)}}"><i class="fas fa-pencil-alt"></i></a></td>

                                        <td>
                                            <form  method="POST" action="{{route('admin.user.delete',$user->id)}}">
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
