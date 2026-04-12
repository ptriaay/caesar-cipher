<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pengguna</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
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
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: white;
            transition: 0.3s;
        }

        .btn-custom:hover {
            opacity: 0.9;
        }

        .btn-back {
            border-radius: 10px;
        }
    </style>
</head>

<body>

<div class="card-custom">
    <h3 class="title">Edit Pengguna</h3>

    <form method="POST" action="/update/{{ $user->id }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input 
                type="email" 
                name="email" 
                class="form-control" 
                value="{{ $user->email }}" 
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input 
                type="password" 
                name="password" 
                class="form-control" 
                placeholder="Kosongkan jika tidak ingin mengubah">
        </div>

        <button type="submit" class="btn btn-custom w-100 mb-2">Update</button>
    </form>
</div>

</body>
</html>