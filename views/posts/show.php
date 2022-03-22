<!-- heading -->
<div class="row "style="boder-haeder :3px; border-bottom: 1px solid; padding: 70px 20px 1px">
  <div class="col-11">
    <h3>new</h3>
  </div>
  <div class="col-1">
    <a class="btn btn-primary float-right" href='index.php?controller=posts&action=create'>Thêm</a>
  </div>
</div>


<!-- Card -->
<div class="row" style="margin-top: 10px">
  <?php
  // var_dump($posts);
  foreach ($posts as $post) {
    echo '
      <a class="card" style="width:300px; margin: 15px;" href="index.php?controller=posts&action=read&id=' . $post->id . '">
        <h6 class="card-title">' . $post->title . '</h6>
      </div>
      </a>';
  }

  ?>
</div>