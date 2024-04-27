<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel_curd</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    /* .custom-form {
        width: 40%;
        margin: auto;
    }

    .cus-btn {
        display: flex;
        justify-content: center;
    } */
</style>

<body>
    <ul class="nav bg-dark">
        <li class="nav-item">
            <a class="nav-link text-light" href="/">New product</a>
        </li>

    </ul>

    @if($message = Session::get( 'success' ))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card custom-card m-3 p-3 ">
                    <h3>Product edit #{{$product->name}}</h3>
                    <form method="POST" action="/products/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group custom-form">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{old('name', $product ->name)}}" />
                            @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group custom-form">
                            <label for="name">Description:</label>
                            <textarea name="description" id="" rows="4" class="form-control"
                                value="{{old('description', $product ->description)}}"></textarea>
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
</body>

</html>