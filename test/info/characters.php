<div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="tecnico">
            <div class="card card-body swText">
                <ul class = p-0 >
                    <li><span class = "swTitle">ALTURA: </span> <span class = "text-capitalize swText"><?php echo $item->height?></span></li>
                    <li><span class = "swTitle">PLANETA NATAL: </span> <span class = "text-capitalize swText"><?php echo $item->homeworld?></span></li>
                    <li><span class = "swTitle">ANO DE NASCIMENTO: </span> <span class = "text-capitalize swText"><?php echo $item->born?></span></li>
                    <li><span class = "swTitle">PESO: </span> <span class = "text-capitalize swText"><?php echo $item->mass?></span></li>
                    
                </ul>
              
            
            </div>
          </div>
        </div>
        <div class="col">
          <div class="collapse multi-collapse" id="Prod">
            <div class="card card-body swText">
            <ul class = p-0>
                    <li><span class = "swTitle">ESPÉCIE: </span> <span class = "text-capitalize swText"><?php echo $item->species?></span></li>
                    <li><span class = "swTitle">CIBERNÉTICO: </span> <span class = "text-capitalize swText"><?php echo $item->cybernetics?></span></li>
                    
                </ul>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="collapse multi-collapse" id="Ideol">
              <div class="card card-body swText">

              <ul class = p-0>
              <span class = swTitle>AFILIAÇÕES: </span>
              <?php 

                $aff = $item->affiliations;
                for ($i=0; $i < sizeof($aff); $i++) { 
                    echo "<li class = 'text-capitalize swText'>".$aff[$i]."</li>";
                }
              
              ?>
              <span class = swTitle>MESTRES: </span>
               <?php 

                $mast = $item->masters;
                for ($i=0; $i < sizeof($mast); $i++) { 
                    echo "<li>".$mast[$i]."</li>";
                }
              
              ?>
              <span class = swTitle>APRENDIZES: </span>
                <?php 

                $app = $item->apprentices;
                for ($i=0; $i < sizeof($app); $i++) { 
                    echo "<li>".$app[$i]."</li>";
                }
              
              ?>
              

              </div>
            </div>
          </div>
      </div>