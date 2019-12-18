<?php

/**
 * Nous allons utiliser des méthodes issues de Db, nous disons que Article
 * est une classe enfant, elle hérite de la classe Db 
 */
class Api {


    /**
     * Méthodes magiques
     */
    public function __construct(  ) {

    }

    public static function basket($player_id) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.sportsdata.io/v3/nba/stats/json/PlayerSeasonStatsByPlayer/2020/".$player_id."?key=076fbf4f77a443dcbe731f88f5bb23ff",
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Ocp-Apim-Subscription-Key: 076fbf4f77a443dcbe731f88f5bb23ff",
        "Accept: /",
        "Accept-Encoding: gzip, deflate",
        "Cache-Control: no-cache",
        "Connection: keep-alive",
        "Host: api.sportsdata.io",
        "Postman-Token: 392c67fb-e6f0-4389-b05e-6927f52be4b5,41206c5f-f2ac-4676-b119-8fc3137eebbe",
        "User-Agent: PostmanRuntime/7.19.0",
        "cache-control: no-cache"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);


        $datas = json_decode($response, true);
        // echo '<pre>';
        // var_dump($datas);




$html= '<ul>';

$html.='<li>';

$html.= 'Match joué : ' .$datas['Games'].'.';

$html.='</li>';

$html.='<li> Points/ match : ' .$datas['AssistsPercentage'].'</li>';
 
$html.='<li> Rebonds/ match : ' .$datas['TotalReboundsPercentage'].'</li>';
 
$html.='<li> Passes/ match : ' .$datas['TurnOversPercentage']. '</li>';

$html.='<li> Pourcentage aux tirs : ' .$datas['FieldGoalsPercentage']. '</li>';
       
$html.= '</ul>';
    

        return $html;



    }

    public static function nfl($player_id){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.sportsdata.io/v3/nfl/stats/json/PlayerSeasonStatsByPlayerID/2019REG/".$player_id,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Ocp-Apim-Subscription-Key: 105a3b01f091480294ac1de810755cf3",
        "Accept: /",
        "Accept-Encoding: gzip, deflate",
        "Cache-Control: no-cache",
        "Connection: keep-alive",
        "Host: api.sportsdata.io",
        "Postman-Token: 392c67fb-e6f0-4389-b05e-6927f52be4b5,41206c5f-f2ac-4676-b119-8fc3137eebbe",
        "User-Agent: PostmanRuntime/7.19.0",
        "cache-control: no-cache"
        ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);


        $datas = json_decode($response, true);
        // echo '<pre>';
        // var_dump($datas);



        $html= '<ul>';

        $html.='<li> Match joué : ' .$datas[0]['Played'].'</li>';
        
        $html.='<li> Nombre de Yards : ' .$datas[0]['PassingYards'].'</li>';
        
        $html.='<li> Pourcentage de passes complètes : ' .$datas[0]['PassingRating']. '</li>';

        $html.='<li> Interception aux lancers : ' .$datas[0]['WindSpeed']. '</li>';

        $html.='<li> Yards gagnés par passe : ' .$datas[0]['PassingYardsPerAttempt']. '</li>';
            
        $html.= '</ul>';

        return $html;

} 


public static function nhl($player_id){


    $curl = curl_init();
    curl_setopt_array($curl, array(
     CURLOPT_URL => "https://api.sportsdata.io/v3/nhl/stats/json/PlayerSeasonStatsByPlayer/2020/".$player_id,
     CURLOPT_SSL_VERIFYPEER => false,
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_ENCODING => "",
     CURLOPT_MAXREDIRS => 10,
     CURLOPT_TIMEOUT => 30,
     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
     CURLOPT_CUSTOMREQUEST => "GET",
     CURLOPT_HTTPHEADER => array(
       "Ocp-Apim-Subscription-Key: 
       890e66cd82884a62a899a4f681ef31db",
       "Accept: /",
       "Accept-Encoding: gzip, deflate",
       "Cache-Control: no-cache",
       "Connection: keep-alive",
       "Host: api.sportsdata.io",
       "Postman-Token: 392c67fb-e6f0-4389-b05e-6927f52be4b5,41206c5f-f2ac-4676-b119-8fc3137eebbe",
       "User-Agent: PostmanRuntime/7.19.0",
       "cache-control: no-cache"
     ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    $datas = json_decode($response, true);
    // echo '<pre>';
    // var_dump($datas);



    // A MODIFIER EN FONCTION DES CLE ET VALEUR

    $html= '<ul>';

    $html.='<li> Match joué : ' .$datas['Games'].'</li>';
    
    $html.='<li> Pourcentage de buts/tirs : ' .$datas['Goals'].'</li>';
    
    $html.='<li> Nombre d\'Assists : ' .$datas['Assists']. '</li>';

    $html.='<li> Buts en cage vide : ' .$datas['EmptyNetGoals']. '</li>';

    $html.='<li> Plus-Minus : ' .$datas['PlusMinus']. '</li>';
        
    $html.= '</ul>';

    return $html;

} 





public static function football($player_id){




















    
    

    // A MODIFIER EN FONCTION DES CLE ET VALEUR

    $html= '<ul>';

    $html.='<li> Match joué : ' .$datas[0]['Played'].'</li>';
    
    $html.='<li> Nombre de Yards : ' .$datas[0]['PassingYards'].'</li>';
    
    $html.='<li> Pourcentage de passes complètes : ' .$datas[0]['PassingRating']. '</li>';

    $html.='<li> Interception aux lancers : ' .$datas[0]['WindSpeed']. '</li>';

    $html.='<li> Yards gagnés par passe : ' .$datas[0]['PassingYardsPerAttempt']. '</li>';
        
    $html.= '</ul>';

    return $html;

} 

}
