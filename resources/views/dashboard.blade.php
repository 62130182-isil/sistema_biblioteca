<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Biblioteca</title>
</head>
<body style="font-family:Arial; padding:30px; background:#f5f5f5;">
    <h1>Dashboard Biblioteca</h1>
    
    <div style="display:flex; gap:20px; margin-top:20px;">
        <div style="background:white; padding:20px; border-radius:8px; flex:1; text-align:center; box-shadow:0 2px 4px rgba(0,0,0,0.1);">
            <p>Total Libros</p>
            <h2 style="color:#007bff; font-size:40px;">{{ $totalLibros }}</h2>
        </div>
        <div style="background:white; padding:20px; border-radius:8px; flex:1; text-align:center; box-shadow:0 2px 4px rgba(0,0,0,0.1);">
            <p>Total Estudiantes</p>
            <h2 style="color:#28a745; font-size:40px;">{{ $totalEstudiantes }}</h2>
        </div>
        <div style="background:white; padding:20px; border-radius:8px; flex:1; text-align:center; box-shadow:0 2px 4px rgba(0,0,0,0.1);">
            <p>Total Categorías</p>
            <h2 style="color:#ffc107; font-size:40px;">{{ $totalCategorias }}</h2>
        </div>
    </div>
</body>
</html>