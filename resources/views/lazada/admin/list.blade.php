@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lamana - Your Product List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('lazada_admin_add') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ url('/lazada_admin_detail',$product->id) }}">Show</a>

 
    
                    <a class="btn btn-primary" href="{{ url('/lazada_admin_edit',$product->id) }}">Edit</a>
   
                    @csrf
                    <!--@method('DELETE')-->
                    <a class="btn btn-primary" href="{{ url('/lazada_admin_delete',$product->id) }}">Delete</a>
                    <!--<button type="submit" class="btn btn-danger">Delete</button>-->
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  

      
@endsection