<ul class="sidebar-menu">
    <li class="treeview">
        <a href="/">
            <i class="fa fa-dashboard"></i> <span>Магазин</span>
        </a>
    </li>
    <li><a href="{{route('brands.index')}}"><i class="fa fa-bold"></i> <span>Бренды</span></a></li>
    <li><a href="{{route('orders.index')}}"><i class="fa fa-cart-plus"></i><span>Заказы</span>
            <span class="pull-right-container">
          <small class="label pull-right bg-green">{{\App\Order::countNewOrders()}}</small>
        </span>
        </a>
    </li>
    <li><a href="{{route('parcat.index')}}"><i class="fa fa-sticky-note-o"></i> <span>Категории</span></a></li>
    <li><a href="{{route('categories.index')}}"><i class="fa fa-list-ul"></i> <span>Подкатегории</span></a></li>
    <li><a href="{{route('users.index')}}"><i class="fa fa-users"></i> <span>Пользователи</span></a></li>
    <li><a href="{{route('items.index')}}"><i class="fa fa-file-image-o"></i> <span>Товары</span></a></li>
</ul>