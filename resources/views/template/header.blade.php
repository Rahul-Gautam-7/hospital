<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('thala.index') }}">Hospital</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('thala.create') }}">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('thala.trashed') }}">Recycle Bin</a>
          </li>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" name="search" placeholder="Search"  aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
{{-- gender filter --}}
<form class="d-flex" role="search">
  <select class="form-select mx-3" name="gender" aria-label="Default select example"> 
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>
  <button class="btn btn-outline-primary" type="submit">Filter</button>
</form>
  
</select>
      </div>
    </div>
  </nav>