<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>{{ __('menu.dashboard') }}</span>
    </a>
</li>
<li class="side-menus">
    <a class="nav-link" href="{{ route('io_generator_builder') }}">
        <i class=" fas fa-building"></i><span>CRUD builder</span>
    </a>
</li>
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>{{ __('models/roles.plural') }}</span></a>
</li>

<li class="{{ Request::is('permissions*') ? 'active' : '' }}">
    <a href="{{ route('permissions.index') }}"><i class="fa fa-edit"></i><span>{{ __('models/permissions.plural') }}</span></a>
</li>
<li class="{{ Request::is('articles*') ? 'active' : '' }}">
    <a href="{{ route('articles.index') }}"><i class="fa fa-edit"></i><span>{{ __('models/articles.plural') }}</span></a>
</li>

