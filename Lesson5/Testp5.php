<?php
$item  = "ลาเต้";
$price = 45;
$qty   = 3;
$total = $price * $qty;          // PHP คิดบน server
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 5 · PHP และ JavaScript</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="lesson">
        <a class="back" href="index.html">← กลับ Lesson 5</a>
        <header class="hero">
            <span class="tag">TASK 05 · PHP + JAVASCRIPT</span>
            <h1>เพิ่มทิปให้รายการสั่งซื้อ</h1>
            <p>PHP คำนวณราคารวมบน server ส่วน JavaScript เพิ่มทิปเมื่อกดปุ่ม</p>
        </header>

        <section class="panel">
            <h2>รายการสั่งซื้อ</h2>
            <p><?= htmlspecialchars($item, ENT_QUOTES, "UTF-8") ?> x <?= $qty ?></p>
            <p class="message">รวม <?= $total ?> บาท</p>
            <p><button id="tip" type="button">เพิ่มทิป 10%</button></p>
            <p id="grand" role="status" aria-live="polite"></p>
        </section>
    </main>

    <script>
        // PHP ส่งค่ารวมมาให้ JavaScript ตอนสร้างหน้า
        const total = <?= $total ?>;

        document.getElementById("tip").addEventListener("click", function () {
            document.getElementById("grand").textContent =
                "รวมทิป " + (total * 1.1).toFixed(2) + " บาท";
        });
    </script>
</body>
</html>
