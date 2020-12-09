<div class="header sticky">
    <nav class="navbar navbar-expand-md navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Pradžia</a>
            </li>
            <li class="nav-item {{ Request::is('apie-darba') ? 'active' : '' }}">
                <a class="nav-link" href="/apie-darba">Laboratorinis darbas</a>
            </li>
            <li class="nav-item {{ Request::is('teorija') ? 'active' : '' }}">
                <a class="nav-link" href="/teorija">Teorija</a>
            </li>
            <li class="nav-item {{ Request::is('skaiciuokle') ? 'active' : '' }}">
                <a class="nav-link" href="/skaiciuokle">Skaičiuoklė</a>
            </li>
            <li class="nav-item {{ Request::is('komanda') ? 'active' : '' }}">
                <a class="nav-link" href="/komanda">Komanda</a>
            </li>
        </ul>
    </nav>
</div>
