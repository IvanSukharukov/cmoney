@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать</h1>
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
                <form action="{{ route('user.update', $user->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="name" value="{{ $user->login }}" class="form-control" placeholder="Имя">
                        <p class="text-danger">{{ $errors->first('login') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Имя">
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" value="{{ $user->surname }}" class="form-control" placeholder="Фамилия">
                        <p class="text-danger">{{ $errors->first('surname') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" value="{{ $user->email }}"  class="form-control" placeholder="e-mail">
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" {{ $user->is_premium ? 'checked' : '' }} name="is_premium" id="is_premium" value="1"/>
                        <label for="is_premium">Премиум</label>

                        <p class="text-danger">{{ $errors->first('is_premium') }}</p>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Сохранить">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
