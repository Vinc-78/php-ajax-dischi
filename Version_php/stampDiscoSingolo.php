<?php include "database.php"?>;
<?php


function stampaDisco($album) {
  if (!isset($album)) {
    return;
  }

 
?>
<div class="col" >
    <div class="card " >

    <?php echo '<img src="' . $album["poster"] . '"/>'; ?>
   

    <div class="card-body">
        <h5 class="card-title text-center fs-4"> <?php echo $album["title"] ?></h5>
        
    </div>
    <div class="card-text text-center fs-5">
            <ul>
            <li> <?php echo $album["author"] ?></li>
            <li> <?php echo $album["genre"] ?></li>
            <li> <?php echo $album["year"] ?></li>
            </ul>
        </div>
    
    </div>
</div>
<?php
}
?>