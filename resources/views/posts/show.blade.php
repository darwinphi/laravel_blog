@extends('main')

@section('title', 'View Post')

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<div class="card border-light mb-3">
			  <div class="card-body">
			    <h4 class="card-title">{{ $post->title }}</h4>
			    <p class="card-text">{{ $post->body }}</p>
			  </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
			  <div class="card-body">
			  		<p class="card-text">
			  			Url:<a href="{{ url($post->slug) }}"> {{ url($post->slug) }}</a>
			  		</p>
			  		<p class="card-text">
			  			Created @ {{ date('M j, Y h:i A', strtotime($post->created_at)) }}
			  		</p>
				  	<p class="card-text">Updated @ {{ date('M j, Y h:i A', strtotime($post->updated_at)) }}</p>
				  	<div class="row">
				  		<div class="col-md-12">
				  			{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block', 'style' => 'margin-bottom: 1em;')) !!}
							{{-- <a href="#" class="btn btn-primary btn-block" style="margin-bottom: 1em;">Edit</a> --}}
				  			
						</div>
						<div class="col-md-12">

							{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

							{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}				
		
							{!! Form::close() !!}

						</div>
						<div class="col-md-12">
							{{ Html::linkRoute('posts.index', 'See All Posts', [], ['class' => 'btn btn-default btn-block']) }}
						</div>
				  	</div>
			  </div>
			</div>
		</div>
	</div>

@endsection



