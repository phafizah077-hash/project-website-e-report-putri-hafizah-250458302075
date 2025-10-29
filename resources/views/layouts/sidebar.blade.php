<div id="sidebar">
  @if(Auth::user()->role ==1)
  @include('layouts.menu.menuAdmin')
  @elseif(Auth::user()->role ==2)
  @include('layouts.menu.menuUser')
  @endif
</div>