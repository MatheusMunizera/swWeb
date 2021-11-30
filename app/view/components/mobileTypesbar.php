

<ul class="nav swTitle  bar  m-0 p-0 justify-content-center text-uppercase">
        <li class="nav-item">
            <a class="nav-link  text-reset" href="../pages/databank.php?type=geral" style="font-size: 10px;">Geral</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-reset" href="../pages/databank.php?type=series" style="font-size: 10px;">Series</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  text-reset" href="../pages/databank.php?type=films" style="font-size: 10px;">Filmes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-reset" href="../pages/databank.php?type=characters" style="font-size: 10px;">Personagens</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-reset" href="../pages/databank.php?type=vehicles" style="font-size: 10px;">Veiculos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-reset" href="../pages/databank.php?type=species" style="font-size: 10px;">Especies</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-reset" href="../pages/databank.php?type=planets" style="font-size: 10px;">Planetas</a>
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

