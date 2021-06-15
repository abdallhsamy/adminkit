<li class="{{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
        <i class=" fas fa-fire"></i><span>{{ __('menu.dashboard') }}</span>
    </a>
</li>

<li>
    <a class="nav-link" href="{{ route('io_generator_builder') }}">
        <i class=" fas fa-building"></i><span>CRUD builder</span>
    </a>
</li>

<li class="menu-header">{{ __('models/users.plural') }}</li>

<li class="nav-item dropdown {{ Request::is('users*') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown">
        <i class="far fa-user"></i> <span>{{ __('models/users.plural') }}</span></a>
    <ul class="dropdown-menu">
        <li>
            <a class="nav-link" href="{{ route('users.index') }}">
                {{ __('models/users.plural') }}
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('users.create') }}">
                {{ __('crud.add_new') }} {{ __('models/users.singular') }}
            </a>
        </li>
    </ul>
</li>

<li class="nav-item dropdown {{ Request::is('roles*') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-chess"></i> <span>{{ __('models/roles.plural') }}</span></a>
    <ul class="dropdown-menu">
        <li>
            <a class="nav-link" href="{{ route('roles.index') }}">
                {{ __('models/roles.plural') }}
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('roles.create') }}">
                {{ __('crud.add_new') }} {{ __('models/roles.singular') }}
            </a>
        </li>
    </ul>
</li>

<li class="nav-item dropdown {{ Request::is('permissions*') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown">
        <i class="fab fa-500px"></i> <span>{{ __('models/permissions.plural') }}</span></a>
    <ul class="dropdown-menu">
        <li>
            <a class="nav-link" href="{{ route('permissions.index') }}">
                {{ __('models/permissions.plural') }}
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('permissions.create') }}">
                {{ __('crud.add_new') }} {{ __('models/permissions.singular') }}
            </a>
        </li>
    </ul>
</li>

<li class="menu-header">{{ __('menu.modules') }}</li>

<li class="nav-item dropdown {{ Request::is('articles*') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-newspaper"></i> <span>{{ __('models/articles.plural') }}</span></a>
    <ul class="dropdown-menu">
        <li>
            <a class="nav-link" href="{{ route('articles.index') }}">
                {{ __('models/articles.plural') }}
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('articles.create') }}">
                {{ __('crud.add_new') }} {{ __('models/articles.singular') }}
            </a>
        </li>
    </ul>
</li>
