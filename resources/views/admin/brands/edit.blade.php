@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=>	['admin.brand.update', $brand->id],
            'files'	=>	true,
            'method'	=>	'put'
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Обновить данные о бренде</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputTitle">Название</label>
                            <input type="text" class="form-control" id="exampleInputTitle" placeholder="" value="{{$brand->title}}" name="title">
                        </div>

                        <div class="form-group">
                            <img src="{{$brand->getImage()}}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Логотип бренда</label>
                            <input type="file" id="exampleInputFile" name="image">

                            <p class="help-block">Загружайте только картинки</p>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputDescription">Описание</label>
                            <textarea id="exampleInputDescription" name="description" id="" cols="30" rows="10" class="form-control" >{{$brand->description}}</textarea>
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