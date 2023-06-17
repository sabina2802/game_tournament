@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href=""> Back</a>
            </div>
        </div>
    </div><br>


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

    <link rel="stylesheet"href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <style> 
        #rowAdder {
            margin-left: 17px;
        }
    </style>

    <form action="{{route('userStore')}}" method="POST" enctype="multipart/form-data">
    	@csrf

         <div class="row">
         <div class="col-md-12 text-center">
            <button id="rowAdder" type="button" class="btn btn-dark">
                <span class="bi bi-plus-square-dotted"></span> Add More User
            </button>
		</div>
		    <div class="col-md-6">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name[]" class="form-control" placeholder="Name">
		        </div>
		    </div>

            <div class="col-md-6">
		        <div class="form-group">
		            <strong>Email:</strong>
		            <input type="email" name="email[]" class="form-control" placeholder="Email">
		        </div>
		    </div>

            <div id="newinput" class="col-xs-6 col-sm-6 col-md-6">
               
            </div>

        
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Start Tournament</button>
		    </div>
            
		</div>
    </form>
@endsection
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){  
    $("#rowAdder").click(function () {
        newRowAdd =
                '<div class="col-md-6">' +
                '<div class="form-group">' +
                '<strong>Name:</strong>' +
                '<input type="text" name="name[]" class="form-control" placeholder="Name"> </div> </div>' +
                
                '<div class="col-md-6">' +
                '<div class="form-group">' +
                '<strong>Email:</strong>' +
                '<input type="email" name="email[]" class="form-control" placeholder="email"> </div> </div>';

                $('#newinput').append(newRowAdd);
    });
});
</script>    
