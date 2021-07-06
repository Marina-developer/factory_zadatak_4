<nav class="navbar navbar-expand navbar-dark bg-dark">
   <div class="container">
      <a class="navbar-brand" href="{{ route('index', app()->getLocale()) }}">{{ __('factory.dishes_world') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      @php $locale = session()->get('locale'); @endphp
      <div class="collapse navbar-collapse" id="navbarsExample02">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item">
               <a class="nav-link" href="{{ route('meals', app()->getLocale()) }}" >{{ __('factory.meal') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('ingredients', app()->getLocale()) }}">{{ __('factory.ingredient') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('categories', app()->getLocale()) }}">{{ __('factory.categories_title') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('tags', app()->getLocale()) }}">{{ __('factory.tags_title') }}</a>
            </li>
         </ul>
         <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <strong>{{ __('factory.languages') }}</strong>
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @if (app()->isLocale('hr'))
                  <div id="change"><a class="dropdown-item" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName() , ['locale' => 'en', 'id' => $id]) }}">{{ __('factory.english') }}</a></div>
                  @elseif(app()->isLocale('en'))
                  <div id="change"> <a class="dropdown-item"  href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(),  ['locale' => 'hr', 'id' => $id]) }}"> {{ __('factory.croatian') }}</a></div>
                  @endif
               </div>
            </li>
         </ul>
         <!--
            <form class="form-inline my-2 my-md-0">
              <input class="form-control" type="text" placeholder="Search">
            </form>
            -->
      </div>
   </div>
</nav>
@if ($errors->any())
<div class="alert alert-danger">
   <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif
