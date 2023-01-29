@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Создать</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="Имя">
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('surname') }}" name="surname" class="form-control" placeholder="Фамилия">
                        <p class="text-danger">{{ $errors->first('surname') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="password" value="{{ old('password') }}" name="password" class="form-control" placeholder="Пароль">
                        <p class="text-danger">{{ $errors->first('password') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="form-control" placeholder="Пароль">
                        <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('email') }}" name="email" class="form-control" placeholder="e-mail">
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" value="{{ old('is_premium') }}" name="is_premium" id="is_premium" />
                        <label for="is_premium">Премиум</label>

                        <p class="text-danger">{{ $errors->first('is_premium') }}</p>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
