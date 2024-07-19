<?php
function loadall_sizes()
{
    $sql = "SELECT * FROM sizes  ORDER BY id_size asc";
    $listsizes = pdo_query($sql);
    return $listsizes;
}
function loadone_variants($id)
{
    $sql = "SELECT * FROM variants
    LEFT JOIN products 
    ON products.id = variants.id 
    WHERE variants.id='$id'";
    $variants= pdo_query_one($sql);
    return $variants;
}
function loadone_sizes($id_size)
{
    $sql = "SELECT * FROM sizes WHERE id_size=".$id_size;
    $listonesizes = pdo_query_one($sql);
    return $listonesizes;
}
function loadone_colors($id_color)
{
    $sql = "SELECT * FROM colors WHERE id_color=".$id_color;
    $listonecolors = pdo_query_one($sql);
    return $listonecolors;
}
function loadall_colors()
{
    $sql = "SELECT * FROM colors  ORDER BY id_color asc";
    $listcolors = pdo_query($sql);
    return $listcolors;
}
function insert_variant( $id_product, $size, $color, $quanity)
{
    $sql = "INSERT INTO variants(id_product,id_size,id_color,quanity)
     VALUES( '$id_product', '$size', '$color', '$quanity')";
    pdo_execute($sql);
}
function load_variants_product($id_product){
    $sql = "SELECT * FROM variants 
    LEFT JOIN products 
    ON variants.id_product = products.id_product WHERE 1";
    $sql.=" AND variants.id_product = '$id_product'";
    $sql.=" ORDER BY variants.id_variant desc";
    $list_variants_product = pdo_query($sql);
    return $list_variants_product;
}

?>