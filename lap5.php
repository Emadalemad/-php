

//بحث حول الدوال السحرية في PHP

الدوال السحرية هي دوال خاصة في PHP تبدأ بـ  وتُستخدم للتحكم في سلوك الكائنات.

أهم الدوال السحرية:

construct() – يتم استدعاؤها عند إنشاء كائن.

destruct() – يتم استدعاؤها عند حذف الكائن.

get($property) – يتم استدعاؤها عند محاولة الوصول إلى خاصية غير موجودة.

set($property, $value) – يتم استدعاؤها عند تعيين قيمة لخاصية غير موجودة.

toString() – يتم استدعاؤها عند طباعة الكائن كسلسلة نصية.


كود توضيحي://

<?php
class MagicExample {
    private $data = [];

    public function set($name, $value) {
        echo "Setting '$name' to '$value'<br>";
        $this->data[$name] = $value;
    }

    public function get($name) {
        echo "Getting '$name'<br>";
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }

    public function toString() {
        return "MagicExample Object";
    }
}

$obj = new MagicExample();
$obj->name = "John Doe"; // يستخدم set()
echo $obj->name; // يستخدم get()
echo $obj; // يستخدم toString()
?>

