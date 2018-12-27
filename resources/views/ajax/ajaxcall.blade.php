@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Test Ajax
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
    window.onload = function(e){ 
        var test = false;
   
        $.ajax({
            type: "GET",
            url: '/api/ajax1',

            success: function(data, status, xhr) {
                var test = true;
//                if(test == true){
//                    
//                }else{
//                    var test = false;
//                }
//                alert(test);
            }
        })
        .done(function( msg ) {
//            $("#tranparent-loader").hide();
    alert(test);
        }); 
}

function ajaxCallBack(retString){
//    alert('sss');
    test = retString;
    alert(test);
}

        
    </script>
@endsection
@section('scripts')


@endsection