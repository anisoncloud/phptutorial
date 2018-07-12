<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD Tutorial</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css')}}">	
	<script type="text/javascript" src="{{ url('js/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.js')}}"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>

<footer id="footer" class="text text-center">
	<p>Copyright &copy 2018 Anisur Rahman</p>
</footer>
</body>
</html>