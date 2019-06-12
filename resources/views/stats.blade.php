
@extends('layouts.main')

@section('content')
		<div>
			<div class="info-table">
				@if( isset($url) && isset($slug) && isset($hits))
				<div class="info">
					<span class="info-title">Shortened Url : </span>
					<span class="info-body">
						<a target="_plain" href="{{ config('app.url') }}/{{ $slug }}/">{{ config('app.url') }}/{{ $slug }}/</a>
					</span>
				</div>
				<div class="info">
					<span class="info-title">Original Url : </span>
					<span class="info-body">
						<a target="_plain" href="{{ $url }}">{{ $url }}</a>
					</span>
				</div>
				<div class="info">
					<span class="info-title">Hits Count : </span>
					<span class="info-body">{{ $hits }}</span>
				</div>
				<div class="info cta">
					<a href="/" class="call-to-action">Shorten More Links >></a>
				</div>
				@else
					<div>Some information are missing, This link might be corrupt</div>
				@endif
			</div>
		</div>
@endsection