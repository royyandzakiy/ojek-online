<div class="container">
    <div class="header">
      <h1>DRIVER HISTORY</h1>
    </div>
    <div class="tab">
      <a href="index.php?nav_active=2" target="_parent">
        <button>Previous Order</button>
      </a>
        <button class="active">Driver History</button>
    </div>
    <?php
      $n = 0;

      if ($row_driver = $result_driver->fetch(PDO::FETCH_NUM)) {
          do {
            $profpic = $row_driver[0];
            $tanggal = $row_driver[1];
            $nama = $row_driver[2];
            $pick_point = $row_driver[3];
            $dest_point = $row_driver[4];
            $rating = $row_driver[5];
            $comment = $row_driver[6];

            $n++;

            ?>
    <div id="history-<?php echo $n; ?>" class="content">
      <div class="picture">
        <img src="img/<?php echo $profpic; ?>">
      </div>
      <div class="text">
        <div class="up">
          <div class="contentup">
            <div class="tanggal"><?php echo $tanggal; ?></div>
            <div class="driver"><?php echo $nama; ?></div>
            <div class="tempat"><?php echo $pick_point; ?> &#8594; <?php echo $dest_point; ?></div>
          </div>
          <div class="hide">
            <button onclick="hide(<?php echo $n; ?>)">Hide</button>
          </div>
        </div>
        <div class="down">
          <div class="you-rated"> 
            <div> Gave </div>
            <div id="rating"><?php echo $rating;
            ?> stars for this order</div>
          </div>
          <div class="you-commented">
            <div>and left comment:</div>
            <div id="comment"><?php echo $comment; ?></div>
          </div>
        </div>
        <div></div>
      </div>
    </div>
    <?php
          } while ($row_driver = $result_driver->fetch(PDO::FETCH_NUM));
      } else {
        echo "<div id='nothing'><p>Nothing to display :(</p></div>";  
      }
      // tahap 1_END

      $query_driver = null;
      $result_driver = null;
      $con = null;
      /*END_CONNECT DB*/
     ?>
  </div>