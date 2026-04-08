<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg, #667eea, #764ba2);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-card{
    border:none;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
    padding:30px;
    background:white;
}

.btn-custom{
    background:#667eea;
    color:white;
}
</style>

</head>

<body>

<div class="col-md-4">

<div class="login-card">

<h3 class="text-center mb-4">Welcome Backkkkk 👋</h3>

<form method="POST" action="/login">
@csrf

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="mb-3">
<input type="email" name="email" class="form-control" placeholder="Email">
</div>

<div class="mb-3">
<input type="password" name="password" class="form-control" placeholder="Password">
</div>

<button class="btn btn-custom w-100">Login</button>

</form>

</div>

</div>

</body>
</html>