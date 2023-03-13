<!-- Dropdown -->
{{-- {{app()->getLocale()}} --}}
<div class="btn-group">
  <button class="btn btn-ghost-secondary dropdown-toggle" type="button" id="dropdownMenuButtonGhostSecondary" data-bs-toggle="dropdown" aria-expanded="false">
    {{app()->getLocale()=='ar'?'ar':'fr'}}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{route('lang_change','fr')}}" >fr</a>
    <a class="dropdown-item" href="{{route('lang_change','ar')}}" >ar</a>
    {{-- <a class="dropdown-item" href="{{route('lang_change','fr')}}" >{{__('header.fr')}}</a>
    <a class="dropdown-item" href="{{route('lang_change','ar')}}" >{{__('header.ar')}}</a> --}}
  </div>
</div>
<!-- End Dropdown -->