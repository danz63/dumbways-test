<!-- Buatlah function untuk dapat mengurutkan beberapa kata dalam string yang diberikan. Setiap kata akan memiliki sebuah angka. Angka tersebut akan menentukan posisi kata tersebut diurutkan.

Note: Angka harus terdiri dari 1 sampai 9, sehingga angka 1 akan menentukan kata urutan pertama bukan angka 0.
Apabila kata yang diberikan adalah kosong (empty string), function akan return kata kosong (empty string) juga.
Kata-kata di dalam input hanya boleh diisikan angka valid yang berurut. -->
<?php
function urutKata($string = '')
{
    $split = explode(' ', $string);
    $return = [];
    $i = 0;
    foreach ($split as $k => $s) {
        preg_match('/[1-9]/', $s, $match);
        if (isset($match[0])) {
            $return += [$match[0] => $s];
        }
    }
    ksort($return, SORT_NUMERIC);
    return implode(' ', $return);
}
$kata = "ib2u in1i b3udi";
echo "Sebelum diurutkan : " . $kata . "<br>";
$kata = urutKata($kata);
echo "Setelah diurutkan : " . $kata . "<br>";

$kata = "ta3hun menjela2ng se1lamat b4aru";
echo "Sebelum diurutkan : " . $kata . "<br>";
$kata = urutKata($kata);
echo "Setelah diurutkan : " . $kata . "<br>";

$kata = "";
echo "Sebelum diurutkan : " . $kata . "<br>";
$kata = urutKata($kata);
echo "Setelah diurutkan : " . $kata . "<br>";
?>