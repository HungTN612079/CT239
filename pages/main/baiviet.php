<?php
$sql_bv = "SELECT * FROM baiviet WHERE baiviet.id = '$_GET[id]' LIMIT 1";
$query_bv = mysqli_query($mysqli, $sql_bv);
$query_bv_all = mysqli_query($mysqli, $sql_bv);
$row_bv_title = mysqli_fetch_array($query_bv);
?>

<link rel="stylesheet" href="css/baiviet.css">
<style > .slider{
    display: none;
}

</style>

<div class="bv">
     <!-- <div class="top-slide">
         <div class="link-newfeed">
            <b>Tin Tức Khác</b>
        </div>
    </div>  -->
    <div class="right-slide">

            <div class="link-newfeed">
                <b>Tin Tức Khác</b>
            </div>
            <div class="newfeed">
                <div class="slide-wrapper">
                    <a href="http://localhost:3000/index.php?quanly=baiviet&id=8"> 
                        <div class="slide"><img src="/images/Baiviet1.jpg" width="250px" height="250px" ></div> </a>
                    <a href="http://localhost:3000/index.php?quanly=baiviet&id=9"> 
                        <div class="slide"><img src="/images/Baiviet2.jpg" width="250px" height="250px"></div> </a>
                    <a href="http://localhost:3000/index.php?quanly=baiviet&id=10"> 
                        <div class="slide"><img src="/images/Baiviet3.jpg" width="250px" height="250px"></div> </a>
                    <a href="http://localhost:3000/index.php?quanly=baiviet&id=12"> 
                        <div class="slide"><img src="/images/baiviet5.jpg" width="250px" height="250px"></div> </a>
                    <a href="http://localhost:3000/index.php?quanly=baiviet&id=14"> 
                        <div class="slide"><img src="/images/baiviet6.jpg" width="250px" height="250px"></div> </a>
                </div>
            </div>  
        </div>  
    <?php
    while ($row_bv = mysqli_fetch_array($query_bv_all)) {
    ?>
        <div class="baiviet_khung">
            <h2><?php echo $row_bv['tenbaiviet'] ?></h2>
            <p class="title-product"><?php echo $row_bv['tomtat'] ?></p>
            <p style="margin: 10px;" class="title-product"><?php echo $row_bv['noidung'] ?></p>
        </div>
    <?php
    }
    ?>

</ul>
</div>


    <!-- <div class="top-slide">
        <div class="link-newfeed">
            <a href="">Bài Viết Khác</a>
        </div>
</div>
<div class="right-slide">
        
        <div class="newfeed">
            <div class="slide-wrapper">
                <div class="slide"><img src="/images/Baiviet1.jpg" width="250px" height="250px" ></div>
                <div class="slide"><img src="/images/Baiviet2.jpg" width="250px" height="250px"></div>
                <div class="slide"><img src="/images/Baiviet3.jpg" width="250px" height="250px"></div>
            </div>
        </div>  
    </div> -->
