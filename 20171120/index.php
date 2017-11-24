<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

$i=count($data);  //列個數
$j=count($data[0]);//欄個數

// 'table{border:1px solid black}';

//1.For~~~
echo "<table>";
    echo "<tr>";                  
        echo "<th>Name</th>";
        echo "<th>Stock</th>";
        echo "<th>Sold</th>";
    echo "</tr>";

for($row=0;$row<$i;$row++){
    echo "<tr>";
        for($col=0;$col<$j;$col++){
            echo "<td>";
                echo $data[$row][$col];
            echo "</td>";
        }
    echo "</tr>";
   
    echo "<br>";

}
echo "</table>";

//2.Foreach~~~
echo "<table>";
echo "<tr>";                  
    echo "<th>Name</th>";
    echo "<th>Stock</th>";
    echo "<th>Sold</th>";
echo "</tr>";

foreach($data as $row=>$car){          //$row:列的index,$car:第二層陣列
echo "<tr>";

    foreach($car as $col=>$num){      //$col:欄的index,$num:第二層陣列裡面的元素
        
        echo "<td>";
            // echo "$row&nbsp$col";   //找到每個元素的陣列index
            echo $num;                 //直接輸出陣列元素
        echo "</td>";
    }
echo "</tr>";

echo "<br>";

}
echo "</table>";


//3.array_map+join~~~
echo "<table>";
echo "<tr>";                  
    echo "<th>Name</th>";
    echo "<th>Stock</th>";
    echo "<th>Sold</th>";
echo "</tr>";

function tr($row){
    return "<tr>$row</tr>";
}
function td($col){
   return "<td>$col</td>";
}
// for($row=0;$row<$i;$row++){
// echo "<tr>";
//     for($col=0;$col<$j;$col++){
//         echo "<td>";
//             echo $data[$row][$col];
//         echo "</td>";
//     }
// echo "</tr>";
$car=array_map("tr",$data);
// echo $car;
$num=array_map("td",$car);
// echo $num;
$result=join("",$num);
// echo $result;
$a=print_r( $result,true);
echo $a;
$b=print_r($a,true);
echo $b;







echo "<br>";

// }
echo "</table>";


























?>