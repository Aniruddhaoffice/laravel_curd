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
    .text-right {
        text-align: right
    }
</style>

<body>
    <ul class="nav bg-dark">
        <li class="nav-item">
            <a class="nav-link text-light" href="/">Products</a>
        </li>

    </ul>
    <div class="text-right">
        <a href="products/create" class="btn btn-dark mt-2 ">New product</a>
    </div>




    <div class="container">
        <h1>products</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>sl.No</th>
                    <th>name</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td><img src="products/{{$product->image}}" alt="" class="rounded-circle" width="40" height="40">
                    </td>
                    <td><a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">edit</a></td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</body>

</html>