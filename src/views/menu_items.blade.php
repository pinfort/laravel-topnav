<ul class="dropdown-menu" role="menu">
    @foreach ($items as $name => $path)
        @if (is_array($path))
            @if ($loop->depth <= config('top_nav.max_depth'))
                <li class="dropdown-submenu nav-item">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ $name }}
                    </a>
                    @include('LaravelTopNav::menu_items', ['items' => $path])
                </li>
            @endif
        @else
            <li class="nav-item"><a class="nav-link" href="{{ $path }}">@lang('LaravelTopNav::ui.top_nav.'.$name)</a></li>
        @endif
    @endforeach
</ul>
