<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolusi PL Dashboard</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #1f2937;
        }

        .container {
            width: min(900px, 90%);
            margin: 0 auto;
            padding: 60px 0;
        }

        .hero {
            margin-bottom: 30px;
        }

        .hero h1 {
            margin-bottom: 8px;
            font-size: 36px;
        }

        .hero p {
            color: #6b7280;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .card {
            padding: 24px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .card h2 {
            margin-top: 0;
            font-size: 20px;
        }

        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            background: #dcfce7;
            color: #166534;
            font-size: 14px;
            font-weight: bold;
        }

        @media (max-width: 600px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <main class="container">
        <section class="hero">
            <h1>Evolusi Pemrograman Lanjut</h1>
            <p>Project Dashboard</p>
        </section>

        <section class="grid">
            <div class="card">
                <h2>Informasi Mahasiswa</h2>
                <p><strong>Nama:</strong> Franz Eric</p>
                <p><strong>NIM:</strong> 24-542626-SV-25066</p>
                <p>
                    <strong>Status:</strong>
                    <span class="status">Active</span>
                </p>
            </div>

            <div class="card">
                <h2>Teknologi</h2>
                <p>Laravel 13</p>
                <p>Blade Template Engine</p>
                <p>Vite</p>
            </div>
        </section>
    </main>
</body>
</html>