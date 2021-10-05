<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand logo" href="{{ route('root') }}">東北求人ナビ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('recruits.index') }}">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="募集職種">
            <input class="form-control mr-sm-2" type="search" placeholder="勤務地">
            <input class="form-control mr-sm-2" type="search" placeholder="給与">
        </form>
    </div>
</nav>