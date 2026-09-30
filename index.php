<?php

// ===============================
// DATA PRODUK
// ===============================

$produk = [
    [
        "nama" => "Keyboard Mechanical",
        "kategori" => "Keyboard",
        "harga" => 350000,
        "stok" => 10
    ],
    [
        "nama" => "Mouse Wireless",
        "kategori" => "Mouse",
        "harga" => 150000,
        "stok" => 8
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "Audio",
        "harga" => 275000,
        "stok" => 0
    ],
    [
        "nama" => "USB Flashdisk 64GB",
        "kategori" => "Storage",
        "harga" => 85000,
        "stok" => 15
    ],
    [
        "nama" => "Webcam HD",
        "kategori" => "Kamera",
        "harga" => 220000,
        "stok" => 5
    ],
    [
        "nama" => "Laptop Stand",
        "kategori" => "Aksesoris",
        "harga" => 180000,
        "stok" => 0
    ]
];

// Menghitung jumlah produk
$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Cia Store - Katalog Produk</title>


    <!-- ===============================
         CSS
    =============================== -->

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fb;
            color: #172554;
        }


        /* ===============================
           NAVBAR
        =============================== */

        .navbar {
            background-color: #17243b;
            color: white;
            padding: 20px 8%;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            gap: 30px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .menu a:hover {
            color: #60a5fa;
        }


        /* ===============================
           HERO
        =============================== */

        .hero {
            background: linear-gradient(
                135deg,
                #dbeafe,
                #eff6ff
            );

            padding: 80px 8%;

            display: flex;
            justify-content: space-between;
            align-items: center;

            min-height: 380px;
        }

        .hero-text {
            max-width: 600px;
        }

        .hero h2 {
            font-size: 45px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            color: #475569;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .hero-button {
            display: inline-block;

            background-color: #2563eb;
            color: white;

            padding: 14px 25px;

            border-radius: 8px;

            text-decoration: none;
            font-weight: bold;
        }

        .hero-button:hover {
            background-color: #1d4ed8;
        }

        .hero-icon {
            font-size: 130px;
        }


        /* ===============================
           INFORMASI PRODUK
        =============================== */

        .info {
            text-align: center;
            padding: 50px 20px 30px;
        }

        .info h2 {
            font-size: 35px;
            margin-bottom: 12px;
        }

        .info p {
            color: #64748b;
            font-size: 18px;
        }

        .jumlah {
            color: #2563eb;
            font-size: 25px;
            font-weight: bold;
        }


        /* ===============================
           KATALOG
        =============================== */

        .catalog {
            padding: 20px 8% 70px;
        }

        .product-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;
        }


        /* ===============================
           CARD PRODUK
        =============================== */

        .card {
            background-color: white;

            border-radius: 15px;

            padding: 25px;

            box-shadow:
                0 5px 20px
                rgba(0, 0, 0, 0.08);

            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            font-size: 21px;
            margin-bottom: 12px;
        }


        /* ===============================
           ICON
        =============================== */

        .product-icon {
            height: 150px;

            background-color: #eff6ff;

            border-radius: 10px;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 70px;

            margin-bottom: 18px;
        }


        /* ===============================
           KATEGORI
        =============================== */

        .category {
            display: inline-block;

            background-color: #dbeafe;
            color: #2563eb;

            padding: 6px 12px;

            border-radius: 20px;

            font-size: 13px;

            margin-bottom: 12px;
        }


        /* ===============================
           HARGA
        =============================== */

        .price {
            font-size: 21px;
            font-weight: bold;

            margin-bottom: 10px;
        }


        /* ===============================
           STOK
        =============================== */

        .stock {
            color: #64748b;
            margin-bottom: 12px;
        }

        .available {
            color: #16a34a;

            font-weight: bold;

            margin-bottom: 15px;
        }

        .sold-out {
            color: #dc2626;

            font-weight: bold;

            margin-bottom: 15px;
        }


        /* ===============================
           BUTTON
        =============================== */

        .buy-button {
            width: 100%;

            padding: 13px;

            border: none;

            border-radius: 8px;

            background-color: #2563eb;
            color: white;

            font-size: 15px;
            font-weight: bold;

            cursor: pointer;
        }

        .buy-button:hover {
            background-color: #1d4ed8;
        }

        .disabled {
            background-color: #b8c0cc;

            cursor: not-allowed;
        }

        .disabled:hover {
            background-color: #b8c0cc;
        }


        /* ===============================
           FOOTER
        =============================== */

        footer {
            background-color: #17243b;

            color: white;

            text-align: center;

            padding: 25px;
        }


        /* ===============================
           RESPONSIVE
        =============================== */

        @media (max-width: 900px) {

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero h2 {
                font-size: 35px;
            }

            .hero-icon {
                font-size: 100px;
            }
        }


        @media (max-width: 600px) {

            .navbar {
                flex-direction: column;

                gap: 15px;
            }

            .hero {
                flex-direction: column;

                text-align: center;

                gap: 30px;
            }

            .hero h2 {
                font-size: 30px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .hero-icon {
                font-size: 80px;
            }
        }

    </style>

</head>


<body>


    <!-- ===============================
         NAVBAR
    =============================== -->

    <header>

        <nav class="navbar">

            <div class="logo">
                🛍️ Cia Store
            </div>

            <div class="menu">

                <a href="#home">
                    Home
                </a>

                <a href="#produk">
                    Produk
                </a>

            </div>

        </nav>

    </header>



    <!-- ===============================
         HERO
    =============================== -->

    <section class="hero" id="home">

        <div class="hero-text">

            <h2>
                Selamat Datang di Cia Store
            </h2>

            <p>
                Temukan berbagai perangkat dan
                aksesoris teknologi untuk kebutuhanmu.
            </p>

            <a href="#produk"
               class="hero-button">

                Lihat Produk →

            </a>

        </div>

        <div class="hero-icon">
            💻 🎧
        </div>

    </section>



    <!-- ===============================
         INFORMASI JUMLAH PRODUK
    =============================== -->

    <section class="info">

        <h2>
            Katalog Produk
        </h2>

        <p>

            Tersedia

            <span class="jumlah">
                <?= $jumlahProduk ?>
            </span>

            produk di Cia Store.

        </p>

    </section>



    <!-- ===============================
         KATALOG PRODUK
    =============================== -->

    <section class="catalog" id="produk">

        <div class="product-grid">


            <?php foreach ($produk as $item): ?>

                <div class="card">


                    <!-- Icon -->

                    <div class="product-icon">

                        <?php
                        if ($item["kategori"] == "Keyboard") {
                            echo "⌨️";
                        } elseif ($item["kategori"] == "Mouse") {
                            echo "🖱️";
                        } elseif ($item["kategori"] == "Audio") {
                            echo "🎧";
                        } elseif ($item["kategori"] == "Storage") {
                            echo "💾";
                        } elseif ($item["kategori"] == "Kamera") {
                            echo "📷";
                        } else {
                            echo "💻";
                        }
                        ?>

                    </div>


                    <!-- Kategori -->

                    <span class="category">

                        <?= $item["kategori"] ?>

                    </span>


                    <!-- Nama -->

                    <h3>

                        <?= $item["nama"] ?>

                    </h3>


                    <!-- Harga -->

                    <p class="price">

                        Rp
                        <?= number_format(
                            $item["harga"],
                            0,
                            ',',
                            '.'
                        ) ?>

                    </p>


                    <!-- Stok -->

                    <p class="stock">

                        Stok:
                        <?= $item["stok"] ?>

                    </p>


                    <!-- Status Stok -->

                    <?php if ($item["stok"] > 0): ?>

                        <p class="available">

                            ● Tersedia

                        </p>

                        <button class="buy-button">

                            Beli Sekarang

                        </button>

                    <?php else: ?>

                        <p class="sold-out">

                            ● Stok Habis

                        </p>

                        <button
                            class="buy-button disabled"
                            disabled>

                            Stok Habis

                        </button>

                    <?php endif; ?>


                </div>

            <?php endforeach; ?>


        </div>

    </section>



    <!-- ===============================
         FOOTER
    =============================== -->

    <footer>

        <p>
            &copy; 2026 Cia Store.
            All Rights Reserved.
        </p>

    </footer>


</body>

</html>
```
