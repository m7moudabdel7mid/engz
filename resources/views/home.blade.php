@extends('layouts.main')

@section('content')
		<div>
			
			<form method="post" action="/">
				{{ csrf_field() }}
				@foreach($errors->all() as $err)
					<div class="err-box">{{ $err }}</div>
				@endforeach
				<input type="text" name="url" placeholder="Your Url ...">
				<button type="submit">Shorten</button>
			<form>
		</div>
@endsection