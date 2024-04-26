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


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card custom-card m-3 p-3 ">
                    <form method="POST" action="/products/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group custom-form">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="name" />
                        </div>
                        <div class="form-group custom-form">
                            <label for="name">Description:</label>
                            <textarea name="description" id="" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group custom-form">
                            <label for="name">Image:</label>
                            <input type="file" name="image" class="form-control" id="" />
                        </div>
                        <button type="submit" class="btn btn-dark cus-btn mt-3">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>