<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<div class="p-12">
	<h1 class="font-bold text-3xl px-4 py-2"> {{ $book->title }} </h1>
	<p class="px-4 py-2"> {{ $book->summary }} </p>
</div>
</html>
