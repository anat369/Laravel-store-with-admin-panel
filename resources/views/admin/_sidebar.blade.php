<ul class="sidebar-menu">
    <li class="treeview">
        <a href="/">
            <i class="fa fa-dashboard"></i> <span>Магазин</span>
        </a>
    </li>
    <li><a href="{{route('admin.brand.index')}}"><i class="fa fa-bold"></i> <span>Бренды</span></a></li>
    <li><a href="{{route('admin.order.index')}}"><i class="fa fa-cart-plus"></i><span>Заказы</span>
            <span class="pull-right-container">
          <small class="label pull-right bg-green">{{\App\Order::countNewOrders()}}</small>
        </span>
        </a>
    </li>
    <li><a href="{{route('admin.category.index')}}"><i class="fa fa-list-ul"></i> <span>Категории</span></a></li>
    <li>
        <a href="{{route('admin.review.index')}}">
            <i class="fa fa-commenting"></i> <span>Отзывы</span>
            <span class="pull-right-container">
        </span>
        </a>
    </li>
    <li><a href="{{route('admin.user.index')}}"><i class="fa fa-users"></i> <span>Пользователи</span></a></li>
    <li><a href="{{route('admin.email.index')}}"><i class="fa fa-cart-plus"></i><span>Сообщения</span>
            <span class="pull-right-container">
          <small class="label pull-right bg-green">{{\App\Contact::countNewEmail()}}</small>
        </span>
        </a>
    </li>
    <li><a href="{{route('admin.item.index')}}"><i class="fa fa-file-image-o"></i> <span>Товары</span></a></li>
</ul>