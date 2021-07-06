@extends('layouts.main')
@section('content')
<div>
   <br>
   <h1><strong>{{ __('factory.ingredient') }}</strong></h1>
   <p>{{ __('factory.result_per_page') }} {{ $counter }}</p>
</div>
<div>
   @if(count($ingredients) > 0)
   <ul class="list-group">
      @foreach($ingredients as $ingredient)
      <li class="list-group-item">{{$ingredient->{ __('factory.ingredients') } }}</li>
      @endforeach
      <br>
      {{$ingredients->links()}}
   </ul>
   @endif
</div>
<br>
<div>
   <a href="{{ route('index', app()->getLocale()) }}" class="btn btn-success pull-left">{{ __('factory.back') }}</a>
</div>
@endsection
