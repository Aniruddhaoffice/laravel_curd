@extends('layout.app')
@section('main')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card custom-card m-3 p-3 ">
                <form method="POST" action="/products/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group custom-form">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" />
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group custom-form">
                        <label for="name">Description:</label>
                        <textarea name="description" id="" rows="4" class="form-control"
                            value="{{old('description')}}"></textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{$errors->first('description')}}</span>
                        @endif
                    </div>
                    <div class="form-group custom-form">
                        <label for="name">Image:</label>
                        <input type="file" name="image" class="form-control" id="" />

                        @if($errors->has('image'))
                        <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-dark cus-btn mt-3">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection