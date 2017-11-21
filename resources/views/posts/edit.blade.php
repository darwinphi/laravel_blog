@extends('main')

@section('title', 'View Post')

@section('content')
	
	
	{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

	<div class="row">	
		<div class="col-md-8">
			<div class="card border-light mb-3">
			  	<div class="card-body">
				
				{{ Form::label('title', 'Title') }}
			  	<p>
			  		{{ Form::text('title', null, ['class'=>'form-control']) }}
			  	</p>

			  	{{ Form::label('slug', 'Slug') }}
				<p>
					{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}
				</p>
			   
			   {{ Form::label('body', 'Body') }}
			 	<p>
			 		{{ Form::textarea('body', null, ['class' => 'form-control']) }}
			 	</p>

			 	</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
			  <div class="card-body">
			  		<p class="card-text">
			  			Url:<a href="{{ url($post->slug) }}"> {{ url($post->slug) }}</a>
			  		</p>
				  	<p class="card-text">Updated @ {{ date('M j, Y h:i A', strtotime($post->updated_at)) }}
				  	</p>
				  	<div class="row">
				  		<div class="col-md-12">
				  			{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block', 'style' => 'margin-bottom: 1em;')) !!}
						</div>
						<div class="col-md-12">
							{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
							
						</div>
				  	</div>
			  </div>
			</div>
		</div>
	</div>	

	{!! Form::close() !!}
	

@endsection