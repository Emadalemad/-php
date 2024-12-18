<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أمثلة GET و POST في PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #555;
        }
        pre {
            background: #eee;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>أمثلة GET و POST في PHP</h1>

        <h2>طريقة GET</h2>
        <p>تستخدم طريقة GET لإرسال البيانات عبر عنوان URL. البيانات تظهر في شريط العنوان.</p>
        <form method="GET" action="">
            <label for="name">اسمك:</label>
            <input type="text" name="name" id="name" required>
            <input type="submit" value="إرسال">
        </form>

        <?php
        if (isset($_GET['name'])) {
            $name = htmlspecialchars($_GET['name']);
            echo "<h3>مرحبا، $name!</h3>";
        }
        ?>

        <h2>طريقة POST</h2>
        <p>تستخدم طريقة POST لإرسال البيانات في جسم الطلب. البيانات لا تظهر في شريط العنوان.</p>
        <form method="POST" action="">
            <label for="email">بريدك الإلكتروني:</label>
            <input type="email" name="email" id="email" required>
            <input type="submit" value="إرسال">
        </form>

        <?php
        if (isset($_POST['email'])) {
            $email = htmlspecialchars($_POST['email']);
            echo "<h3>تم إرسال بريدك الإلكتروني: $email</h3>";
        }
        ?>

        <h2>الفرق بين GET و POST</h2>
        <ul>
            <li><strong>GET:</strong> البيانات تظهر في عنوان URL، مما يجعلها غير مناسبة لإرسال معلومات حساسة.</li>
            <li><strong>POST:</strong> البيانات تُرسل في جسم الطلب، مما يجعلها أكثر أمانًا للاستخدام في إرسال معلومات حساسة مثل كلمات السر.</li>
            <li><strong>طول البيانات:</strong> GET عادةً ما يكون له حدود في طول البيانات (حوالي 2000 حرف)، بينما POST يمكنه إرسال كميات أكبر من البيانات.</li>
            <li><strong>الاستخدام:</strong> يمكن استخدام GET لاسترجاع البيانات، بينما يُفضل استخدام POST لإرسال البيانات وتحديثها.</li>
        </ul>
    </div>
</body>
</html>
