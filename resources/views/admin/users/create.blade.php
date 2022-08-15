@extends('admin.layouts.app')
@section('content')
@include('admin.include.inc')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form action="{{route('admin.user.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="form-group">
                                <label >Введите имя пользователя</label>
                                <input type="text" class="form-control" name="name" placeholder="Введите имя пользоватея" value="{{old('name')}}">
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label >Введите почту</label>
                            <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Введите название почты">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Выбрать уровень доступа пользователя</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"{{ $id == old('role') ? 'selected' :'' }} >{{$role}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
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
