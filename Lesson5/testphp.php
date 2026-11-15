<?php
ob_start();
// แสดงผลด้วย echo
echo "สวัสดีโลก!";
echo "<h1>ยินดีต้อนรับ</h1>";

// ใช้ . เชื่อมข้อความ
$name = "สมชาย";
echo "สวัสดี " . $name . "!";
$output = ob_get_clean();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 1 · แสดงผลด้วย PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="lesson">
        <a class="back" href="index.html">← กลับ Lesson 5</a>
        <header class="hero">
            <span class="tag">TASK 01 · PHP</span>
            <h1>แสดงผลด้วย PHP</h1>
            <p>ทดลอง echo การเชื่อมข้อความ และ short echo tag</p>
        </header>
        <section class="panel">
            <h2>ผลลัพธ์</h2>
            <div class="output"><?= $output ?></div>
            <p class="message">ชื่อของฉันคือ <?= $name ?></p>
        </section>
    </main>
</body>
</html>
