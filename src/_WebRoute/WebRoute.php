<?php
namespace App\_WebRoute;
class WebRoute {
    public static function webroutes()
    {
        return [
            [
                'methode'=>"GET",
                'url'=>"",
                "controller"=>"Acceuil",
                "action"=>""
            ],
            [
                'methode'=>"GET",
                'url'=>"acceuil",
                "controller"=>"Acceuil",
                "action"=>""
            ],
            [
                'methode'=>"GET",
                'url'=>"formation",
                "controller"=>"Formation",
                "action"=>""
            ],
            [
                'methode'=>"GET",
                'url'=>"condition_admission",
                "controller"=>"ConditionAd",
                "action"=>""
            ],

        ];
    }
}



?>