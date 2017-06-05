       <?php
       $routes = [
       'getSinglePlanet',
       'getPlanets',
       'getSingleSpecies',
       'getSpecies',
       'getSingleVehicle',
       'getVehicles',
       'getSingleStarship',
       'getStarships',
       'getSingleFilm',
       'getFilms',
       'getSinglePerson',
        'getPeoples',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }

