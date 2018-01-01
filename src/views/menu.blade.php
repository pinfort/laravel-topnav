<ul class="nav navbar-nav">
    <?php $menu = config('top_nav.menu'); ?>
    @foreach($menu as $name => $path)
        <?php if(is_array($path)): ?>
            <li class="dropdown multi-level">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ $name }}
                </a>
                @include('vendor.LaravelTopNav.menu_items', ['depth' => 0, 'items' => $path])
            </li>
        <?php else: ?>
            <li><a href="{{ $path }}">{{ trans('vendor.LaravelTopNav.ui.top_nav.'.$name) }}</a></li>
        <?php endif; ?>
    @endforeach
</ul>
