@extends('layouts.app')
@include('sweet::alert')
@section('content')
@if (Session::has('sweet_alert.alert'))
            <script>
                swal({!! Session::get('sweet_alert.alert') !!});
            </script>
        @endif
        @include('sweet::alert')
		<div class="container mix-table">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center">No.</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Email</th>
						<th class="text-center">File CV</th>
						<th class="text-center">Status</th>
						<th class="text-center">Respon</th>
					</tr>
				</thead>
				<?php $no=1; ?>
				@foreach($datas as $data)
				<tbody>
					<tr>
						<td class="text-center">{{ $no++ }}</td>
						<td>{{ $data->name }}</td>
						<td>{{ $data->email }}</td>
						<td class="text-center"><buttton class="glyphicon glyphicon-save-file btn btn-success" onclick="location.href='{{ URL::to('uploads') }}/{{ $data->file_name }}'" ></button>
						</td>
						<td class="text-center">@if($data->status == '1')
						Sudah di respon
						@else
						Belum Direspon
						@endif
						</td>
						<td class="text-center"><button class="glyphicon glyphicon-level-up btn btn-info " onclick="location.href='{{ URL::to('response') }}/{{ $data->id }}'"> Respon</button></td>
					</tr>
				</tbody>
				@endforeach
			</table>
		</div>
		<script src="{{ URL::to('js/Jquery.js') }}"></script>
		<script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
@endsection
@section('footer')
	navbar-fixed-bottom
@endsection