<?php
// URL ของไฟล์ JSON
$url = "http://202.44.40.193/~aws/JSON/priv_hos.json";

// ดึงข้อมูล JSON จาก URL
$json_data = file_get_contents($url);

// ตรวจสอบว่าดึงข้อมูลได้หรือไม่
if ($json_data === FALSE) {
    die("ไม่สามารถดึงข้อมูลได้");
}

// แปลงข้อมูล JSON เป็น array
$data = json_decode($json_data, true);

// ตรวจสอบว่าแปลงข้อมูลได้สำเร็จ
if ($data === NULL) {
    die("ข้อมูล JSON ไม่ถูกต้อง");
}

// จำแนกรายชื่อโรงพยาบาลตามขนาด
$large_hospitals = [];
$medium_hospitals = [];
$small_hospitals = [];

foreach ($data['hospitals'] as $hospital) {
    $bed_count = $hospital['bed_count'];

    if ($bed_count >= 91) {
        $large_hospitals[] = $hospital;
    } elseif ($bed_count >= 31 && $bed_count <= 90) {
        $medium_hospitals[] = $hospital;
    } else {
        $small_hospitals[] = $hospital;
    }
}

// แสดงผล
echo "โรงพยาบาลขนาดใหญ่:\n";
foreach ($large_hospitals as $hos) {
    echo "- {$hos['name']} ({$hos['bed_count']} เตียง)\n";
}

echo "\nโรงพยาบาลขนาดกลาง:\n";
foreach ($medium_hospitals as $hos) {
    echo "- {$hos['name']} ({$hos['bed_count']} เตียง)\n";
}

echo "\nโรงพยาบาลขนาดเล็ก:\n";
foreach ($small_hospitals as $hos) {
    echo "- {$hos['name']} ({$hos['bed_count']} เตียง)\n";
}
?>
