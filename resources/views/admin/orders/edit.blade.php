@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=>	['admin.orders.update', $order->id],
            'method'	=>	'put'
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Изменить заказ</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputTitle">Номер заказа: </label>  <span class="badge">{{$order->id}}</span>
                        </div>

                        <div class="form-group">
                            <label>Контактные данные заказчика:</label>
                            <p>Имя: {{$user->name}}</p>
                            <p>Телефон: {{$order->phone}}</p>
                            <p>Электронная почта: {{$user->email}}</p>
                        </div>

                        <div class="form-group">
                            <label>Заказанный товар:</label>
                            <p>Название: <strong>{{$item->title}}</strong></p>
                            <p>Категория: <strong>{{$item->getCategoryTitle()}}</strong></p>
                            <p>Картинка :
                                <img src="{{$item->getImage()}}" alt="" class="img-responsive" width="100"></p>
                            <p>Стоимость: <span class="badge">{{$order->price}} р.</span></p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputStatus">Статус заказа: </label>
                            <select name="status" id="exampleInputStatus">
                                <option value="Новый">Новый</option>
                                <option value="В обработке">В обработке</option>
                                <option value="Выполнен">Выполнен</option>
                            </select>
                        </div>


                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-warning pull-right">Изменить</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection