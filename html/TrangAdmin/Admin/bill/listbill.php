<section class="main_content dashboard_part large_header_bg">

    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header mt_30 ml_25">
                <h4>Danh sách loại áo</h4>
            </div>
            <div class="QA_table mb_30">

                <table class="table lms_table_active ">
                    <thead>
                        <tr>
                            <th scope="col">Ma hon hang</th>
                            <th scope="col">Code Order</th>
                            <th scope="col">Khach hang</th>
                            <th scope="col">Tong so don hang</th>
                            <th scope="col">Gia tri don hang</th>
                            <th scope="col">Tonh trang don hang</th>
                            <th scope="col">Ngay dat hang</th>
                            <th scope="col">Thao tac</th>
                            <th scope="col">Update Status</th>
                            <th scope="col">delete_bill</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($billl as $bill) {
                            extract($bill);
                            $kh =$bill["bill_name"].'<br>' 
                            .$bill["bill_email"] .'<br>'
                            .$bill["bill_address"].'<br>'
                            .$bill["bill_phone"];
                            $xoabill = "index.php?act=delete_bill&id=" .$id;
                            $coutsp =loadall_cart_count($bill["id"]);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $ctsp = 'index.php?act=ctdonhang&id=' .$bill['id'];
                            $status = 'index.php?act=updatesta&id=' .$id;
                            echo '<tr>
                            <td>MA- '.$bill['id'].'</td>
                            <td>'.$bill['code_order'].'</td>
                            <td>'.$kh.'</td>
                            <td>'.$coutsp.'</td>
                            <td>'.$bill['total'].'</td>
                            <td>'.$ttdh.'</td>
                            <td>'.$bill['ngaydathang'].'</td>
                            <td> <a href="'.$ctsp.'">Chi tiet san pham</a></td>
                            <td> <a href="'.$status.'">Update status</a></td>
                            <td> <a href="'.$xoabill.'">Delete bill</a></td>
                            
                            
                            </tr>';
                        }
                        ?>
                       

                    </tbody>
                </table>
            </div>
        </div>
    </div>