function getRequest(url){
    let request = new XMLHttpRequest()
    request.open("GET", url, false)
    request.send()
    return request.responseText
}

function showOnScreen(objectToShow){        
    item = document.createElement("ul");
    itemImage = document.createElement("ul");
    itemName = document.createElement("ul");

    itemImage.innerHTML = objectToShow.age;
    itemName.innerHTML = objectToShow.name;

    item.appendChild(itemImage);
    item.appendChild(itemName);

    return item;
}

function main(){
    
    characterData = getRequest("https://matheusmunizera.github.io/swAPI/api/allCharacters.json")
    characters = JSON.parse(characterData)
    seriesData = getRequest("https://matheusmunizera.github.io/swAPI/api/allSeries.json")
    series = JSON.parse(seriesData) 
    movieData = getRequest("https://matheusmunizera.github.io/swAPI/api/allFilms.json")
    movie = JSON.parse(movieData)
    vehicleData = getRequest("https://matheusmunizera.github.io/swAPI/api/allVehicles.json")
    vehicle = JSON.parse(vehicleData)
    specieData = getRequest("https://matheusmunizera.github.io/swAPI/api/allSpecies.json")
    specie = JSON.parse(specieData)
    planetData = getRequest("https://matheusmunizera.github.io/swAPI/api/allPlanets.json")
    planet = JSON.parse(planetData)        

    
    bank = document.getElementById("bankItem");           
    characters.forEach(element => {                   
        item = showOnScreen(element);
        bank.appendChild(item);
    }); 
}

main()