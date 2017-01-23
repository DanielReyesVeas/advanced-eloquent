<!DOCTYPE html>
<html>
	<head>
		<title>N + 1</title>
	</head>
	<body>
		<h1>Libros</h1>
		@foreach($books as $book)
		<li>
			<strong>{{ $book->title }}</strong>
			<em>{{ $book->category->name }}</em> ({{ $book->user->name }})
		</li>
		@endforeach
	</body>
</html>