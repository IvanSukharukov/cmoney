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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{ route('currency.edit', $currency->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('currency.destroy', $currency->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">

                            </form>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">

                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $currency->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>ISO</td>
                                        <td>{{ $currency->iso }}</td>
                                    </tr>
                                    <tr>
                                        <td>Наименование</td>
                                        <td>{{ $currency->title }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
