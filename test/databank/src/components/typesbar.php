<ul class="nav swTitle  bar  m-0 p-0 justify-content-center text-uppercase">

        <li class="nav-item   ">
            <a class="nav-link  text-reset" href="../src/index.php?theme=Geral">Geral</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link text-reset" href="../src/index.php?theme=Series">Series</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link  text-reset" href="../src/index.php?theme=Filmes">Filmes</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link active text-reset" href="../src/index.php?theme=Personagens">Personagens</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link active text-reset" href="../src/index.php?theme=Veiculos">Veiculos</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link active text-reset" href="../src/index.php?theme=Especies">Especies</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link active text-reset" href="../src/index.php?theme=Planetas">Planetas</a>
        </li>
        <?php 
           $cringe =  $_GET['theme'];                        
           if($cringe == "Personagens"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allCharacters.json";
            }
            if($cringe == "Veiculos"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allVehicles.json";
            }
            if($cringe == "Especies"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allSpecies.json";
            }
            if($cringe == "Planetas"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allPlanets.json";
            }
            if($cringe == "Series"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allSeries.json";
            }
            if($cringe == "Filmes"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allFilms.json";
            }
            if($cringe == "Geral"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allItems.json";
            }
        ?>.
    </ul>