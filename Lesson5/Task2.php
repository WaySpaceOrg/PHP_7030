<?php
$name = "สมชาย";
$age = 30;
$gpa = 3.75;
$active = true;
$note = null;

define("PI", 3.14159);
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ตัวแปรและชนิดข้อมูลใน PHP</title>
    <style>
        :root {
            font-family: Arial, sans-serif;
            color: #171717;
            background: #f7f0dc;
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 32px 20px;
        }

        main {
            width: min(100%, 760px);
            margin: 0 auto;
        }

        .card {
            margin-top: 20px;
            padding: 24px;
            border: 4px solid #171717;
            background: #fffdf5;
            box-shadow: 8px 8px 0 #171717;
        }

        h1,
        h2 {
            margin-top: 0;
        }

        h1 {
            display: inline-block;
            padding: 12px 16px;
            border: 3px solid #171717;
            background: #ffe15a;
        }

        ul {
            padding-left: 24px;
            line-height: 1.8;
        }

        code,
        pre {
            font-family: monospace;
        }

        pre {
            overflow-x: auto;
            padding: 16px;
            border: 3px solid #171717;
            background: #d7edff;
            line-height: 1.7;
        }
    </style>
</head>
<body>
    <main>
        <h1>ตัวแปรใน PHP</h1>
        <section class="card">
            <p>ตัวแปร PHP ขึ้นต้นด้วย <code>$</code> และชื่อตัวแปรแยกตัวพิมพ์ใหญ่-เล็ก</p>
            <h2>ชนิดข้อมูลหลัก</h2>
            <ul>
                <li><strong>String:</strong> ข้อความ เช่น <code>"ข้อความ"</code> หรือ <code>'ข้อความ'</code></li>
                <li><strong>Integer:</strong> จำนวนเต็ม เช่น <code>42</code> หรือ <code>-10</code></li>
                <li><strong>Float:</strong> จำนวนทศนิยม เช่น <code>3.14</code></li>
                <li><strong>Boolean:</strong> <code>true</code> หรือ <code>false</code></li>
                <li><strong>NULL:</strong> ค่าที่ไม่มีข้อมูล</li>
            </ul>
        </section>

        <section class="card">
            <h2>ตรวจชนิดข้อมูลด้วย gettype()</h2>
            <pre><?php
echo '$name: ' . gettype($name) . "\n";
echo '$age: ' . gettype($age) . "\n";
echo '$gpa: ' . gettype($gpa) . "\n";
echo '$active: ' . gettype($active) . "\n";
echo '$note: ' . gettype($note);
?></pre>
        </section>

        <section class="card">
            <h2>ดูค่าพร้อมชนิดข้อมูลด้วย var_dump()</h2>
            <pre><?php var_dump($name, $age, $gpa, $active, $note); ?></pre>
        </section>

        <section class="card">
            <h2>String interpolation</h2>
            <p><?php echo "ชื่อ: $name อายุ: $age ปี"; ?></p>
        </section>

        <section class="card">
            <h2>ค่าคงที่</h2>
            <p>PI = <?php echo PI; ?></p>
        </section>
    </main>
</body>
</html>
