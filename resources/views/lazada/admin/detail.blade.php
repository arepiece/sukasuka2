@extends('lazada.admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::previous() }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {!! $product->description !!}
            </div>
        </div>
  
  
    </div>
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {!!$product->description2 !!}
            </div>
        </div>
  
  
    </div>

    @foreach($photos  as $key => $photo)
     <div id="img_{{$photo->id}}" class="col-xs-12 col-sm-12 col-md-12">           
         <div class="form-group">
             <img src="{{ asset($photo->img_name) }}" style="width:auto; height:250px" >       
         </div>        
     </div>
    @endforeach
    
    
    <div class="container">
<div class="jumbotron">
<h1>The Photo Lab!</h1>
<p>Create a simple responsive website using Bootstrap</p>
</div>
 

<div class="row">
@foreach($photos  as $key => $photo)
{{$key}}
<div class="col-md-6 col-lg-4 col-sm-6">
<div class="thumbnail">
<img src="{{ asset($photo->img_name) }}">

</div>
</div>
@endforeach
</div>
</div>
</div>

</div>      
    
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">

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
@section('scripts')
<script
    alert('ss);
</script>
@stop   
