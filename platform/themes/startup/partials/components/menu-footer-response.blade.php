<ul {!! $options !!}>
    @foreach ($menu_nodes as $key => $row)
    <li class="respon-menu-footer">
        <a href="{{ $row->url }}">{{ $row->title }}</a>
    </li>
    @endforeach
</ul>