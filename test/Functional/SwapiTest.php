<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');
class SwapiTest extends BaseTestCase {

    public function testListMetrics() {

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
            'getPeoples'

        ];

        foreach($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/Swapi/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file.' method');
        }
    }

}
