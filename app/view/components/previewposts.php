
<a href='./posts.php?id=<?php echo $id_question ?>'>
          <section class='row' id='post'>
            <div class='col-2 text-end'>
                <i class='bi bi-chat-fill' style='color: grey; font-size: 25px;'></i>
             </div>

            <div class='col-4 text-start'>
             <h6 class='swText m-0  text-break  text-capitalize'> <?php echo $title ?> </h6>
             <p class='swText text-break text-capitalize' style='color: #707070;'>
                  <?php echo $theme ?>
             </p>
            </div>
            
             <div class='col-3 offset-1 py-2 text-end'>
                <h6 class='swText text-break m-0 text-capitalize'><?php echo $username ?></h6>
             </div>

            <div class='col-2  text-start'>
                <i class='bi bi-person-circle' style='font-size: 25px; color:#ffc500;'></i>
            </div>
        </section>
</a>