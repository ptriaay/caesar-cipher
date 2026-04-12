<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengguna</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-custom {
            border-radius: 20px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-custom {
            border-radius: 10px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transition: 0.3s;
        }

        .btn-custom:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>

<div class="card-custom">
    <h3 class="title">Tambah Pengguna</h3>

    <form method="POST" action="/store">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>

        <button type="submit" class="btn btn-custom w-100">Simpan</button>
    </form>
</div>

</body>
</html>