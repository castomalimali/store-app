<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
<title>@yield('title', 'Admin - Online Store')</title>
</head>
<body>
<div class="row g-0">
<!-- sidebar -->
<div class="p-3 col fixed text-white bg-dark">
<a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
<span class="fs-4">Admin Panel</span>
</a>
<hr />
<ul class="nav flex-column">
<li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Admin - Home</a></li>
<li><a href="{{route('admin.product.index')}}" class="nav-link text-white">- Admin - Products</a></li>
<li>
<a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the home page</a>
</li>
</ul>
</div>
<!-- sidebar -->
<div class="col content-grey">
<nav class="p-3 shadow text-end">
<span class="profile-font">Admin</span>
<img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
</nav>
<div class="g-0 m-5">
@yield('content')
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- footer -->
<div class="copyright py-4 text-center text-white">
<div class="container">
<small>
Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
href="https://instagram.com/casto_malimali">
androvision
</a> - <b>Pro-Khuk</b>
</small>
</div>
</div>
<!-- footer -->

</body>
</html>
