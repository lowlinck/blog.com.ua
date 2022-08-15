@extends('admin.layouts.app')
@section('content')
    @include('admin.include.inc')

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">


                    <form action="{{route('admin.user.update', $user->id)}}" method="POST" class="w-25">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                                <label for="exampleInputEmail1">Введите название категории</label>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label >Введите почту</label>
                            <input type="text" class="form-control" name="email" value="{{$user->email}}" placeholder="Введите название почты">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Выбрать уровень доступа пользователя</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"{{ $id == $user->role ? 'selected' :'' }} >{{$role}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                           <input type="hidden"  name="user_id" value="{{ $user->id }}">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                    </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.layouts.footer')



    <!-- /.control-sidebar -->
</div>
@endsection
