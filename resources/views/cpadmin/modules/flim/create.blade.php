@extends('cpadmin.master')
@section('title','Create flim')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Flim Information') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.flim.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-left">{{ __('Name') }}</label>
                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-left">{{ __('SubName') }}</label>
                            <div class="col-md-10">
                                <input id="subname" type="text" class="form-control" name="subname"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-left">{{ __('Description') }}</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="3" placeholder="Description ..." name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-left">{{ __('Image') }}</label>
                            <div class="col-md-10">
<<<<<<< HEAD
                                <input type="file" name="image" id="exampleInputFile" accept="image/x-png,image/gif,image/jpeg" required>
=======
                                <input type="file" name="image" id="exampleInputFile" accept="image/x-png,image/gif,image/jpeg">
>>>>>>> 96434f47a37b40b9759c32bacd079834da6c24bd
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-left">{{ __('Category') }}</label>
                            <div class="col-md-10">
                                <div class="row">
                                    @foreach ($listcategory as $item)
                                    <div class="col-md-3">
                                        <input class="ml-md-2" type="checkbox" id="autoSizingCheck" name="category[]" value="{{$item->name}}">
                                        <label class="form-check-label ml-md-2" for="autoSizingCheck">{{ str_replace('-',' ',$item->name)}}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-left">{{ __('Total Chap') }}</label>
                            <div class="col-md-10">
                                <input type="number" name="total_chap" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                <p class="text-muted">Only Number</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-left">{{ __('Year') }}</label>
                            <div class="col-md-10">
                                <input type="number" name="year" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value='2020' min="2015" max="2040">
                                <p class="text-muted">Only Number from 2015 to 2040</p>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Flim') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection