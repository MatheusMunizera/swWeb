<div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="tecnico">
            <div class="card card-body swText">
                <ul class = p-0 >
                    <li><span class = "swTitle">NOME: </span> <span class = "text-capitalize swText"><?php echo $item->name?></span></li>
                    <li><span class = "swTitle">TERRENO: </span> <span class = "text-capitalize swText"><?php echo $item->terrain?></span></li>
                    <li><span class = "swTitle">POPULAÇÃO: </span> <span class = "text-capitalize swText"><?php echo $item->population?></span></li>
                    
                </ul>
              
            
            </div>
          </div>
        </div>
        <div class="col">
          <div class="collapse multi-collapse" id="Prod">
            <div class="card card-body swText">
            <ul class = p-0>

            <span class = swTitle>RESIDENTES: </span>
              <?php 

                $res = $item->residents;
                for ($i=0; $i < sizeof($res); $i++) { 
                    echo "<li class = 'text-capitalize swText'>".$res[$i]."</li>";
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
             
              <span class = swTitle>FILMES: </span>
              <?php 

                $fil = $item->films;
                for ($i=0; $i < sizeof($fil); $i++) { 
                    echo "<li class = 'text-capitalize swText'>".$fil[$i]."</li>";
                }
              
              ?>

              </div>
            </div>
          </div>
      </div>