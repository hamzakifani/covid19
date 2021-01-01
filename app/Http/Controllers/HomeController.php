<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        
            $http = new \GuzzleHttp\Client;
            $States = $http->get('https://services3.arcgis.com/hjUMsSJ87zgoicvl/arcgis/rest/services/Covid_19/FeatureServer/5/query?where=1%3D1&outFields=Cas_confirm%C3%A9s,D%C3%A9c%C3%A9d%C3%A9s,Negative_tests,Cas_confirm%C3%A9s_par_jour,Cas_d%C3%A9c%C3%A9d%C3%A9s_par_jour,R%C3%A9tablis_par_jour,Cumul_des_tests,Tests_pas_jour,Retablis&outSR=4326&f=json', [
                'headers'=>[
                    'Accept' => 'application/json',
                ]
            ]);

            $json_States =  json_decode((string) $States->getBody(), true);

            $collection = collect($json_States['features']);
    
            $Values =  $collection->pluck('attributes')->last();


            //Get Data By Regions

            $Regions = $http->get('https://services3.arcgis.com/hjUMsSJ87zgoicvl/arcgis/rest/services/Covid_19/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json', [
                'headers'=>[
                    'Accept' => 'application/json',
                ]
            ]);

            $json_Regions =  json_decode((string) $Regions->getBody(), true);

            $collection = collect($json_Regions['features']);
    
            $Values_Regions =  $collection->pluck('attributes');

            foreach($Values_Regions as $reg){
                $item['name_reg'] = $reg['RegionFr'];
                $item['Cases'] = $reg['Cases'];
                $data_reg[] = $item;
            }

            // dd($data_reg);
            return view('layouts.master',compact('Values','data_reg'));

    }
}
