@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Управление товарами</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('goods.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Картинка</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($goods as $good)
                            <tr>
                                <td>{{$good->id}}</td>
                                <td>{{$good->title}}</td>
                                <td>{{$good->getCategoryTitle()}}</td>
                                <td>
                                    <img src="{{$good->getImage()}}" alt="" width="100">
                                </td>
                                <td>
                                    <a href="{{route('goods.edit', $good->id)}}" class="fa fa-pencil"></a>

                                    {{Form::open(['route'=>['goods.destroy', $good->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Вы уверены, что хотите удалить?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>

                                    {{Form::close()}}
                                </td>
                            </tr>
                        @endforeach
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection