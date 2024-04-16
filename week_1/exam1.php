<!doctype html>
<html lang="en">

<head>
    <title>exam1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
    .color_gray {
        color: gray;
    }
    </style>
</head>

<body>


    <?php
        echo "Chào mừng đến với Đại Học Hạ Long";
        echo "hello world!<br>";
        echo "hello world!<br>";
        echo "hello world!<br>";
        $color = "red";
        $COLOR = "blue";
        $coLOR = "gray";

        echo " My car is ".$color."<br>";
        echo "My house is ".$COLOR."<br>";
        echo "<p class=\"color_gray\"> My boat is ".$coLOR."<br> </p>";

        // this is comment this is commlent single line
        # this is commlent single line
        /* 
            this is commlent7 multi-line 
            ok
        */
        ?>

    <?php
            // tên biến ở trong giấu nháy
            $txt = "Vân Đồn";
            echo "I love $txt!<br>";

            // tên biến ở giữa hai giấu chấm
            echo "I love " .$txt . " so much!<br>";

            // cách viết biểu thức
           $x = 5;
           $y = 9;

           echo "x+y = " .$x + $y. " Quảng Ninh<br>";

        //    Công xâu
            $x = 5;
            $y = "John";
            echo $x;
            echo "<br>";
            echo $y;
           
            $ten = "Trần Xuân Thành KHMTK6B";
            echo "<h1> ".$ten. "</h1>";

        // dùng hàm var_dump để lấy được kiểu dữ liệu của biến
            var_dump(5);echo "<br>";
            var_dump("john");echo "<br>";
            var_dump(3.14);echo "<br>";
            var_dump(true);echo "<br>";
            var_dump([2,5,6]);echo "<br>";
            var_dump(Null);echo "<br>";

        // gán giá trị cho nhiều biến
            
        $x = $y = $z = "Fruit";
        echo $x; echo "<br>";
        echo $y; echo "<br>";
        echo $z; echo "<br>";
        ?>

    <?php
        // phạm vi biến
        $x = 5;
        function mytest(){
            // sử dụng biến global  để xác định biến toàn cục ở trong hàm
            global $x;
            echo "<p> Variable x inside function is: $x </p>";
        }
        myTest();
        echo "<p> Variable x inside function is: $x </p>";

        // để tạo một biến tĩnh

        function test2(){
            static $x = 0;
            echo $x;
            $x++;

        }
        test2();
        echo "<br>";
        test2();
        echo "<br>";
        test2();
        echo "<br>";


        ?>

    <?php 
        echo "This", "string","was","made", "with null";
        echo "<br>";
        ?>

    <?php 
        //Kiểu mảng:
        $cars = array("Volvo","BMW", "Toyota");
        var_dump($cars);
        echo "<br>";

        // kiểu dữ liệu null
        $x = "hellw world!";
        $x = null;
        var_dump($x);
        echo "<br>";

        //Kiểu xâu ký tự
        echo "hello"; echo "<br>";
        print 'hello';

        // một số hàm
        //hàm strlen trả về độ dài của xâu
        echo "<br>";
        echo strlen("Hello world!");

        // Hàm trả về số từ xâu
        echo "<br>";
        echo str_word_count("hello worrld!");
        echo "<br>";
        // hàm trả về vị trí con trong một xâu
        echo strpos("hello world!", "hello worrld!");

        $Name = "Tran Xuan Thanh";
        $Lop = "KHMTK6B";
        
        // 

        echo "Xin chao \""  . strtoupper($Name) . "\" hoc lop '" . substr_replace($Lop, "", -1) . "!'";
        echo "<br>";
        
        ?>
    <?php 
    $x = 5968;
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "5968";
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br>";
    // hằng
        /*
        define (name, value, case-insensitive)
        */
    // ví dụ: tạo sâu "Xin chào hạ long"
    define("key", "Xin chào Hạ Long" );
    echo key;

    echo "<br>";
    // các phép toán logic
    $Ho = "Nguyen Van";
    $Ten = "Minh";

    echo $Ho . $Ten;
    echo "<br>";
    echo $Ho .= $Ten;

    // if_else (điều kiện)
    /*viết chương trình đề đưa ra lời chào khách hàng biết rằng:
    nếu tuổi < 20 thì ghi ra là chào em nếu tổi lớn hơn >=20 <40 nam thì là anh nữ thì là chị, nếu tuổi >=40 <60 chào bác,
    tuổi >60 chào ông nữ chào bà    
    */
    echo "<br>";
    $ten = "Nguyen An";
    $tuoi = 90;
    $gioi_tinh = "nu";
    if($tuoi<20){
        echo "Xin chào Em \" $ten \"";
    }elseif($tuoi <40){
        if($gioi_tinh == "nu"){
            echo "Xin chào Chị \" $ten \"";
        }
        else{
            echo "Xin chào Anh \" $ten \"";
        }
    }
    elseif($tuoi <60){
        echo "Xin chào Bác \" $ten \"";
        
    }else{
        if($gioi_tinh == "nu"){
            echo "Xin chào Bà\" $ten \"";
        }
        else{
            echo "Xin chào Ông \" $ten \"";
        }
    }

    // câu lệnh switch-case
    /*
    nhập vào một năm, và một tháng, đưa ra số ngày của tháng đó trong năm đó 
    */
    echo "<br>";
    $thang = 2;
    $nam = 2024;

    switch ($thang) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $so_ngay = 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $so_ngay = 30;
            break;
        case 2:
            if (($nam % 4 == 0 && $nam % 100 != 0) || $nam % 400 == 0) {
                $so_ngay = 29; 
            } else {
                $so_ngay = 28;
            }
            break;
        default:
            $so_ngay = "Tháng không hợp lệ";
    }

    echo "Số ngày của tháng $thang năm $nam là: $so_ngay";


    // vòng lặp
    /*
    while(){
        code here
    }
    hoặc
    while():

    endwhile;
    code here
    */

    // do while loop

    /*
    do{

    }while(condition);
    */


    // câu lệnh for

    /*
    for"(expression1, expression2, expression3){

    }while(condition);

    froeach($array as $value){

    }

    froeach($array as $key => $element){

    }
    */

    // ví dụ 1 tạo một mảng gồm tên của 5 sinh viên, in ra tên ra màn hình, mỗi tên trên một dòng
    // ví dụ 2:  tạo  một mảng chứa thông tin của khách hàng bao gồn tên, địa chỉ, giới tính, số điện thoại, tuổi, đưa ra thông  tin của khách hàng đó
    echo "<br> Kết quả ví dụ 1 <br>";
    $array = array("Trần Xuân Thành", "Đỗ Văn Thành", "Nguyễn Minh Quân", "Đặng Thu Vân", "Nguyễn Huy Hùng");
    foreach ($array as $value) {
        echo $value . "<br>";
    }

    // Ví dụ 2:
    echo "<br> Kết quả ví dụ 2 <br>";
    $khach_hang = array(
        array("ten" => "Trần Xuân Thành", "dia_chi" => "Vân Đồn", "gioi_tinh" => "Nam", "sdt" => "0936867190", "tuoi" => 22),
        array("ten" => "Đỗ Văn Thành", "dia_chi" => "Vân Đồn", "gioi_tinh" => "Nam", "sdt" => "034654831486", "tuoi" => 22),
        array("ten" => "Nguyễn Minh Quân", "dia_chi" => "Hạ Long", "gioi_tinh" => "Nam", "sdt" => "012146845648", "tuoi" => 23),
        array("ten" => "Đặng Thu Vân", "dia_chi" => "Uông Bí", "gioi_tinh" => "Nữ", "sdt" => "09648623154", "tuoi" => 21),
        array("ten" => "Nguyễn Huy Hùng", "dia_chi" => "Quảng Yên", "gioi_tinh" => "Nam", "sdt" => "025464385616", "tuoi" => 22)
    );
    
    // Sử dụng vòng lặp foreach để in ra thông tin của từng khách hàng
   
    foreach ($khach_hang as $key => $khach_hang) {
        echo "Thông tin khách hàng " . ($key + 1) . ": <br>";
        foreach ($khach_hang as $key => $khach_hang) {
            echo ($key) . ": " . $khach_hang . "<br>";
        }
        echo "<br>";
    }


    // hàm
    /*
    function functionname([$<var1>,...,$<Vam>]){
        
    }

    function functionname([$<var1>,...,$<Vam>]){
        
        return $<value>;
    }

    ví dụ: viết một hàm nhập vào điểm số đưa ra điểm chữ
    viết một hàm  để sét mức học bổng dựa vào điểm trung bình học kỳ và điểm rèn luyện
    
    */

    function diem($diem) {
        return $diem >= 9.2 ? 'A+' :
               ($diem >= 9 ? 'A' :
               ($diem >= 8 ? 'B+' :
               ($diem >= 7 ? 'B' :
               ($diem >= 6.5 ? 'C+' :
               ($diem >= 6 ? 'C' :
               ($diem >= 5 ? 'D+' :
               ($diem >= 4 ? 'D' :
               ($diem >= 3 ? 'F' : 'E'))))))));
    }
    
    // Sử dụng hàm để chuyển điểm số thành điểm chữ
    $diem = 2;
    echo "Điểm chữ tương ứng với điểm số $diem là: " . diem($diem);


    echo "<br>";
    // ví dụ 2
    function xetHocBong($dtb, $drl) {
        if ($dtb >= 9) {
            if ($drl >= 90) {
                echo "Học bổng xuất sắc.";
            }
        } elseif ($dtb >= 8) {
            if ($drl >= 80) {
                echo "Học bổng giỏi";
            }
        } elseif ($dtb >=7) {
            if ($drl >= 70) {
                echo "Học bổng khá";
            }
        } else {
            echo "Không được học bổng.";
        }
    }

    $dtb = 8.6;
    $drl = 86;
    xetHocBong($dtb, $drl);
    ?>





    <header>
        <!-- place navbar here -->
    </header>
    <main></main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>