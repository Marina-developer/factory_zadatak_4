@extends('layouts.main')
@section('content')
<div>
   <br>
   <h1><strong>{{ __('factory.categories_title') }}</strong></h1>
   <p>{{ __('factory.result_per_page') }} {{ $counter }}</p>
</div>
<div>
   <div class="form-group">
      @if(count($categories) > 0)
      <ul class="list-group">
         @foreach($categories as $category)
         <li class="list-group-item">{{$category-> { __('factory.categories') } }}</li>
         @endforeach
         <br>
         {{$categories->links()}}
      </ul>
      @endif
   </div>
</div>
<br>
<div>
   <a href="{{ route('index', app()->getLocale()) }}" class="btn btn-success pull-left">{{ __('factory.back') }}</a>
</div>
@endsection
