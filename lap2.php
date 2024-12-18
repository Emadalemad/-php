<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أمثلة على دوال المصفوفات والسلاسل النصية</title>
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
        <h1>أمثلة على دوال المصفوفات والسلاسل النصية</h1>

        <h2>دوال المصفوفات</h2>
        <ul>
            <li>
                <strong>array_push()</strong>: لإضافة عناصر إلى نهاية المصفوفة.
                <pre>
                    $array = array(1, 2, 3);
                    array_push($array, 4);
                    print_r($array); // الناتج: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
                </pre>
            </li>
            <li>
                <strong>array_pop()</strong>: لإزالة العنصر الأخير من المصفوفة.
                <pre>
                    $array = array(1, 2, 3);
                    array_pop($array);
                    print_r($array); // الناتج: Array ( [0] => 1 [1] => 2 )
                </pre>
            </li>
            <li>
                <strong>array_merge()</strong>: لدمج مصفوفتين.
                <pre>
                    $array1 = array(1, 2);
                    $array2 = array(3, 4);
                    $merged = array_merge($array1, $array2);
                    print_r($merged); // الناتج: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
                </pre>
            </li>
            <li>
                <strong>count()</strong>: لحساب عدد عناصر المصفوفة.
                <pre>
                    $array = array(1, 2, 3);
                    echo count($array); // الناتج: 3
                </pre>
            </li>
        </ul>

        <h2>دوال السلاسل النصية</h2>
        <ul>
            <li>
                <strong>strlen()</strong>: لحساب طول السلسلة النصية.
                <pre>
                    $string = "Hello, World!";
                    echo strlen($string); // الناتج: 13
                </pre>
            </li>
            <li>
                <strong>str_replace()</strong>: لاستبدال جزء من السلسلة النصية.
                <pre>
                    $string = "Hello, World!";
                    $newString = str_replace("World", "PHP", $string);
                    echo $newString; // الناتج: Hello, PHP!
                </pre>
            </li>
            <li>
                <strong>substr()</strong>: للحصول على جزء من السلسلة النصية.
                <pre>
                    $string = "Hello, World!";
                    echo substr($string, 7, 5); // الناتج: World
                </pre>
            </li>
            <li>
                <strong>strpos()</strong>: للبحث عن موقع جزء من السلسلة النصية.
                <pre>
                    $string = "Hello, World!";
                    echo strpos($string, "World"); // الناتج: 7
                </pre>
            </li>
        </ul>
    </div>
</body>
</html>
