<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.card{
    border:none;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
}
</style>

</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand">My Dashboard</a>

<a href="/logout" class="btn btn-danger">Logout</a>

</div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">

<h2 class="mb-4">Dashboard</h2>

<div class="row">

<div class="col-md-4">
<div class="card p-3">
<h5>Users</h5>
<h2>120</h2>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<h5>Data</h5>
<h2>85</h2>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<h5>Activity</h5>
<h2>23</h2>
</div>
</div>

</div>

</div>

</body>
</html>