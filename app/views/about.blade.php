@extends('layouts.default')

@section('content')

	<h1>About</h1>

	<div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        </div>

        <div class="col-md-6">

          {{ HTML::image('images/image002.png') }}

        </div>

@stop