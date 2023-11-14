<?php
// BÀI KIỂM TRA PHP LẤY ĐIỂM THÀNH PHẦN SỐ 01

// PHẦN TRẮC NGHIỆM

/* Câu 1: 
Kết quả được in ra màn hình của đoạn mã trên là: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
*/

/* Câu 2:
Đáp án: a) True
*/

/* Câu 3:
Đáp án: a) array()
*/

/* Câu 4:
Đáp án: a) readfile()
*/

/* Câu 5:
Đáp án: b) Chuyển đổi một đối tượng thành một chuỗi.
*/

// PHẦN TỰ LUẬN

/* Bài 1: Viết một chương trình PHP để hiển thị dãy số Fibonacci. Yêu cầu:
1. Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.
2. Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử.
*/

echo "<b> Bài 1: <br> </b>";
function generateFibonacci($n) {
    if ($n <= 0 || !is_int($n)) {
        return "Không thỏa mãn điều kiện là số nguyên dương!";
    } else {
        $fibonacci = [];
        $fibonacci[0] = 0;
        $fibonacci[1] = 1;

        for ($i=2; $i<$n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        return $fibonacci;
    }
}

// Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử
$firstFibonacci = generateFibonacci(10);
if (is_array($firstFibonacci)) {
    echo "Dãy số Fibonacci đầu tiên có 10 phần tử là: ";
    echo implode(', ', $firstFibonacci);
} else { 
    echo $firstFibonacci;
}

/*
Bài 2: Viết một ứng dụng PHP để quản lý thông tin về học sinh trong một lớp học sử dụng mảng kết hợp. Yêu cầu:
1. Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade.
2. Hiển thị thông tin của tất cả học sinh trong mảng.
3. Viết hàm để tìm học sinh có điểm cao nhất (grade).
*/

echo "<b> <br> Bài 2: <br> </b>";
// Mảng kết hợp chứa thông tin về học sinh
$students = array(
    array("id" => 1, "name" => "Nguyen Van A", "age" => 11, "grade" => 5),
    array("id" => 2, "name" => "Hoang Thi B", "age" => 16, "grade" => 9),
    array("id" => 3, "name" => "Le Van C", "age" => 15, "grade" => 7),
);

// Hiển thị thông tin của tất cả học sinh trong mảng
echo "Thông tin của tất cả học sinh: <br>";
foreach ($students as $student) {
    echo "ID: " . $student['id'] . ", Name: " . $student['name'] . ", Age: " . $student['age'] . ", Grade: " . $student['grade'] . "<br>";
}

// Hàm để tìm học sinh có điểm cao nhất
function findHighestGradeStudent($students) {
    $highestGrade = 0;
    $highestGradeStudent = null;
    foreach ($students as $student) {
        if ($student['grade'] > $highestGrade) {
            $highestGrade = $student['grade'];
            $highestGradeStudent = $student;
        }
    }
    return $highestGradeStudent;
}

// Gọi hàm và hiển thị thông tin học sinh có điểm cao nhất
$highestGradeStudent = findHighestGradeStudent($students);
echo "<br> Học sinh có điểm cao nhất: <br>";
if ($highestGradeStudent !== null) {
    echo "ID: " . $highestGradeStudent['id'] . ", Name: " . $highestGradeStudent['name'] . ", Age: " . $highestGradeStudent['age'] . ", Grade: " . $highestGradeStudent['grade'] . "\n";
} else {
    echo "Không có học sinh nào trong danh sách. <br>";
}

?>