	@extends("layout.index")

	@section("title", "Books")

	@section("content")
	<div class="p-12">
		<table class="w-full table-auto">
			<thead class="font-bold">
				<tr>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=title">Pealkiri</a></td>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=release_date">Aasta</a></td>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=pages">Lehtede Arv</a></td>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=price">Hind</a></td>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=stock_saldo">laoseis</a></td>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=type">Tüüp</a></td>
				</tr>
			</thead>
			@foreach ($books as $book)
				<tbody>
					<tr>
						<td class="px-4 py-2 border">
							<a href="book/{{ $book->id }}">{{ $book->title }}</a>
						</td>
						<td class="px-4 py-2 border">{{ $book->release_date }}</td>
						<td class="px-4 py-2 border">{{ $book->pages }}</td>
						<td class="px-4 py-2 border">{{ $book->price }}</td>
						<td class="px-4 py-2 border">{{ $book->stock_saldo }}</td>
						<td class="px-4 py-2 border">{{ $book->type }}</td>
					</tr>
				</tbody>
			@endforeach
		</table>
		<div class="mt-5">
			{{ $books->withQueryString()->links() }}
		</div>
	</div>
	@endsection
