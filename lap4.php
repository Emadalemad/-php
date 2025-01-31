
<?php
// كتابة في ملف
$file = fopen("test.txt", "w");
fwrite($file, "Hello from PHP on Raspberry Pi!");
fclose($file);

// قراءة الملف
$file = fopen("test.txt", "r");
echo fread($file, filesize("test.txt"));
fclose($file);
?>

تنفيذ Python Script من PHP على Raspberry Pi

<?php
$output = shell_exec("python3 /home/pi/script.py");
echo "Output from Python: " . $output;
?>
//
التعامل مع الملفات في Raspberry Pi (باستخدام PHP و Python مع Pi 6)

قراءة وكتابة الملفات في 
//
