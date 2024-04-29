@extends('layout.app')
@section('main')
<div class="d-flex justify-content-end ">
    <a href="products/create" class="btn btn-dark mt-2">Add Product</a>
</div>




<div class="container">
    <h1>products</h1>
    <table class="table table-hover ">
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
                <td><a href="products/{{$product->id}}/show" class="text-dark">{{$product->name}}</a></td>
                <td>{{$product->description}}</td>
                <td><img src="products/{{$product->image}}" alt="" class="rounded-circle" width="40" height="40">
                </td>
                <td><a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">edit</a>
                    <a href="products/{{$product->id}}/delete" class="btn btn-danger btn-sm">delete</a>

                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    {{$products->links()}}
</div>
@endsection