@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Управление заказами</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Номер заказа</th>
                            <th>Статус</th>
                            <th>Пользователь</th>
                            <th>Почта</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->status}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->user->email}}</td>

                                <td>
                                    <a href="{{route('admin.order.edit', $order->id)}}" class="fa fa-pencil"></a>

                                    {{Form::open(['route'=>['admin.order.destroy', $order->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Вы уверены, что хотите удалить?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>

                                    {{Form::close()}}
                                </td>
                            </tr>
                        @endforeach
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