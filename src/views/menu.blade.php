<ul class="nav navbar-nav">
    <?php $menu = config('top_nav.menu'); ?>
    @foreach($menu as $name => $path)
        <?php if(is_array($path)): ?>
            <li class="dropdown multi-level nav-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ $name }}
                </a>
                @include('LaravelTopNav::menu_items', ['depth' => 0, 'items' => $path])
            </li>
        <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="{{ $path }}">{{ trans('LaravelTopNav::ui.top_nav.'.$name) }}</a></li>
        <?php endif; ?>
    @endforeach
</ul>
