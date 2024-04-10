<!doctype html>
<html lang="en">
    <head>
        <title>exam1</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <style>
            .color_gray{
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

        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
