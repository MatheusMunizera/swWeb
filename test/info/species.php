<div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="tecnico">
            <div class="card card-body swText">
                <ul class = p-0 >
                    <li><span class = "swTitle">NOME: </span> <span class = "text-capitalize swText"><?php echo $item->name?></span></li>
                    <li><span class = "swTitle">DESIGNAÇÃO: </span> <span class = "text-capitalize swText"><?php echo $item->designation?></span></li>
                    <li><span class = "swTitle">TEMPO MÉDIO DE VIDA: </span> <span class = "text-capitalize swText"><?php echo $item->average_lifespan?></span></li>
                    <li><span class = "swTitle">LÍNGUA: </span> <span class = "text-capitalize swText"><?php echo $item->language?></span></li>
                    
                </ul>
              
            
            </div>
          </div>
        </div>
        <div class="col">
          <div class="collapse multi-collapse" id="Prod">
            <div class="card card-body swText">
            <ul class = p-0>
            <span class = swTitle>TONS DE PELE: </span>
              <?php 


                $cringe = $item->skin_colors;
                $ski = explode(",",$cringe);
                for ($i=0; $i < sizeof($ski); $i++) { 
                    echo "<li class = 'text-capitalize swText'>".$ski[$i]."</li>";
                }
              
              ?>
                
                    
                    
                </ul>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="collapse multi-collapse" id="Ideol">
              <div class="card card-body swText">

              <ul class = p-0>
              <span class = swTitle>PERSONAGENS: </span>
              <?php 

                $per = $item->people;
                for ($i=0; $i < sizeof($per); $i++) { 
                    echo "<li class = 'text-capitalize swText'>".$per[$i]."</li>";
                }
              
              ?>
              <span class = swTitle>FILMES: </span>
              <?php 

                $film = $item->films;
                for ($i=0; $i < sizeof($film); $i++) { 
                    echo "<li class = 'text-capitalize swText'>".$film[$i]."</li>";
                }
              
              ?>

              </div>
            </div>
          </div>
      </div>