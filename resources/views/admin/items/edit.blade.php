@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=>	['items.update', $item->id],
            'files'	=>	true,
            'method'	=>	'put'
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Обновить товар</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputTitle">Название</label>
                            <input type="text" class="form-control" id="exampleInputTitle" placeholder="" value="{{$item->title}}" name="title">
                        </div>

                        <div class="form-group">
                            <img src="{{$item->getImage()}}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" id="exampleInputFile" name="image">

                            <p class="help-block">Загружайте только картинки</p>
                        </div>

                        <div class="form-group">
                            <label>Категория</label>
                            {{Form::select('category_id',
                                $categories,
                                $item->getCategoryID(),
                                ['class' => 'form-control select2'])
                            }}
                        </div>

                        <div class="form-group">
                            <label>Выберите бренд</label>
                            {{Form::select('brand_id',
                                $brands,
                                $item->getBrandID(),
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Выберите бренд'])
                            }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPrice">Цена (данное поле заполняйте только цифрами)</label>
                            <input type="text" class="form-control" id="exampleInputPrice" placeholder="" value="{{$item->price}}" name="price">
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
                            <label for="exampleInputavAilability">Вид товара</label>
                            <select name="availability" id="exampleInputAvailability">
                                <option value="Обычный">Обычный</option>
                                <option value="Популярный">Популярный</option>
                                <option value="Новый">Новый</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputDescription">Описание</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" >{{$item->description}}</textarea>
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