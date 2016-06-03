<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
		<div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		      	<div class="modal-content">
		        	<div class="modal-header">
		          		<h4 class="text-center">Kirim Lamaran</h4>
		        	</div>
			        <div class="modal-body">
			          	<form method="POST" class="form-horizontal" role="form" action="" enctype="multipart/form-data">
    						<input type="hidden" name="_token" value="{{ csrf_token() }}">
    						<div class="form-group">
						      	<label class="control-label col-sm-2">Nama</label>
							    <div class="col-sm-10">
							        <input name="nama" type="text" class="form-control" id="nama" placeholder="Minimal 3 karakter">
							    </div>
    						</div>
						    <div class="form-group">
							    <label class="control-label col-sm-2">E-mail</label>
							    <div class="col-sm-10">
							        <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email yang valid">
							    </div>
						    </div>
						    <div class="form-group">
						    	<label class="control-label col-sm-2">File CV</label>
							    <div class="col-sm-10">
							          <input type="file" name="file" id="file">
							    </div>
							</div>
							<div class="form-group">
						        <div class="col-sm-offset-10">
						        	<button type="submit" id="kirim" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"> Kirim</span></button>
						        </div>
						    </div>
					    </form>
			        </div>
		      	</div>
		    </div>
	  	</div>
  	</div>
</body>
</html>