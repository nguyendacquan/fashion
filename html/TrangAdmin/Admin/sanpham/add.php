<section class="main_content dashboard_part large_header_bg">
    <div class="container-fluid g-0">
    </div>
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">

                                <div class="modal-content cs_modal">
                                    <div class="modal-header justify-content-center theme_bg_1">
                                        <h5 class="modal-title text_white">Add Shirt</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                                            <div class="mb_10">
                                               
                                            Group product:  
                                                <select name="id_groupproduct" id="">

                                                    <?php foreach ($listgroupproduct as $groupproduct) {
                                                        extract($groupproduct);
                                                        echo '<option value="' . $id . '">' . $name . '</option>';
                                                    }

                                                    ?>
                                                </select>
                                            </div>

                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Tên áo:</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Image:</h5>
                                                    </div>
                                                </label>
                                                <input type="file" class="form-control" name="hinh">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Giá:</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="price">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Số lượng:</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="quantity">
                                            </div>

                                            <div class>
                                                <div class="add_button">
                                                    <input type="submit" name="themmoi" class="btn_1" value="Thêm Mới">
                                                    <input type="reset" class="btn_1" value="Nhập Lại">
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($thongBao) && ($thongBao != "")) {
                                            echo $thongBao;
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>