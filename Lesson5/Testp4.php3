<?php
$a = 10;
$b = 3;

$email = "  Hello@Email.COM  ";
$email = trim(strtolower($email));  // hello@email.com

$text = "Hello World";

$price = 1234567.891;
$area = 23.1;
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 4 · ตัวดำเนินการและ String</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="lesson">
        <a class="back" href="index.html">← กลับ Lesson 5</a>
        <header class="hero">
            <span class="tag">TASK 04 · PHP</span>
            <h1>ตัวดำเนินการและ String</h1>
            <p>ทดลองคำนวณตัวเลข จัดการข้อความ และจัดรูปแบบตัวเลขก่อนแสดงผล</p>
        </header>

        <section class="result-grid">
            <article class="result-card">
                <h2>บวก · <?= $a ?> + <?= $b ?></h2>
                <p class="result"><?php echo $a + $b; // 13 ?></p>
            </article>
            <article class="result-card">
                <h2>หารเอาเศษ · <?= $a ?> % <?= $b ?></h2>
                <p class="result"><?php echo $a % $b; // 1 ?></p>
            </article>
            <article class="result-card">
                <h2>ยกกำลัง · <?= $a ?> ** <?= $b ?></h2>
                <p class="result"><?php echo $a ** $b; // 1000 ?></p>
            </article>
            <article class="result-card">
                <h2>จัดรูปแบบอีเมล</h2>
                <p class="result"><?= htmlspecialchars($email, ENT_QUOTES, "UTF-8") ?></p>
            </article>
            <article class="result-card">
                <h2>ฟังก์ชัน String</h2>
                <pre><?php
echo "strlen: " . strlen($text) . "\n";
echo "substr: " . substr($text, 0, 5) . "\n";
echo "str_replace: " . str_replace("World", "PHP", $text) . "\n";
echo "strpos: " . strpos($text, "World");
?></pre>
            </article>
            <article class="result-card">
                <h2>จัดรูปแบบราคา</h2>
                <pre><?php
echo number_format($price) . "\n";       // 1,234,568
echo number_format($price, 2);
?></pre>
            </article>
            <article class="result-card">
                <h2>แสดงทศนิยมให้ครบ 2 ตำแหน่ง</h2>
                <pre><?php
echo $area . "\n";                       // 23.1
echo number_format($area, 2);            // 23.10
?></pre>
            </article>
        </section>
    </main>
</body>
</html>
