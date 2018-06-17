@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
    {{Form::open(['route'	=>	'users.store', 'files'	=>	true])}}
    <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Добавляем пользователя</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputName">Имя</label>
              <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="" value="{{old('name')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">E-mail</label>
              <input type="text" name="email" class="form-control" id="exampleInputEmail" placeholder="" value="{{old('email')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword">Пароль</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Аватар</label>
              <input type="file" name="avatar" id="exampleInputFile">

              <p class="help-block">Загружаем только картинки</p>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{route('users.index')}}" class="btn btn-default">Назад</a>
          <button class="btn btn-success pull-right">Добавить</button>
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