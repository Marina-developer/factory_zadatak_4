@extends('layouts.main_details')
@section('content')
<div>
   <br>
   @if(count($mealTitle) > 0)
   @foreach($mealTitle as $title)
   <h2>{{$title->{ __('factory.meals') } }}</h2>
   @endforeach
   @endif
   <br>
   <div style="padding: 15px; margin:5px;">
      <p><strong style="color: red">{{ __('factory.ingredient') }}</strong></p>
      <hr>
      <ul>
         @if(count($inTitle) > 0)
         @foreach($inTitle as $in)
         <li>{{$in-> { __('factory.ingredients') } }}</li>
         @endforeach
         @endif
      </ul>
      <br>
      <p><strong style="color: red">{{ __('factory.category') }}</strong></p>
      <hr>
      <ul>
         @if(count($categoryTitle) > 0)
         @foreach($categoryTitle as $title)
         <li>{{$title->{ __('factory.categories') } }}</li>
         @endforeach
         @endif
      </ul>
      <p><strong style="color: red">{{__('factory.tag') }}</strong></p>
      <hr>
      <ul>
         @if(count($tagsTitle) > 0)
         @foreach($tagsTitle as $title)
         <li>{{$title->{ __('factory.tags') } }}</li>
         @endforeach
         @endif
      </ul>
   </div>
</div>
<br>
<div>
   <a href="{{ route('meals', app()->getLocale()) }}" class="btn btn-success pull-left">{{ __('factory.back') }}</a>
</div>
@endsection
