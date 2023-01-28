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
                <form action="{{ route('currency.update', $currency->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="iso" value="{{ $currency->iso }}" class="form-control" placeholder="iso">
                        <p class="text-danger">{{ $errors->first('iso') }}</p>

                    </div>
                    <div class="form-group">
                        <input type="text" name="title" value="{{ $currency->title }}" class="form-control" placeholder="Наименование">
                        <p class="text-danger">{{ $errors->first('title') }}</p>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
