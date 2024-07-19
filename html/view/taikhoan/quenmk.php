<div class="row mb">
    <div class="boxtrai mr">

        <div class="row mb">
            <div class="boxtitle">QUEN MK</div>
            <div class=" boxcontent formtaikhoan ">
                <form action="index.php?act=quenmk" method="POST">


                    <div class="row mb10">
                        Email:
                        <input type="email" name="email">
                    </div>
                  
                    <div class="row mb10">
                        <input type="submit" value="gui" name="guiemail">
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