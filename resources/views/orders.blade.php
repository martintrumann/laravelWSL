	@extends("layout/index")

	@section("title", "Orders")

	@section("content")
	<div class="p-12">
		<table class="w-full table-auto">
			<thead class="font-bold">
				<tr>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=id">ID</a></td>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=address">Delivery address</a></td>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=date">Tellimuse Kuupäev</a></td>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=status">Staatus</a></td>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=client_id">Kliendi ID</a></td>
					<td class="px-2 py-2"><a href="?asc={{$asc ? "0" : "1"}}&sort=book_id">Raamatu ID</a></td>
				</tr>
			</thead>
			@foreach ($orders as $order)
				<tbody>
					<tr>
						<td class="px-4 py-2 border">
							<a href="order?id={{ $order->id }}">{{ $order->id }}</a>
						</td>
						<td class="px-4 py-2 border">{{ $order->delivery_address }}</td>
						<td class="px-4 py-2 border">
							{{ \Carbon\Carbon::parse( $order->order_date )->toDayDateTimeString() }}
						</td>
						<td class="px-4 py-2 border">{{ $order->status }}</td>
						<td class="px-4 py-2 border">{{ $order->client_id }}</td>
						<td class="px-4 py-2 border">{{ $order->book_id }}</td>
					</tr>
				</tbody>
			@endforeach
		</table>
		<div class="mt-5">
			{{ $orders->withQueryString()->links() }}
		</div>
	</div>
	@endsection
