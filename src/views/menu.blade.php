<ul class="nav navbar-nav">
    @foreach ($menu as $name => $path)
        @if (is_array($path))
            <li class="dropdown multi-level nav-item">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ $name }}
                </a>
                @include('LaravelTopNav::menu_items', ['items' => $path])
            </li>
        @else
            <li class="nav-item"><a class="nav-link" href="{{ $path }}">@topnavlang($name)</a></li>
        @endif
    @endforeach
</ul>
