<?php 
    class PlayerController {

        //appelle les fonctions à utiliser sur la page player
        public function player($id) {
       
            $player = Player::findOne($id);
           
            $shopsport = Player::findUserSport($id);

            $i= $player['s_id'];


            //Si le s_id du joueur est egal à 1,2,3 ou 4 alors on utilisera l'API possedant le même id 
            if ($i == 1) {
                $info = Api::basket($player['p_api']);
            } elseif ($i == 2) {
                $info = Api::football($player['p_api']);
            } elseif ($i == 3) {
                $info = Api::nhl($player['p_api']);
            } elseif ($i == 4) {
                $info = Api::nfl($player['p_api']);
            }


        
            

            view('pages.player',compact('player','shopsport','info'));
        }
    
        public function allplayer() {
           
            $players = Player::findAll();
    
    
            view('pages.allplayer',compact('players'));
        }



    }