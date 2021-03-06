<div {!! $options !!} >
    <ul class="mega-menu-row" >
        @foreach ($menu_nodes as $key => $row)
            <li class="mega-menu-col">
                @if($row->icon_font)
                    <a href="{{ url($row->url) }}">
                        <i class='{{ trim($row->icon_font) }}'></i>
                    </a>
                @else
                    <a href="{{ url($row->url) }}">{{ $row->title }}</a>
                @endif
                @if ($row->has_child)
                    {!! Menu::generateMenu([
                        'menu'       => $menu,
                        'menu_nodes' => $row->child,
                        'view'       => 'components.main-menu',
                        'options' => ['class' => 'mega-menu custom-mega-menu2',]
                    ]) !!}
                @endif
            </li>
        @endforeach
    </ul>
</div>
