<div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="tecnico">
            <div class="card card-body swText">
                <ul class = p-0 >
                    <li><span class = "swTitle">NOME: </span> <span class = "text-capitalize swText"><?php echo $item->name?></span></li>
                    <li><span class = "swTitle">DATA DE LANÇAMENTO: </span> <span class = "text-capitalize swText"><?php echo $item->release_date?></span></li> 
                    <li><span class = "swTitle">TRAILER: </span> <span class = "text-capitalize swText"><?php echo $item->trailer?></span></li>
                    
                </ul>
              
            
            </div>
          </div>
        </div>
        <div class="col">
          <div class="collapse multi-collapse" id="Prod">
            <div class="card card-body swText">
                <ul class = p-0>

                    <li><span class = "swTitle">DIRETOR: </span> <span class = "text-capitalize swText"><?php echo $item->director?></span></li>
                    <li><span class = "swTitle">PRODUTOR: </span> <span class = "text-capitalize swText"><?php echo $item->producer?></span></li>
                    
                    
                
             
                </ul>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="collapse multi-collapse" id="Ideol">
              <div class="card card-body swText">

              <ul class = p-0>
              <li><span class = "swTitle">RESUMO: </span> <span class = "text-capitalize swText"><?php echo $item->resume?></span></li>
    
              </div>
            </div>
          </div>
      </div>