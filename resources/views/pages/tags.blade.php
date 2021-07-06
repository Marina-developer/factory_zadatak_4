@extends('layouts.main')
@section('content')
<div>
   <br>
   <h1><strong>{{ __('factory.tag') }}</strong></h1>
   <p>{{ __('factory.result_per_page') }} {{ $counter }}</p>
</div>
<div>
   @if(count($tags) > 0)
   <ul class="list-group">
      @foreach($tags as $tag)
      <li class="list-group-item">{{$tag->{ __('factory.tags') } }}</li>
      @endforeach
      <br>
      {{$tags->links()}}
   </ul>
   @endif
</div>
<br>
<div>
   <a href="{{ route('index', app()->getLocale()) }}" class="btn btn-success pull-left">{{ __('factory.back') }}</a>
</div>
@endsection
