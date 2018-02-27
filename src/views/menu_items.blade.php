<ul class="dropdown-menu" role="menu">
    <?php $depth++; ?>
    @foreach($items as $name => $path)
        <?php if(is_array($path)): ?>
            @if($depth + 1 <= config('top_nav.max_depth'))
                <li class="dropdown-submenu nav-item">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ $name }}
                    </a>
                    @include('LaravelTopNav::menu_items', ['depth' => $depth, 'items' => $path])
                </li>
            @endif
        <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="{{ $path }}">{{ trans('LaravelTopNav::ui.top_nav.'.$name) }}</a></li>
        <?php endif; ?>
    @endforeach
</ul>
