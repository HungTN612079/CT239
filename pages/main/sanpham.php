<p>Chi tiết sản phẩm</p>
<style>
    .slider {
        display: none;
    }

    .sidebar {
        display: none;
    }

    .main-content {
        width: 100%;
    }

    .l-10 {
        flex: 100%;
        max-width: 100%;
    }
</style>
<?php
$sql_chitiet = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc = danhmuc.id_danhmuc AND sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
    <div class="wrapper_chitiet">
        <div class="wrapper_container">
            <div class="wrapper_content">
                <div class="p_left">
                    <div class="big_img">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="watch">
                    </div>
                    <div class="small_img">
                        <div><img src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>"></div>
                        <div><img src="../../images/sp/iphone-12-(52).jpg"></div>
                        <div><img src="../../images/sp/iphone-13-pro-1tb-(38).jpg"></div>
                        <div><img src="../../images/sp/iphone-14-pro-(52).jpg"></div>
                    </div>
                </div>
                <div class="p_right">
                    <h2 class="p_title">
                        <?php echo $row_chitiet['tensanpham'] ?>
                    </h2>
                    <div class="p_id">
                        <p>Mã sản phẩm : <?php echo $row_chitiet['masp'] ?></p>
                    </div>
                    <div class="p_rating">
                        <!-- Rating here -->
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star-half-alt"></i></span>
                    </div>
                    <div class="p_price">
                        <?php echo number_format($row_chitiet['giasp'], 0, ',', '.') . ' VNĐ' ?>
                    </div>
                    <div class="p_description">
                        <p>Mua kèm iPhone ưu đãi thêm (Tùy model và không kèm khuyến mãi khác của sản phẩm mua kèm):</p>
                    </div>
                    <div>
                        <p>Dung lượng :</p>
                        <div class="size">
                            <div class="p_size p_active">128 GB</div>
                            <div class="p_size">256 GB</div>
                            <div class="p_size">512 GB</div>
                            <div class="p_size">1 TB</div>
                        </div>
                    </div>
                    <div>
                        <p>Màu :</p>
                        <div class="color">
                            <div class="p_color p_active">Vàng</div>
                            <div class="p_color">Đen</div>
                            <div class="p_color">Tím</div>
                            <div class="p_color">Bạc</div>
                        </div>
                    </div>
                    <div>
                        <p>Số lượng :</p>
                        <div class="quantity">
                            <input type="number" min="1" max="<?php echo $row_chitiet['soluong'] ?>" value="1">
                            <p><?php echo $row_chitiet['soluong'] ?> sản phẩm có sẵn</p>
                        </div>
                    </div>
                    <!-- Phần này có thể sửa đổi class -->
                    <div class="btn-groups">
                        <button class="addcart" type="submit" onclick="addCart(<?php echo $row_chitiet['id_sanpham'] ?>)">
                            <i class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng
                        </button>
                        <button type="button" class="buy-now-btn"><i class="fas fa-wallet"></i>Mua ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs">
        <ul id="tabs-nav">
            <li><a href="#tab1">Thông số kỹ thuật</a></li>
            <li><a href="#tab2">Nội dung chi tiết</a></li>
            <li><a href="#tab3">Hình ảnh sản phẩm</a></li>

        </ul> <!-- END tabs-nav -->
        <div id="tabs-content">
            <div id="tab1" class="tab-content">
                <?php echo $row_chitiet['tomtat'] ?>
            </div>
            <div id="tab2" class="tab-content">
                <?php echo $row_chitiet['tomtat'] ?>
            </div>
            <div id="tab3" class="tab-content">
                <img width="100%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
            </div>
        </div> <!-- END tabs-content -->
    </div> <!-- END tabs -->
    <div class="product-ratings">
        <h2 class="product-ratings__title">Đánh giá sản phẩm</h2>

        <div class="product-ratings-overview">
            <div class="product-ratings-overview__briefing">
                <div class="product-rating-overview__score">
                    <span class="product-rating-overview__rating-score">5</span>
                    <span class="product-rating-overview__rating-score-out-of">trên 5</span>
                </div>
                <div class="product-rating-overview__star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

            </div>
            <div class="product-ratings-overview__filters">
                <a href="#" class="product-ratings-overview__filter active-rating">Tất cả</a>
                <a href="#" class="product-ratings-overview__filter">5 Sao (3)</a>
                <a href="#" class="product-ratings-overview__filter">4 Sao (0)</a>
                <a href="#" class="product-ratings-overview__filter">3 Sao (0)</a>
                <a href="#" class="product-ratings-overview__filter">2 Sao (0)</a>
                <a href="#" class="product-ratings-overview__filter">1 Sao (0)</a>
                <a href="#" class="product-ratings-overview__filter">Có Bình Luận (1)</a>
                <a href="#" class="product-ratings-overview__filter">Có Hình ảnh / Video (1)</a>
            </div>
        </div>

        <div class="product-ratings__list">
            <div class="product-ratings__item-comment">
                <img class="product-ratings__item-avatar" src="https://galaxylands.com.vn/wp-content/uploads/2022/10/ca-si-son-tung-mtp-4.jpg" alt="">
                <div class="product-ratings__item-main">
                    <h3 class="product-ratings__item-main-name">HoàngHuy</h3>
                    <div class="product-rating__item-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="product-rating__item-time">2020-04-07 00:32</div>
                    <div class="product-rating__item-content">
                        Mua dc giá sale cực kì tốt. Chính hãng fpt nguyên seal tự bóc luôn. Mở máy là dc kích hoạt bảo hành. Ban đầu thấy nhiều bình luận ko tích cực cũng nhác tay. Nhưng cuối cũng sp của Apple mall làm mình hài lòng và tin cậy
                    </div>
                    <div class="product-rating__item-images">
                        <div class="product-rating__item-image1"></div>
                        <div class="product-rating__item-image2"></div>
                        <div class="product-rating__item-image3"></div>
                    </div>

                    <div class="product-rating__item-images-full">
                        <div class="product-rating__item-image-full"></div>
                    </div>
                </div>
            </div>
            <div class="product-ratings__item-comment">
                <img class="product-ratings__item-avatar" src="https://galaxylands.com.vn/wp-content/uploads/2022/10/ca-si-son-tung-mtp-4.jpg" alt="">
                <div class="product-ratings__item-main">
                    <h3 class="product-ratings__item-main-name">HoàngHuy</h3>
                    <div class="product-rating__item-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="product-rating__item-time">2020-04-07 00:32</div>
                    <div class="product-rating__item-content">
                        Mua dc giá sale cực kì tốt. Chính hãng fpt nguyên seal tự bóc luôn. Mở máy là dc kích hoạt bảo hành. Ban đầu thấy nhiều bình luận ko tích cực cũng nhác tay. Nhưng cuối cũng sp của Apple mall làm mình hài lòng và tin cậy
                    </div>
                    <div class="product-rating__item-images">
                        <div class="product-rating__item-image1"></div>
                        <div class="product-rating__item-image2"></div>
                        <div class="product-rating__item-image3"></div>
                    </div>

                    <div class="product-rating__item-images-full">
                        <div class="product-rating__item-image-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .tab-content h2 {
            color: rgb(194, 63, 63);
            margin: 20px 0 10px 0;
        }

        .tab-content>ol>li>ol>li {
            margin-left: 10px;
            line-height: 32px;
        }
    </style>

    <script>
        const allHoverImages = document.querySelectorAll('.small_img div img');
        const imgContainer = document.querySelector('.big_img');

        window.addEventListener('DOMContentLoaded', () => {
            allHoverImages[0].parentElement.classList.add('active');
        });

        allHoverImages.forEach((image) => {
            image.addEventListener('mouseover', () => {
                imgContainer.querySelector('img').src = image.src;
                resetActiveImg();
                image.parentElement.classList.add('active');
            });
        });

        function resetActiveImg() {
            allHoverImages.forEach((img) => {
                img.parentElement.classList.remove('active');
            });
        }
    </script>
<?php
}
?>