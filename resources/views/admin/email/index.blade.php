@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Управление сообщениями</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Статус</th>
                            <th>Email</th>
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($emails as $email)
                            <tr>

                                <td>{{$email->id}}</td>
                                @if(0 == $email->status)
                                    <td>Новое</td>
                                @else
                                    <td>Прочитанное</td>
                                @endif
                                    <td>{{$email->email}}</td>
                                <td>{{$email->name}}</td>
                                <td>{{$email->phone}}</td>
                                <td>
                                    <a href="{{route('admin.email.edit', $email->id)}}" class="fa fa-pencil"></a>

                                    {{Form::open(['route'=>['admin.email.destroy', $email->id], 'method'=>'delete'])}}
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