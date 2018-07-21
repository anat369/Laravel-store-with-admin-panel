@extends('admin.layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
	{{Form::open([
		'route'	=>	['admin.user.update', $user->id],
		'method'	=>	'put',
		'files'	=>	true
	])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Изменяем данные пользователя</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputName">Имя</label>
              <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="" value="{{$user->name}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="" value="{{$user->email}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword">Пароль</label>
              <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="">
            </div>
            <div class="form-group">
              <img src="{{$user->getImage()}}" alt="" width="200" class="img-responsive">
              <label for="exampleInputFile">Аватар</label>
              <input type="file" name="avatar" id="exampleInputFile">

              <p class="help-block">Загружаем только картинки</p>
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