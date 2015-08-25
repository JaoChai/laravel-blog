@extends('templates.default')
@section('title')
	{{ $post->title }}
@stop

@section('content')
	<article>
		<h2><a href="{{ $url=action('PostController@getShow',$post->slug) }}">{{ $post->title }}</a></h2>
		<p>Publicshed on {{$post->created_at->format('l jS \\of F Y')}} </p>	

		{{ Markdown::parse($post->body) }}
		</article>
@stop