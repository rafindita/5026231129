<!DOCTYPE html>
<html>
<head>
    <title>Route Navigator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f0f4ff, #dbeafe);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border-radius: 1rem;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
            padding: 2rem;
            background: white;
            max-width: 900px;
            width: 100%;
        }
        .btn {
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
            border-radius: 0.75rem;
            transition: 0.2s ease;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
    <div class="card text-center">
        <h2 class="mb-4 text-primary">🌐 Navigasi Halaman</h2>
        <div class="row text-start">
            <!-- Kolom 1 -->
            <div class="col-md-4 d-grid gap-3">
                <a href="{{ route('linktree') }}" class="btn btn-outline-primary">Linktree</a>
                <a href="{{ route('pertemuan1') }}" class="btn btn-outline-success">Pertemuan 1</a>
                <a href="{{ route('bootstrap') }}" class="btn btn-outline-warning text-dark">Bootstrap</a>
            </div>

            <!-- Kolom 2 -->
            <div class="col-md-4 d-grid gap-3">
                <a href="{{ route('topikcss') }}" class="btn btn-outline-warning text-dark">Topik CSS</a>
                <a href="{{ route('Dom') }}" class="btn btn-outline-info">DOM</a>
                <a href="{{ route('makeover') }}" class="btn btn-outline-secondary">Makeover</a>
            </div>

            <!-- Kolom 3 -->
            <div class="col-md-4 d-grid gap-3">
                <a href="{{ route('bootstrap1') }}" class="btn btn-outline-danger">bootstrap1</a>
                {{-- <a href="{{ route('project') }}" class="btn btn-outline-dark">Project</a>
                <a href="{{ route('kontak') }}" class="btn btn-outline-primary">Kontak</a> --}}
            </div>
        </div>
    </div>
</body>
</html>
