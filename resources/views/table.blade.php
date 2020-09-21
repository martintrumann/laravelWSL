<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="p-12">
	<table class="w-full table-auto">
		<thead class="font-bold">
			<tr>
				<td class="px-2 py-2"><a href="?sort=title">Pealkiri</a></td>
				<td class="px-2 py-2"><a href="?sort=release_date">Aasta</a></td>
				<td class="px-2 py-2"><a href="?sort=pages">Lehtede Arv</a></td>
				<td class="px-2 py-2"><a href="?sort=price">Hind</a></td>
				<td class="px-2 py-2"><a href="?sort=stock_saldo">laoseis</a></td>
				<td class="px-2 py-2"><a href="?sort=type">Tüüp</a></td>
			</tr>
		</thead>
		@foreach ($books as $book)
			<tbody>
				<tr>
					<td class="px-4 py-2 border"> {{ $book->title }} </td>
					<td class="px-4 py-2 border"> {{ $book->release_date }} </td>
					<td class="px-4 py-2 border"> {{ $book->pages }} </td>
					<td class="px-4 py-2 border"> {{ $book->price }} </td>
					<td class="px-4 py-2 border"> {{ $book->stock_saldo }} </td>
					<td class="px-4 py-2 border"> {{ $book->type }} </td>
				</tr>
			</tbody>
		@endforeach
	</table>
	<div class="mt-5">
		{{ $books->links() }}
	</div>
</body>
</html>
