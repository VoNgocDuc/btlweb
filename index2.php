
<?php
include("webdataconnect.php");
$sql = "Select * from product where status ='bán mới' LIMIT 0, 6" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
    <div class="col-md-4">
        <div class="product-item">
            
            <a href="offers.php"><img src="<?php echo $row["linkimage"] ;?>" alt=""></a>
            <div class="down-content">
                <div class="wappp">
                    <a href=" ">
                        <h4><?php echo $row["name"]; ?></h4>
                    </a>
                    <h6><small>Gía từ :</small><?php echo $row["price"];?><small>/Khuyến mãi</small></h6>
                    <p><?php echo $row["description"];?></p>
                </div>
            </div>
        </div>
    </div>
<?php
    }   
    } ?>
