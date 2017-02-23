<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/22/2017
     * Time: 10:15 PM
     */

    namespace ShawnSandy\Extras;




    use Illuminate\Support\Facades\Facade;

    class ExtrasFacade extends Facade
    {

        /**
         *
         */
        protected static function  getFacadeAccessor() {
            return "Extras";
        }

    }
