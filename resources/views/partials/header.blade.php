<header>
    <div class="bg-color-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="d-flex m-0 list-unstyled justify-content-end text-white">
                        <li class="pe-5">DC POWER&#8480; VISA&#174;</li>
                        <li>ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-3">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}">
                <div class=" container navbar-navnavbar-light">
                    <ul class="d-flex list-unstyled justify-content-center text-uppercase">
                        <li class="nav-link blue-bottom px-2 py-2 {{ Route::currentRouteName() === 'homepage' ? 'fw-bold active_li' : '' }}">
                            <a class="nav-link {{ Route::currentRouteName() === 'homepage' ? 'active_a' : '' }}" href="{{ route('homepage') }}"  href="{{ route('homepage') }}">
                                characters
                            </a>
                        </li>
                        <li class="nav-link blue-bottom px-2 py-2">
                            <a class="nav-link">
                                comics
                            </a>
                        </li>
                        <li class="nav-link blue-bottom px-2 py-2">
                            <a class="nav-link">
                                movies
                            </a>
                        </li>
                        <li class="nav-link blue-bottom px-2 py-2">
                            <a class="nav-link">
                                tv
                            </a>
                        </li>
                        <li class="nav-link blue-bottom px-2 py-2">
                            <a class="nav-link">
                                games
                            </a>
                        </li>
                        <li class="nav-link blue-bottom px-2 py-2">
                            <a class="nav-link">
                                collectibiles
                            </a>
                        </li>
                        <li class="nav-link blue-bottom px-2 py-2">
                            <a class="nav-link">
                                videos
                            </a>
                        </li>
                        <li class="nav-link blue-bottom px-2 py-2">
                            <a class="nav-link">
                                fans
                            </a>
                        </li>
                        <li class="nav-link blue-bottom px-2 py-2">
                            <a class="nav-link">
                                news
                            </a>
                        </li>
                        <li class="nav-link blue-bottom px-2 py-2">
                            <a class="nav-link">
                                shop <i class="fa-solid fa-caret-down" style="color: #0074E8;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="search d-flex s-control">
                            <input type="text" class="form-control s-bar" placeholder="Search">
                            <i class="fa fa-search align-self-center"></i>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>