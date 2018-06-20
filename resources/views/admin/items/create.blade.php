@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=> 'items.store',
            'files'	=>	true
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавить товар</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputTitle">Название</label>
                            <input type="text" class="form-control" id="exampleInputTitle" placeholder="" name="title" value="{{old('title')}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" id="exampleInputFile" name="image">

                            <p class="help-block">Загружайте только картинки</p>
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            {{Form::select('category_id',
                                $categories,
                                null,
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Выберите категорию'])
                            }}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPrice">Цена (данное поле заполняйте только цифрами)</label>
                            <input type="text" class="form-control" id="exampleInputPrice" placeholder="" name="price" value="{{old('price')}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputStatus">Статус товара</label>
                            <select name="status" id="exampleInputStatus">
                                @foreach($status as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputavAilability">Наличие товара</label>
                            <select name="availability" id="exampleInputAvailability">
                                <option value="В наличии">В наличии</option>
                                <option value="Под заказ">Под заказ</option>
                                <option value="Недоступен">Недоступен</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Описание</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" >{{old('description')}}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
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