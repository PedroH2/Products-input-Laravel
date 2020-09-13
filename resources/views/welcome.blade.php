@extends('templates.template')
@section('content')

        <form class="form-group" name="formCad" id="formCad" method="post" action="{{'/'}}">
                @csrf
                <input class="form-control form-control-lg mb-lg-3" type="text" id="name" name="name" placeholder="Product Name" >
                <input class="form-control form-control-lg mb-lg-3" type="text" id="corridor" name="corridor" placeholder="Product Corridor">
                <input class="form-control form-control-lg mb-lg-3" type="text" id="shelf" name="shelf" placeholder="Product Shelf">
                <input class="form-control form-control-lg mb-lg-3" type="text" id="location" name="location" placeholder="Product Location">
                <input class="form-control form-control-lg mb-lg-3" type="text" id="price" name="price" placeholder="Product price">
                <input class="btn btn-outline-success btn-lg btn-block" type="submit" value="Insert" href="{{url('product/create')}}" >
        </form>
<br>


<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Corridor</th>
        <th scope="col">Shelf</th>
        <th scope="col">location</th>
        <th scope="col">Price</th>
    </tr>
    </thead>
    <tbody>
    @foreach($product as $products)
        <tr>
            <th scope="row">{{$products->id}}</th>
            <td>{{$products->name}}</td>
            <td>{{$products->corridor}}</td>
            <td>{{$products->shelf}}</td>
            <td>{{$products->location}}</td>
            <td>R${{$products->price}}</td>
        </tr>
    @endforeach

    </tbody>
</table>
@endsection
