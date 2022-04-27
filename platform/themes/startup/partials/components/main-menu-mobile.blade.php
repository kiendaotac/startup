<ul {!! $options !!}>
    @foreach ($menu_nodes as $key => $row)
    <li>
        <a href="{{ url($row->url) }}">{{ $row->title }}</a>
        @if ($row->has_child)
            {!! Menu::generateMenu([
                'menu'       => $menu,
                'menu_nodes' => $row->child,
                'view'       => 'components.main-menu-mobile',
                'options' => ['class' => '',]
            ]) !!}
        @endif
    </li>
    @endforeach
</ul>