<?php 
function loadall_thongke(){
    $sql="SELECT groupproduct.id AS madm, groupproduct.name AS tendm, COUNT(products.id) AS countsp, MIN(products.price) AS minprice, MAX(products.price) AS maxprice, AVG(products.price) AS avgprice";
    $sql.=" FROM products LEFT JOIN groupproduct ON groupproduct.id=products.id_groupproduct";
    $sql.=" GROUP BY groupproduct.id ORDER BY groupproduct.id DESC";
    $listtk=pdo_query($sql);
    return $listtk;
}
?>