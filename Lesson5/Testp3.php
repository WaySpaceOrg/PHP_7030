<?php
ob_start();
$name   = "สมชาย";       // String
$age    = 30;              // Integer
$gpa    = 3.75;            // Float
$active = true;            // Boolean
$note   = null;            // NULL

echo gettype($name);       // string
var_dump($age);            // int(30)

// String interpolation (ใส่ตัวแปรใน "")
echo "ชื่อ: $name อายุ: $age ปี";

// Constants
define("PI", 3.14159);
echo PI;
$output = ob_get_clean();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 3 · ตัวแปรใน PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="lesson">
        <a class="back" href="index.html">← กลับ Lesson 5</a>
        <header class="hero">
            <span class="tag">TASK 03 · PHP</span>
            <h1>ตัวแปรและชนิดข้อมูล</h1>
            <p>ตัวแปรขึ้นต้นด้วย <code>$</code> และชื่อตัวแปรแยกตัวพิมพ์ใหญ่-เล็ก</p>
        </header>

        <section class="panel">
            <h2>ผลลัพธ์จาก PHP</h2>
            <pre class="output"><?= htmlspecialchars($output, ENT_QUOTES, "UTF-8") ?></pre>
        </section>
    </main>
</body>
</html>
