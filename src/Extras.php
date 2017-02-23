<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/22/2017
     * Time: 10:03 PM
     */

    namespace ShawnSandy\Extras;


    class Extras
    {

        public function routes(){
            require  __DIR__.'/routes.php';
        }

        public function gatMapData($address) {
            $map_address = urlencode($address);
            $map_url = "https://maps.googleapis.com/maps/api/geocode/json?address={$map_address}&key=AIzaSyArUKdQIBN_lzsFpM7JiMq0DNfD9q0qmVE";
            $map_data = json_decode(file_get_contents($map_url));
            return $map_data;
        }

        public function getView($view) {
            return \View::make("extras::partials.test");
        }

    }
