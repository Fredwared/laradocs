<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-danger">
  <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <a class="navbar-brand" href="#">Laradocs {{ isset($section) ? ' - '. $section : '' }}</a>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
    </ul>
    <div class="form-inline mt-2 mt-md-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('administration.dashboard') }}">
            <i class="fa fa-fw fa-dashboard"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth.logout') }}">
            <i class="fa fa-fw fa-unlock"></i> Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>