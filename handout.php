<?php

// نعریف متغییر

$x = 6;
$y = 5;

// عملگر ها
echo $x + $y;
echo $x - $y;
echo $x * $y;
echo $x / $y;
echo $x % $y;

// یک عدد بالا یا پایین رفتن
echo ++$x;
echo --$x;
// یک عدد بالا یا پایین رفتن
$x++;
$x--;

$x = $x + $y;
$x += $y;
$x -= $y;
$x *= $y;
$x /= $y;
$x %= $y;
echo $x;

echo 100 + (10 - 50) / 5 * 1;

// اطلاعات متغییر را به ما میدهد
$name = "hadi";
var_dump($name);
gettype($name);

$x = "5";

//----------------------------------------------------------------------

var_dump($x);

// تبدیل استرینگ به عدد
var_dump((int)$x);
var_dump(intval($x));

// وقتی این را به عدد تبدیل میکنیم صفر میشود
$y = "ali";
var_dump((int)$y);

// تبدیل اینتیجر به فلوت و برعکس
$z = 12.8;
var_dump( (int)$z );
var_dump( (float)$z );
var_dump( floatval($z) );

// تبدیل عدد به استرینگ
$n = 10;
var_dump( (string)$n );

// چک میکند آیا این عدد هست یا نه
$s = "ali";
var_dump( is_int($s) );
var_dump( is_float($s) );
var_dump( is_numeric($s) ); // فقط اگر استرینگی باشد که عدد نداشته باشد فالس میدهد

//--------------------------------------------------------------------------

//   --- Math ---

echo abs(-200); //=> 200  قدر مطلق
echo pow(2,3);  // توان  
echo sqrt(16); //  جذر

echo max(10, 4, 6, 18); // ماکسیمیم
echo min(10, 4, 6, 18); // مینیمم

echo round(5.8); // => 6  اگر بزرگتر از 0.5 باشد به عدد بالاتر 
echo round(5.3); // => 5 اگر کوچکتر باشد خودش

echo ceil(6.1); // => 7 به عدد بالاتر تبدیل میشود
echo floor(6.9); // => به خودش تبدیل میشود

echo rand(0, 10); // => به صورت شانسی یک عدد انتخاب میکند

//--------------------------------------------------------------------------

//   --- String ---

$firstName = 'ali';
$lastName = "sheikh";

echo 'my name is $firstName $lastName';

// برای اینکه متغییر را داخل استرینگ استفاده کنیم باید استرینگ را داخل "دابل کتیشن" بگذاریم
echo "my name is $firstName $lastName";

$s = "hello";

// شکل های دیگر چسباندن متغییر ها به استرینگ
echo "$s world";
echo "{$s}world";  //     =>     برای زمانی که نخواهیم فاصله ای بدیم
echo $s . "world";  //    =>       با استفده از دات میشود چسباند  
echo $s . ' ' . "world";  
echo $s . " world";

//--------------------------------------------------------------------------

$str = "webprog.io";

echo $str[2];  // b
$str[2] = 'T';  // weTprog.io

$str = "hello world";

echo str_word_count($str); // 2 => دو تا کلمه داریم

echo strlen($str); // 11  =>  تعداد حروف را میدهد

echo substr($str, 7);  // orld  => از ایندکس هفت ، کلمه را برمیگردونه

echo substr($str, 6, 3); // wor  =>  از ایندکس شش ، سه تا حرف بعدی را فقط برگردون

echo strpos($str, 'o');  // 4  => ایندکس حرف را میدهد

echo strpos($str, 'o', 5);  //  7  => ایندکس حرف را از ایندکس شماره پنج به بعد جستجو میکند و میدهد  

echo stripos($str, 'O');  // 4  =>  وقتی از "آی" استفده کنیم حروف کوچک و بزرگ مهم نیس و همون را ایندکسش را برمیگرداند

echo stripos($str, 'O', 5); // 7  => مانند خط شماره 117 با اینکه دیگر حروف کوچک بزرگ مهم نیس 

