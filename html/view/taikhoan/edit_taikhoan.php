<div class="row mb">
    <div class="boxtrai mr">

        <div class="row mb">
            <div class="boxtitle">Cap Nhat Tai Khoan</div>
            <div class=" boxcontent formtaikhoan ">


            <?php
            if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }
            
            ?>
                <form action="index.php?act=edit_taikhoan" method="POST">


                    <div class="row mb10">
                        Email:
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        User:
                        <input type="text" name="user" value="<?=$user?>" >
                    </div>
                    <div class="row mb10">
                        Pass:
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                       Adr :
                        <input type="text" name="address" value="<?=$address?>" >
                    </div>
                    <div class="row mb10">
                        Tel :
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>


                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cap nhat" name="capnhat">
                        <input type="reset" value="nhap lai">
                    </div>


                </form>
           
                <h1 class="thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao!="")) {
                        echo $thongbao;
                    }
                    ?>
                </h1>

            </div>

        </div>
       

    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>