@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить подкатегорию
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                {!! Form::open(['route' => 'categories.store']) !!}
                <div class="box-header with-border">
                    <h3 class="box-title">Добавляем подкатегорию</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputTitle">Название</label>
                            <input type="text" class="form-control" id="exampleInputTtile" placeholder="" name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPid">Основная категория</label>
                            <select name="pid" id="exampleInputPid">
                                @foreach($parentCategories as $parentCategory)
                                    <option value="{{$parentCategory->id}}">{{$parentCategory->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-success pull-right">Добавить</button>
                </div>
                <!-- /.box-footer-->
                {!! Form::close() !!}
                <div class="box-footer">
                    <a href="{{route('categories.index')}}">
                        <button class="btn btn-default">Назад</button>
                    </a>
                </div>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection