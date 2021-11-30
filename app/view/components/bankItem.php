<?php 
         $hg = file_get_contents($request);
         $item = json_decode($hg);
        foreach ($item as $value) { ?>
            <div class="card-col">
                <div class="container">
                    <div class="left_Side">
                      <a href="./info.php?type=<?php echo $type?>&id=<?php echo $value->id?>">
                        <header class="card-head">
                            <img class="img-flex" src=<?php echo $value->image ?> alt=<?php echo $value->resume?>>
                        </header>
                        <div class="card-body swText text-center">
                            <p><?php echo $value->name ?></p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>               
        <?php 
   
    
    }?> "
</div>