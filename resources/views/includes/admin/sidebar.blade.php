<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">ADMIN PANEL</li>

      {{--  <li class="nav-item">
            <a href="{{route('admin.menu.index')}}" class="nav-link">
                <i class="nav-icon fa fa-solid fa-home"></i>
                <p>
                    Главное меню
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.category.index')}}" class="nav-link">
                <i class="nav-icon fa fa-solid fa-list"></i>
                <p>
                    Категорий
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>

--}}

        <li class="nav-item">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Справочники
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="./index.html" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Отделение</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Специальности</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Кабинеты</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Участники</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-newspaper"></i>
                <p>
                    Новости
                    <span class="badge badge-info right">2</span>
                </p>
            </a>
        </li>
    </ul>
</nav>