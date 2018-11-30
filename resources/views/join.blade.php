<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2>JOINING</h2>
	<div>
		<table>
			<thead>
				<th>ID</th>
				<th>District</th>
				<th>DIVISION</th>
			</thead>
			<tbody>
				@foreach($data as $d)
				<tr>
					<td>{{ $d->id }}</td>
					<td>{{ $d->district }}</td>
					<td>{{ $d->division }}</td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
</body>
</html>