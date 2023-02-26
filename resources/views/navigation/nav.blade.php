@section('navbar')

<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ @route('home') }}" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="{{ @route('all') }}" class="nav-link px-2 text-white">Notes</a></li>
          <li><a href="{{ @route('statistiques') }}" class="nav-link px-2 text-white">Statistiques</a></li>
          <li><a href="{{ @route('show') }}" class="nav-link px-2 text-white">Show</a></li>
          <li><a href="{{ @route('decorate') }}" class="nav-link px-2 text-white">Decorate</a></li>
        </ul>
 
 <!--   <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 text-end">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
          <button type="button" class="btn btn-warning">Sign-up</button>

        </form> -->
        <form action="{{ @route('show') }}" method="get" class="text-end d-flex">
          @csrf   
          <input type="text" value="@php if(isset($oldvalue)) echo $oldvalue  @endphp" class="form-control form-control-dark py-1 mx-2" name="serch" id="serch">
          <button type="submit" name="btnSerch" class="btn btn-light mx-2">Rechercher</button>
          <button type="button" class="btn btn-outline-light py-1 mx-2">Login</button>
          <button type="button" class="btn btn-warning py-1">Sign-up</button>
        </form>
      </div>
    </div>
  </header>
  @endsection