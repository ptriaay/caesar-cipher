<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-danger">

<div class="container">

<div class="row vh-100 d-flex justify-content-center align-items-center">

<div class="col-md-4">

<div class="card shadow">

<div class="card-body">

<h3 class="text-center mb-4">Login</h3>

<form method="POST" action="/login">
@csrf

<div class="mb-3">
<input type="text" class="form-control" placeholder="Username">
</div>

<div class="mb-3">
<input type="password" class="form-control" placeholder="Password">
</div>

<button class="btn btn-danger w-100">Login</button>

</form>

</div>
</div>

</div>
</div>

</div>

</body>
</html>