echo strrpos($str, 'o'); // 7 =>  میاید از انتها دنبال حرف مورد نظر ما میگردد

echo strripos($str, 'O');  //  7  => از انتها جستجو میکند با این تفاوت که حروف کوچک و بزرگ مهم نیس

$str = "hello world";

echo str_replace("world", "webprog", $str); // hello webprog => بیا و به جای کلمه ورد ، کلمه وب پروگ را جایگزین کن

var_dump( str_contains($str, "orld") ); // true =>  چک کن ببین آیا این کلمه در استرینگ من هست یا خیر ، مقدار "ترو" یا "فالس" برمیگردوند

var_dump( str_contains($str, "er") ); // false  => چک میکند

var_dump( str_starts_with($str, 'h') ); // true  => چک میکند آیا استرینگ با این جرف شروع شده یا نشده

var_dump( str_ends_with($str, 'd') ); // true  => چک کن آیا استرینگ با این جرف به پایان میرسد یا خیر


echo strtoupper($str); // HELLO WORDL  =>  همه حرف هارا به بزرگ تبدیل میکند 

echo strtolower($str); // hello world  => همه حرف هارا به کوچک تبدیل میکند 

echo ucwords($str); // Hello World  =>  اول همه کلمات را بزرگ میکند

echo ucfirst($str); // Hello world  =>  فقط اول کلمه اول را بزرگ میکند

echo lcfirst($str); // hello world  =>  حرف اول کلمه را کوچک میکند

$amount = 1000000;

echo number_format($amount);  // 1,000,000  => سه رقم سه رقم جدا میکند


//--------------------------------------------------------------------------

//   --- Array ---


$numbers = array(1, 2, 3, 4, 5);  // روش اول تعریف آرایه

echo "<pre>";
print_r($numbers); // این شکل خروجی مخصوص آرایه ها هستن که همراه با 

echo $numbers[2]; // 3 => مقدار ایندکس 2 را میدهد

$numbers[1] = "two"; // مقدار ایندکس 1 را برابر توو بگذار

echo "<pre>";
print_r($numbers); 



$numbers2 = [5, 7, 3, 6];  // روش دوم تریف آرایه

echo "<pre>";
print_r($numbers2);

//--------------------------------------------------------------------------

//   --- Array Function ---

$names = ["ali", "sara", "liam"];

array_push($names, "nima"); //  اضافه کردن مقدار به آخر آرایه
array_unshift($names, "zahra"); //   اضافه کردن مقدار به اول آرایه
array_pop($names); // حذف آخرین مقدار آرایه
array_shift($names); // حذف اولین مقدار از آرایه

var_dump( in_array("alireza", $names) ); // چک کن ببین آیا این مقدار در آرایه هست یا خیر
var_dump( array_search("liam", $names) );  // مانند دستور بالا با این تفاوت که ایندکس آن مقدار برمیگرداند 

sort($names);  // سورت به ترتیب حروف الفبا
rsort($names);  // سورت به صورت برعکس حروف الفبا
 
//--------------------------------------------------------------------------

$names = "ali, nima, sara";

$arr = explode(',', $names);  // تبدیل استرینگ به آرایه با جدا کردن کاما

$letters = ["a", "b", "c", "d"];

$str = implode('-', $letters); // تبدیل آرایه به استرینگ
$str = implode(' ', $letters);
$str = implode('_', $letters);
echo $str;


$num1 = [1, 2, 3];
$num2 = [9, 8, 6];

$result = array_merge($num1, $num2);  // ادغام دو آرایه



$num1 = [1, 2, 3, 4, 5];
$num2 = [1, 4, 6, 8, 10];

$result = array_diff($num1, $num2); // 2 3 5  => شباهت هارا جدا میکند و فقط مقدار هایی که شبیه نیستن را برمیگرداند
$result = array_diff_assoc($num1, $num2); // 2 3 4 5  => ایندکس ها باید شبیه هم باشن تا جدا بشن، 4 چون ایندکس سه بود جدا نشد

//--------------------------------------------------------------------------

//  ---  آرایه های انجمنی  ---
// آرایه ای که کلید هایش را خودمون معرفی میکنیم 

