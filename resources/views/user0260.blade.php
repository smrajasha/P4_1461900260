<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	
		<br>
		<br>
		<p></p>
		<div class="center">
		<center><table border=1>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Password</th>
					<th><a href="/create">TAMBAH DATA</a></th>
					<br>
					<th><a href="/user/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a></th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($user as $s)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->nama}}</td>
					<td>{{$s->username}}</td>
					<td>{{$s->password}}</td>
				</tr>
				@endforeach
			</tbody>
		</table></center>
		</div>

</body>
</html>