
@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Управление отзывами</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Автор</th>
                            <th>Заголовок</th>
                            <th>Текст</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reviews as $review)
                            <tr>
                                <td>{{$review->id}}</td>
                                <td>{{$review->user->name}}</td>
                                <td>{{$review->title}}</td>
                                <td>{{$review->message}}</td>
                                <td>
                                    @if($review->status == 1)
                                        <a href="/admin/review/toggle/{{$review->id}}" class="fa fa-lock"></a>
                                    @else
                                        <a href="/admin/review/toggle/{{$review->id}}" class="fa fa-thumbs-o-up"></a>
                                    @endif
                                    {{Form::open(['route'=>['review.destroy', $review->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Вы уверены, что хотите удалить этот отзыв?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>

                                {{Form::close()}}
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