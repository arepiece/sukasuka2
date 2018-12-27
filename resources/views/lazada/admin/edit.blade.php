@extends('lazada.admin.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::previous() }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
 <form enctype="multipart/form-data" action="{{ action('lazadaAdminController@add_process') }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
<!--                    <textarea class="form-control summernote" style="height:150px" name="detail" placeholder="Detail">{!! $product->description !!}</textarea>-->
                    <textarea name="description2" class="summernote"></textarea>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
           @foreach($photos  as $key => $photo)
     <div id="img_{{$photo->id}}" class="col-xs-12 col-sm-12 col-md-12">           
         <div class="form-group">
             <img src="{{ asset($photo->img_name) }}" style="width:auto; height:250px" >
             <button type="button" class="btn btn-danger" onclick="delete_img({{$photo->id}})">Delete</button>               
         </div>        
     </div>
    @endforeach
   
    </form>



<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script type="text/javascript">

    $(document).ready(function(){

//            var markupStr = 'hello world';
//           $('.summernote').summernote('code', markupStr);

// var content = {!! $product->description !!};
  var content = {!! json_encode($product->description) !!};
 $('.summernote').summernote('code', content);


});

function delete_img(id){
//    alert(id);
     var test = false;

        $.ajax({
            type: "GET",
            url: '/api/delete_img/'+id,

            success: function(data, status, xhr) {
                var test = true;
//                alert('ssss');
                $("#img_"+id).hide();

            }
        })
        .done(function( msg ) {

        }); 
}


</script>
@endsection