$number = [6, 7, 5];

$user = [
    'name' => 'ali',
    'age' => 25
];


echo $user['name'];
$user['age'] = 30;
$user['city'] = "test";

$result = array_values($user); // فقط ولیو های آرایه را میدهد
$result = array_keys($user);  // فقط کلید های آرایه را میدهد

//--------------------------------------------------------------------------

// عملگر های مقایسه ای

// ==, !=, ===, !==, >, >=, <, <=, <=>

$x = 3;
$y = 6;

var_dump( $x != $y );
var_dump( $x === $y );

var_dump( $x >= $y );
var_dump( $x < $y );

var_dump( $x <=> $y );  // => 
// اگر مساوی بود => 0
// اگر سمت چپ بزرگتر بود => 1
// اگر سمت راست بزرگتر بود => -1

//--------------------------------------------------------------------------

// عملگر های منطقی 

// && , and
// || , or
// ^ , xor
// ! , not

$x = false;
$y = true;

// var_dump( $x && $y );
// var_dump( $x || $y );
// var_dump( $x ^ $y );
var_dump( !$x );

//--------------------------------------------------------------------------

// if and else :

$x = 5;

if ($x < 3) {
    echo "IF";
} elseif ($x == 4) {
    echo "ELSE IF";
} elseif ($x == 5) {
    echo "X = 5";
} else {
    echo "ELSE";
}

// if in html 

/*
<?php if (false) : ?>
    <h1>webprog.io</h1>
<?php elseif (true) : ?>
    <h1>webprog</h1>
<?php else : ?>
    <h1>hello world</h1>
<?php endif ?>
*/

//--------------------------------------------------------------------------

// --- Ternary Opertory ---

$age = 18;
$result = $age < 20 ? "young" : "old";

// --- Ternary short form ---

$result = $age ?: "age not set";

// --- Ternary whit null ---

$result = $age ?? "age not set";

//--------------------------------------------------------------------------

// --- Switch & Case ---

$x = 3;

switch ($x) {
    case 1:
        echo "x is 1";
        break;
    case 2:
        echo "x is 2";
        break;
    case 3:
        echo "x is 3";
        break;
    default:
        echo "x is $x";
        break;
}

//--------------------------------------------------------------------------

// --- Match ---

$x = 14; // ===

$match = match ($x) {
    1, 2, 3 => "x is $x",
    4 => "x is 4",
    5 => "x is 5",
    default => "(default) x is $x"
};

echo $match;

//--------------------------------------------------------------------------

// --- For Loop ---

for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";

    for ($j = 0; $j <= 3; $j++) {
        echo $i . '-' . $j . "<br>";
    }
}
// ---
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        echo "Breaking ...";
        break;
    }
    echo $i . "<br>";
}
// ---

for ($i = 1; $i <= 5; $i++) {

    if ($i == 4) {
        echo "skiping ..." . "<br>";
        continue;
    }

    echo $i . "<br>";
}
?>
// ---

<?php for ($i = 1; $i <= 5; $i++) : ?>
    <p><?= $i ?></p>
<?php endfor ?>
<?php
 //--------------------------------------------------------------------------


// --- While & do While

$i = 1;

while ($i <= 9) {
    echo $i . "<br>";

    $j = 0;
    while ($j <= 3) {
        echo $i . '-' . $j . "<br>";

        $j++;
    }

    $i++;
}

$i = 10;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 9);

//--------------------------------------------------------------------------

// --- Foreach ---  for Array

$numbers = [1, 5, 8, 10];
echo count($numbers); // تعداد مقدار های داخل آرایه را به ما میدهد

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . "<br>";
} // بدون foreach

foreach ($numbers as $item) {
    echo $item . "<br>";
}

$numbers = ['a' => 1, 'b' => 5, 'c' => 8, 'd' => 10];

foreach ($numbers as $key => $item) {
    echo $key . "->" . $item . "<br>";
}

?>

<?php foreach ($numbers as $item) : ?>
    <p><?= $item ?></p>
<?php endforeach ?>

<?php

//--------------------------------------------------------------------------

// --- Functions ---

function sayHello($name, $age = 20) {
    echo "hello $name - $age";
}

sayHello("ali", 25);
sayHello("liam");

// ---

function add($x, $y)
{
    return $x + $y;
}

echo add(5, 6);
$result = add(5, 6);

echo $result;

//--------------------------------------------------------------------------

// --- نکته های دیگر توابع ---

// declare(strict_types = 1); // این برای این است که پی اچ پی سخت گیرانه تر عمل کند

// int, boll, float, string, null, array  // میتوانیم این هارا اول توابع بزاریم که فقط این مقدار دریافت کنند

function add1(int|float $x, int $y)
{
    return $x + $y;
}


$result = add1('5', 6);
$result = add1(8, 6);

echo $result;


function sum($x, $y, ...$numbers)
{
    print_r($numbers);
    $z = 0;
    foreach($numbers as $number){
        // $z = $z + $number;
        $z += $number;
    }

    $z = array_sum($numbers);
    
    return $x + $y + $z;
}

echo sum(10, 12, 2, 6, 5);


// این تابع  همان بالایی است به شکل متفاوت
function sum2(...$numbers)
{
    return array_sum($numbers);
}

echo sum2(10, 12, 2, 6, 6);

//--------------------------------------------------------------------------

// --- Csope ---

$x = 100; // global

function demo() {
    global $x;  // برای اینکه از متغییر گلوبال بتوانیم استفاده کنیم باید این کار انجام دهیم

    $y = 50; // local
    echo $x . $y;
}

demo();

echo $y; // error

//--------------------------------------------------------------------------

//  --- Arrow Function & Anonymous Function---

$x = 20;

// its Anonymous Function :
$greet = function ($name) use ($x) {
    // global $x;

    return "hello $name - $x";
};

echo $greet("ali");



$y = 50;

// its Arrow Function :
$greet = fn($name) => "hello $name - $y";

echo $greet("liam");

//--------------------------------------------------------------------------

//  --- انتفال فایل ---

include "./other.php"; //  برای دریافت تابع از یک فایل دیگر
require "./other.php"; //  برای دریافت تابع از یک فایل دیگر

include_once "./other.php"; // برای اینکه فقط یکبار فراخوانی کند
require_once "./other.php"; // برای اینکه فقط یکبار فراخوانی کند

include "test.php";  // فرق با پایینی اینه که ادامه کد را اجرا میکند
require "test.php";  // فرقش با بالایی اینه که ادامه کد را اجرا نمیکند 


example(); // فراخوانی تابع

//--------------------------------------------------------------------------

// دریافت اطلاعات با استفاده از GET

echo "<pre>";
print_r($_GET); // به شکل آرایه ، ورودی هارا دریافت میکند

var_dump(isset($_GET['email'])); // چک میکند آیا ایمیل فرستاده شده است یا خیر

if (isset($_GET['email'])) {
    echo $_GET['email'];
} // اگر ایمیل فرستاده شده بود ، خود ایمیل را نشان بده

if (isset($_GET['send'])) {
    echo $_GET['email'];
} // اگر کل فرم ارسال شده بود ، ایمیل را نشان بده
?>

<!-- "action" مسیر ارسال فرم را با اکشن مشخص میکنیم   -->

<form action="handout.php" method="get">
    <input type="text" name="email" />
    <br>
    <input type="text" name="password" />
    <br>
    <button type="submit" name="send">send</button>
</form>

<?php 
//--------------------------------------------------------------------------

// دریافت اطلاعات با استفاده از POST


if (isset($_POST['send'])) {
    echo $_POST['email'];
} // اگر فرم ارسال شد ، ورودی ایمیل را نشان بده

if (isset($_POST['send'])) {
    echo "<pre>";
    print_r($_POST);
} // اگر فرم ارسال شد ، کل ورودی هارا نشان بده
?>


<form action="index.php" method="post">
    <input type="text" name="email" />
    <br>
    <input type="text" name="password" />
    <br>
    <!-- تکست به صورت معمولی ارسال میشود  -->


    <input type="checkbox" name="php" /> php
    <input type="checkbox" name="laravel" value="LARAVEL" /> laravel
    <br>
    <!-- اگر روی هرکدام کلیک کنی ، به صورت آن یا آف ارسال میشود اما اگر ولیو داشته باشد ، ولیو را برمیگرداند -->


    <input type="radio" name="vue.js" /> Vue.js
    <input type="radio" name="react" value="react" /> React.js
    <br>
    <!-- این هم فقط یکی را برمیگرداند یا آن یا آف برای کسایی که ولیو نداشته باشند ، اما اگر ولیو داشته باشد آن را برمیگرداند -->

    <textarea name="textarea">Webprog.io</textarea>
    <br>
    <!-- خود متن را برمیگرداند -->

    <select name="lang">
        <option value="1">PHP</option>
        <option value="2">JAVA</option>
        <option value="3">Python</option>
    </select>
    <!-- یکی از ولیو هارا برمیگرداند -->

    <select multiple name="lang[]">
        <option value="php">PHP</option>
        <option value="java">JAVA</option>
        <option value="python">Python</option>
    </select>
    <!-- اگر 2 انتخاب داشته باشید، به صورت آرایه ولیو هارا برمیگرداند -->
    
    <br>
    <button type="submit" name="send">send</button>
</form>
<?php

//--------------------------------------------------------------------------

// --- یا اعتبار سنجی Validation  ---


$errors = [];
if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        array_push($errors, "email required");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // این دستور چک میکند آیا ایمیل صحیح است یا خیر
        array_push($errors, "invalid email");
    }

    if (empty($password)) {
        array_push($errors, "password required");
    } elseif(strlen($password) < 5) { // آیا تعداد کارکتر های پسورد از 5 کمتر است ؟
        array_push($errors, "password can not be less 5 char");
    }

    if(empty($errors)){
        echo $email, $password;
    }
}
?>

<div style="color: red">
    <?php foreach ($errors as $error) : ?>
        <p><?= $error ?></p>
    <?php endforeach ?>
</div>

<form action="index.php" method="post">
    <input type="text" name="email" />
    <br>
    <input type="text" name="password" />
    <br>
    <button type="submit" name="send">send</button>
</form>

<?php
//--------------------------------------------------------------------------

// --- Cookie ---

// setcookie(name, value, expire) 
//           تاریخ انقضا ،  ولیو  ،  نام 
// $_COOKIE['name]


setcookie("user", "ali sheikh", time() + 3600);  // ست کردن کوکی

echo "<pre>";
print_r($_COOKIE);

if (isset($_COOKIE['user'])) {
    echo $_COOKIE['user'];
} else {
    echo "cookie is not set";
}


setcookie("user", "ali sheikh", time() - 3600);  

// تایم یک تابع آماده در پی اچ پی که زمان جاری را میفرستد

//--------------------------------------------------------------------------

// --- Session ---

session_start();  // برای اینکه از شسن استفاده کنیم

$_SESSION['id'] = 15; // یک سشن که آیدی برابر 15 
$_SESSION['name'] = 'ali sheikh'; // یک سشن نام برابر علی 

unset($_SESSION['id']); // برای حذف یک قسمت از سشن

session_unset(); // برای پاک کردن کل داده ها از سشن

session_destroy(); // برای حذف کامل خود فایل سشن


// این قسمت برای یک فایل دیگه در پروژه مثل other.php
// در این صفحه شما میتوانی سشن هایی که ذخیره کرده ای را ببینی
session_start(); 

if (isset($_SESSION['id'])) {
    echo $_SESSION['id'];
}
// اتمام این قسمت در یک فایل دیگر

//--------------------------------------------------------------------------

// --- نوشتن در فایل ---

$file = fopen("log.txt", "w"); // باز کردن فایل ، تمام داده هارا پاک میکند و شروع میکند به نوشتن
$file = fopen("log.txt", "a"); // داده هارا پاک نمیکند و ار همان جا به نوشتن ادامه میدهد

fwrite($file, "ali sheikh"); // نحوه وارد کردن داده و نوشتن

fclose($file); // بستن فایل

file_put_contents("log.txt", "php ...", FILE_APPEND); 
// فرایند باز و بسته کردن و نوشتن و اد کردن فایل را هم زمان در یک تابع میتوان انجام داد
// FILE_APPEND : با استفاده ازاین ثابت میتوان اد کرد و داده ها پاک نشون

//--------------------------------------------------------------------------

// --- خواندن از فایل ---

$file = fopen("log.txt", "r"); // باز کردن فایل و خواندن از روش

$content = fread($file, 2); // در تابع خواندن شما اسم فایل میدی و تعداد بایت یا کارکتر که برمیگردانی
$content = fread($file, filesize("log.txt")); // تمام فایل خوانده شد و برگشت داده شد

echo $content;

echo filesize("log.txt"); // این تابع تعداد کارکتر های فایل را برمیگردند مثلا 10 تا

fclose($file); // بستن فایل 

echo file_get_contents("log.txt");
// تمام پروسه باز و بسته کردن و خواندن از فایل را با استفاده از این تابع میتوان انجام داد

//--------------------------------------------------------------------------

// --- کپی ، تغییر نام و حذف یک فایل ---

copy("log.txt", "log_copy.txt");
// برای گپی گرفتن از یک فایل

rename("log_copy.txt", "log_renamed.txt");
// برای تغییر نام یک فایل

unlink("log_renamed.txt");
// برای حذف فایل

//--------------------------------------------------------------------------

// --- ایجاد ، تغییر نام و حذف یک پوشه یا فولدر ---

mkdir("dir");
// ساخت یک پوشه

rename("dir", "dir-renamed");
// تغییر نام یک پوشه

rmdir("dir-renamed");
// حذف یک پوشه

//--------------------------------------------------------------------------


// --- آپلود فایل و تصویر ---

echo "<pre>";
print_r($_FILES);
// برای اینکه این فایل اطلاعاتی مانند اندازه فایل، نوع فایل ، مکان خیره و ... نشام میدهد


if (isset($_FILES['upload'])) {
    $fileName = $_FILES['upload']['name']; // اسم فایل
    $tempName = $_FILES['upload']['tmp_name']; // مکان ذخیره سازی
    $fileSize = $_FILES['upload']['size']; // حجم فایل

    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); // تبدیل نوع فایل به حروف کوچک
    $allowedExt = ['jpg', 'png', 'jpeg'];

    if (!in_array($fileExt, $allowedExt)) { // اگر نوع فایل در آرایه فایل های اجازه داده شده نبست بیا و اجازه نده
        echo "only images allowed";
    } elseif ($fileSize > 2068565) { // اگر حجم فایل بیشتر از 2 مگابایت بود 
        echo "file can not be greater than 2MB";
    } else { // در غیر این صورت آپلود کن در مسیر مشخص در وب سایت یا پروژه
        move_uploaded_file($tempName, "uploads/" . $fileName); // تابع آپلود
    }
}

?>

<!-- ---------- a nother exmaple ------------ -->
<?php
 if (isset($_POST["send"]) && !empty($_FILES["upload"])){
     vardump($_FILES) // خروجی این یک آرایه هست که مشخصات اون فایل را میدهد :
      //  'upload' =>
      //      array (size = 6)
      //        'name' => 'profile.png'  (string)
      //        'full_path' => 'profile.png'   (string)
      //        'type' => image/png     (string)
      //        'tmp_name' => 'C:\windows\Temp\phpcb39.tmp'     (string)
      //        'error' => 0   (int)
      //        'size' => 4047    (int)
 }
 ?>
 


<!-- فرم فایل  -->

<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="upload">
    <br>
    <br>
    <button type="submit" name="send">send</button>
</form>
<?php

//--------------------------------------------------------------------------


// --- PDO ارتباط با دیتابیس به صورت ---

