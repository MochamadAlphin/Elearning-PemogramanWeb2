<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Berangkatin' }}</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-blue: #2d2a70;
            --accent-orange: #fd7e14;
            --text-dark: #1a193d;
        }

        body { 
            font-family: 'Inter', sans-serif; 
            color: var(--text-dark);
            background-color: #fcfcfd;
        }

        h1, h2, h3, .navbar-brand { 
            font-family: 'Montserrat', sans-serif; 
        }

        /* Navbar Custom */
        .navbar { 
            background-color: var(--primary-blue) !important; 
            padding: 15px 0;
        }
        .btn-orange-custom {
            background-color: var(--accent-orange);
            color: white;
            border-radius: 8px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-orange-custom:hover {
            background-color: #e66d0d;
            color: white;
            transform: translateY(-2px);
        }

        /* Card Custom */
        .card-custom {
            border: none;
            border-bottom: 4px solid transparent;
            border-radius: 16px;
            transition: all 0.3s ease;
        }
        .card-custom:hover {
            border-bottom: 4px solid var(--accent-orange);
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(45, 42, 112, 0.1) !important;
        }

        /* Footer */
        footer {
            background-color: var(--primary-blue);
            color: #d1d1e0;
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    <main>@yield('content')</main>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>