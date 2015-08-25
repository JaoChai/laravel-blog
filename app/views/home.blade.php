@extends('templates.default')

@section ('title')Home @stop

@section('content')
	@if($posts->count())
		@foreach($posts as $post)
			<article>
				<h2><a href="{{ $url=action('PostController@getShow',$post->slug) }}">{{ $post->title }}</a></h2>
				<p>Publicshed on {{$post->created_at->format('l jS \\of F Y')}} </p>
				 {{ Markdown::parse(Str::limit($post->body,300)) }}
				<a href="{{ $url=action('PostController@getShow',$post->slug) }}">Read more &rarr;</a>
			</article>
		@endforeach
	@endif
@stop

