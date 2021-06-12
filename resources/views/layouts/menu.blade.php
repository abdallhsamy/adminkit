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
