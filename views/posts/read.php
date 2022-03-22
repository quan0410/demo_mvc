<div style="border-bottom: 1px solid; padding: 70px 20px 1px">
    <h3><?php echo $posts->title; ?></h3>
    <!-- <a class="btn btn-primary btn-sm" href='index.php?controller=posts&action=update&id=<?php echo $posts->id; ?>'><i class="bi bi-arrow-repeat"> </i>Sửa</a> -->
    <a style= "border-style: double;border-color: red;" href='index.php?controller=posts&action=delete&id=<?php echo $posts->id; ?>'>Xóa</a>
</div>
<div class="row" style="margin: 10px">
    <p><?php echo $posts->content ?></p>
</div>