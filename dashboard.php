<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Link Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(120deg, #2c3e50, #f0f0f0);
        }
        h1 {
            font-size: 2rem;
            color: white;
            margin-bottom: 20px;
            text-transform: uppercase;
            animation: fadeIn 2s ease-in-out forwards;
        }
        .dashboard-container {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeInUp 2s ease-in-out forwards;
        }
        .dashboard-container h2 {
            font-size: 1.8rem;
            color: #2c3e50;
        }
        .dashboard-container p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 30px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 25px;
            background-color: #2c3e50;
            color: white;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #34495e;
        }
        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .card {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 200px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card h3 {
            font-size: 1.2rem;
            color: #2c3e50;
        }
        .card p {
            font-size: 1rem;
            color: #555;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <h1>Welcome to Dashboard</h1>

    <div class="dashboard-container">
        <h2>Admin Panel</h2>
        <p>Manage your application with ease</p>

        <a href="#" class="btn">Go to Profile</a>

        <div class="card-container">
            <!-- Card 1: Data Pendakian -->
            <div class="card">
                <h3>Data Pendakian</h3>
                <p>Jumlah Pendaki: 250</p>
                <p>Gunung Aktif: 10</p>
            </div>

            <!-- Card 2: Event Mendatang -->
            <div class="card">
                <h3>Event Mendatang</h3>
                <p>Pendakian Bromo</p>
                <p>25 Desember 2024</p>
            </div>

            <!-- Card 3: Statistik User -->
            <div class="card">
                <h3>Statistik User</h3>
                <p>Pengguna Terdaftar: 500</p>
                <p>Pengguna Aktif: 300</p>
            </div>
        </div>
    </div>

</body>
</html>
