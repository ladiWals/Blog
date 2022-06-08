<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="{{ asset('img/admin/AdminLTELogo.png') }}" alt="Логотип" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Админка</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/admin/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="Фото профиля">
            </div>
            <div class="info">
                <a href="#" class="d-block">Имя Фамилия</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <li class="nav-header">КОНТЕНТ</li>
                <li class="nav-item">
                    <a href="{{ route('admin.post.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-align-justify"></i>
                        <p>
                            Посты
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Категории
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.tag.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Тэги
                        </p>
                    </a>
                </li>
                <li class="nav-header">ПОЛЬЗОВАТЕЛИ</li>
                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Активные
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-lock"></i>
                        <p>
                            Заблокированные
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
