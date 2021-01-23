<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">BPIOproject</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/roles">Roles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vehicles">Vehicles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/companies">Companies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/countries">Countries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sexes">Sexes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vehicle_movements">Vehicle movements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vehicle_registrations">Vehicle registrations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/purposes">Purposes</a>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
