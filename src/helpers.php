<?php

use Scool\Foundation\Location;

if (! function_exists('seed_locations')) {
    /**
     * Seed locations.
     */
    function seed_locations()
    {
        first_or_create_location('20.2','Aula 20.2');
        first_or_create_location('20.3','Aula 20.3');
        first_or_create_location('20.4','Aula 20.4');
        //TODO
    }
}

if (! function_exists('obtainLocationIdByCode')) {
    /**
     * Obtain location id by code.
     *
     * @param $code
     * @param $name
     * @return mixed
     */
    function obtainLocationIdByCode($code, $name)
    {
        return Location::where('code', $code)->first()->id;
    }
}

if (! function_exists('first_or_create_location')) {
    /**
     * Create location if not exists and return new o already existing location.
     *
     * @param $code
     * @param $name
     * @return mixed
     */
    function first_or_create_location($code, $name)
    {
        try {
            $law = Location::create([
                'code' => $code,
                'name' => $name,
            ]);
            return $law;
        } catch (Illuminate\Database\QueryException $e) {
            return Location::where([
                ['code', '=', $code]
            ]);
        }
    }
}
