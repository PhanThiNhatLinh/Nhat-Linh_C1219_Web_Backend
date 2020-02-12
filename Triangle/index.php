<?php 
if (isset($_POST['submit'])){ 
    $side1 = $_POST["side1"] === '' ? 0 : $_POST["side1"];
    // nếu 3 cạnh nhập vào rỗng thì gán cho nó bằng 0 còn có giá trị thì lấy giá trị chính nó
    $side2 = $_POST["side2"] === '' ? 0 : $_POST["side2"];
    $side3 = $_POST["side3"] === '' ? 0 : $_POST["side3"];
    $color = $_POST["color"];
    if ($side1 === 0 && $side2 ===0 && $side3 ===0){

        $triangle1 = new Triangle("hình tam giác",$color);
        echo $triangle1;
         // lấy giá trị mặc định 3 cạnh = 1 nếu cạnh nhập bằng 0
    } else {
        if (($side1+$side2<=$side3)||($side2+$side3<=$side1)||($side1+$side3<=$side2)) {
             echo "Đây không phải ba cạnh 1 tam giác";   
                    
        } else {
            $triangle1 = new Triangle("hình tam giác",$color,$side1,$side2,$side3);
            echo $triangle1;
            // ko cần trỏ tới phương thức tostring để in ra vì đã dùng hàm có sẵn __toString; 
        }
        
    }
   
}
?>