<div class="header">
    <div class="contentContainer">
        <div class="header-logo">
            <img src="{{asset('images/dc-logo.png')}}" alt="">
        </div>
        <div class="header-nav">
            <ul>
                <li
                class="{{Route::currentRouteName()=='characters' ? 'active' : ''}}">
                    <a href="characters">
                        CHARACTERS
                    </a>
                </li>
                <li
                class="{{Route::currentRouteName()=='comics' ? 'active' : ''}}">
                    <a href="{{route('comics')}}">
                        COMICS
                    </a>
                </li>
                <li
                class="{{Route::currentRouteName()=='movies' ? 'active' : ''}}">
                    <a href="movies">
                        MOVIES
                    </a>
                </li>
                <li
                class="{{Route::currentRouteName()=='tv' ? 'active' : ''}}">
                    <a href="tv">
                        TV
                    </a>
                </li>
                <li
                class="{{Route::currentRouteName()=='games' ? 'active' : ''}}">
                    <a href="games">
                        GAMES
                    </a>
                </li>
                <li>
                    <a href="">
                        COLLECTIBLES
                    </a>
                </li>
                <li>
                    <a href="">
                        VIDEOS
                    </a>
                </li>
                <li>
                    <a href="">
                        FANS
                    </a>
                </li>
                <li>
                    <a href="">
                        NEWS
                    </a>
                </li>
                <li>
                    <a href="">
                        SHOP
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>