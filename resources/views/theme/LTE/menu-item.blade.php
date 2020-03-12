@if ($item["submenu"] == [])
    <li class="nav-item">
        <a href="{{url($item['url'])}}" class="nav-link">
            <i class="nav-icon far {{$item["icono"]}}"></i> <p>{{$item["nombre"]}}</p>
        </a>
    </li>
@else
    <li class="nav-item has-treeview menu-open">
        <a href="javascript:;" class="nav-link">
            <i class="nav-icon far {{$item["icono"]}}"></i> <p>{{$item["nombre"]}}<i class="fas fa-angle-left right"></i></p>
        </a>
        <ul class="nav nav-treeview" style="display: block; height: 129.563px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
            @foreach ($item["submenu"] as $submenu)
                @include("theme.$theme.menu-item", ["item" => $submenu])
            @endforeach
        </ul>
    </li>
@endif