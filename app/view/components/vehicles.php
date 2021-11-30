<div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="tecnico">
            <div class="card card-body swText">
                <ul class = p-0 >
                    <li><span class = "swTitle">NOME: </span> <span class = "text-capitalize swText"><?php echo $item->name?></span></li>
                    <li><span class = "swTitle">MODELO: </span> <span class = "text-capitalize swText"><?php echo $item->model?></span></li> 
                    <li><span class = "swTitle">PREÇO: </span> <span class = "text-capitalize swText"><?php echo $item->cost_in_credits?></span></li>
                    <li><span class = "swTitle">VELOCIDADE ATMOSFÉRICA MÁXIMA: </span> <span class = "text-capitalize swText"><?php echo $item->max_atmosphering_speed?></span></li> 
                    <li><span class = "swTitle">EQUIPE: </span> <span class = "text-capitalize swText"><?php echo $item->crew?></span></li> 
                    <li><span class = "swTitle">PASSAGEIROS: </span> <span class = "text-capitalize swText"><?php echo $item->passengers?></span></li> 
                    
                </ul>
              
            
            </div>
          </div>
        </div>
        <div class="col">
          <div class="collapse multi-collapse" id="Prod">
            <div class="card card-body swText">
                <ul class = p-0>

                    <li><span class = "swTitle">CRIADO POR: </span> <span class = "text-capitalize swText"><?php echo $item->manufacturer?></span></li>
                    <li><span class = "swTitle">CAPACIDADE: </span> <span class = "text-capitalize swText"><?php echo $item->cargo_capacity?></span></li>
                    <li><span class = "swTitle">CONSUMÍVEIS: </span> <span class = "text-capitalize swText"><?php echo $item->consumables?></span></li>
                    
                    
                    
                
             
                </ul>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="collapse multi-collapse" id="Ideol">
              <div class="card card-body swText">

              <ul class = p-0>

    
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