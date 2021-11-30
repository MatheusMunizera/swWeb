<ul class="nav swTitle  bar  m-0 p-0 justify-content-center text-uppercase">

        <li class="nav-item   ">
            <a class="nav-link  text-reset" href="../pages/databank.php?type=geral">Geral</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link text-reset" href="../pages/databank.php?type=series">Series</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link  text-reset" href="../pages/databank.php?type=films">Filmes</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link  text-reset" href="../pages/databank.php?type=characters">Personagens</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link  text-reset" href="../pages/databank.php?type=vehicles">Veiculos</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link  text-reset" href="../pages/databank.php?type=species">Especies</a>
        </li>
        <li class="nav-item  ">
            <a class="nav-link  text-reset" href="../pages/databank.php?type=planets">Planetas</a>
        </li>
        <?php 
           $type =  $_GET['type'];                        
           if($type == "characters"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allCharacters.json";
            }
            if($type == "vehicles"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allVehicles.json";
            }
            if($type == "species"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allSpecies.json";
            }
            if($type == "planets"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allPlanets.json";
            }
            if($type == "series"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allSeries.json";
            }
            if($type == "films"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allFilms.json";
            }
            if($type == "geral"){
                $request = "https://matheusmunizera.github.io/swAPI/api/allItems.json";
            }
        ?>
    </ul>