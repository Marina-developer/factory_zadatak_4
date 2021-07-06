@extends('layouts.main')
@section('content')
<div>
   <br>
   <h1><strong>{{ __('factory.meal') }}</strong></h1>
   <p>{{ __('factory.result_per_page') }} {{ $counter }}</p>
</div>
<div>
   @if(count($meals) > 0)
   <ul class="list-group">
      @foreach($meals as $meal)
      <li class="list-group-item"><a href='{{ route('details', app()->getLocale())}}/{{ $meal->id }}'>{{$meal->{ __('factory.meals') } }}</a></li>
      @endforeach
      <br>
      {{$meals->links()}}
   </ul>
   @endif
</div>
<br>
<div>
   <a href="{{ route('index', app()->getLocale()) }}" class="btn btn-success pull-left">{{ __('factory.back') }}</a>
</div>
@endsection