// new PDO(dns, username, password); <= به این شکل باید اتصال پیدا کند
// یک دی ان اس برای دیتابیس مینویسی و بعد یوزرنیمی که براش انتخاب کردی و درهاین پسورد دیتابیس
// new PDO("mysql:host=localhost;dbname=mysql_sandbox;charset=utf8", "root", "");

$connection = new PDO("mysql:host=localhost;dbname=mysql_sandbox;charset=utf8", "root", "");
// اول:   از چه دیتابیسی استفاده میکنی 
// دوم:      از چه هاستی استفاده میکنی 
// سوم:  اسم اون دیتابیسی که ساختی چیه
// (utf8) چهارم: نوشتن کدی که فارسی پشتیبانی کند 

$result = $connection->query("SELECT * FROM users"); // => کوئری مینویسی ، SQL

// این کوئری یا متصل نمیشود و فالس میشود یا استیتمنت برمیگرداند
// query => PDOStatement, false

// متدهای استیتمنت هستن که میتوان باهاش مقادیر در دیتابیس را برگرداند 
// new PDOStatement => 
//     fetch()  -> خواندن یک رکورد از نتیجه بصورت آرایه و رفتن به رکورد بعدی
//     fetchAll() -> خواندن کل رکورد های نتیجه بصورت یک آرایه دوبعدی
//     rowCount() -> تعداد رکورد های خوانده شده یا تحت تاثیر قرار گرفته
//     coulmnCount() -> تعداد فیلد های موجود در هر رکورد از نتیجه

echo "<pre>";
print_r($result->fetch()); // [id:1, name:"ali"] => فقط یکی از دیتا ها را برمیگرداند
print_r($result->fetch(PDO::FETCH_ASSOC)); // ASSOC => یعنی به صورت تیتر های دیتابیس برگردان
print_r($result->fetch(PDO::FETCH_NUM)); // NUM => به صورت عددی 0 و 1 برگردان
print_r($result->fetch(PDO::FETCH_BOTH)); // هم تیتر و هم عدد برگردان


//--------------------------------------------------------------------------


// --- چهار عمل اصلی در دیتابیس CRUD --- 



echo $result->rowCount(); // تعداد دیتاهای داخل دیتابیس 

// وقتی از فورایچ استفاده میکنیم نیازی نیس فتچ کنیم
foreach ($result as $row) {
    echo $row['name'] . "<br>";
}


$result = $connection->query("DELETE FROM users WHERE id = 9"); // برای پاک کردن داده از دیتابیس
// result = 1 ، اینجا ریزالت برابر میش با 1 چون 1 کانکشن انجام شده  
echo $result->rowCount() . " Deleted";


$result = $connection->query("INSERT INTO users (name) VALUES ('ahmad')"); // برای اد کردن داده
// result = 1 ، اینجا ریزالت برابر میش با 1 چون 1 کانکشن انجام شده  
echo $result->rowCount() . " Inserted";


$query = "UPDATE users SET name = 'matin' WHERE id = 10"; // برای آپدیت داده
$result =$connection->query($query);

// result = 1 ، اینجا ریزالت برابر میش با 1 چون 1 کانکشن انجام شده  
echo $result->rowCount() . " Updated";

//--------------------------------------------------------------------------

// --- PDO دستورات آماده ---

$connection = new PDO("mysql:host=localhost;dbname=mysql_sandbox;charset=utf8", "root", "");

$result = $connection->prepare("SELECT * FROM users WHERE id > :id OR name = :name");
$result->execute(['id' => 3, 'name' => 'nima']);

// به جای اینکه از کوئری استفاده کنیم از پره پر استفاده میکنیم و متغییر میدهیم بهش
// به وسیله اکسکیوتد هم میتوان متغییر هارا مقدار بهش بدیم


foreach ($result as $row) {
    echo $row['name'] . "<br>";
}

//--------------------------------------------------------------------------
// --- نحوه کوئری نوشتن با متغییر ---

  $correctUser = $db->prepare("SELECT * FROM subscribers WHERE email = :email AND password = :password");
  $correctUser->execute(['email' => $emailUser, 'password' => $passwordUser]);
