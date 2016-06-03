@extends('layouts.app')
@section('content')
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../style.css">
		<script src="../ckeditor/ckeditor.js"></script>
		<div class="container-fluid">
			<form class="form-horizontal" role="form" method="post">
	    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    		<input type="hidden" name="status" value="1">
	    		<div class="form-group">
			      	<label class="control-label col-sm-2">Tujuan</label>
				    <div class="col-sm-4">
			        	<input type="text" class="form-control" id="disabledInput" value="{{ $data->email }}" disabled>
	    			</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Isi Respon</label>
					<div class="col-sm-8">
			    		<textarea name="respon" class="ckeditor"></textarea>
			    	</div>
			    </div>
			    <div class="form-group">
					<div class="col-sm-offset-9">
			        	<button type="submit" id="kirim" class="btn" style="background-color: #5bc0de;color: white;"><span class="glyphicon glyphicon-envelope"> Kirim</span></button>
			        </div>
			    </div>
			</form>
		</div>
@endsection