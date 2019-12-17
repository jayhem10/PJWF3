<?php 
    class PlayerController {


        public function player($id) {
       
            $player = Player::findOne($id);
           
            $shopsport = Player::findUserSport($id);

            $i= $player['s_id'];

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

        // public function getPlayerByName($nom){
    
        //     $db = getDb();
        
        //     $query = $db->prepare('SELECT p_nom 
        //                             FROM player 
        //                             WHERE p_nom LIKE :nomPlayer ');
        
        //     $query->execute([
        //         'nomPlayer' => '%'.$nom.'%'
        //     ]);
        
        //     $playersearch = $query->fetchAll(PDO::FETCH_ASSOC);
        
        //     return $playersearch;
        // }

    }