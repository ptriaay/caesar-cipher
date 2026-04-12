<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            border: none;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            width: 100%;
        }

        h2 {
            font-weight: 700;
            letter-spacing: 0.5px;
            color: #4a4a4a;
        }

        .btn {
            border-radius: 10px;
            transition: 0.2s ease-in-out;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        table {
            overflow: hidden;
            border-radius: 12px;
        }

        thead {
            background: #4f46e5 !important;
            color: white;
        }

        tbody tr {
            transition: 0.2s;
        }

        tbody tr:hover {
            background: #f3f4ff;
            transform: scale(1.01);
        }

        .badge-email {
            background: #eef2ff;
            color: #4f46e5;
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 12px;
        }

        .header-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

    </style>
</head>

<body>

<div class="container">

    <div class="card p-4">

        <!-- HEADER -->
        <div class="header-title">
            <h2>📋 Daftar Pengguna</h2>

            <div>
                <a href="/tambah_pengguna" class="btn btn-primary btn-sm">+ Tambah</a>
                <a href="/logout" class="btn btn-outline-danger btn-sm">Logout</a>
            </div>
        </div>

        <!-- ALERT -->
        @if(session('success'))
            <div class="alert alert-success rounded-3">
                {{ session('success') }}
            </div>
        @endif

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <span class="badge-email">
                                {{ $user->email }}
                            </span>
                        </td>

                        <td>********</td>

                        <td>
                            <a href="/edit/{{ $user->id }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/delete/{{ $user->id }}" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin mau hapus?')">
                               Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>

</div>

</body>
</html>