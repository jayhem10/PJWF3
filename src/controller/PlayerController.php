<?php 
    class PlayerController {


        public function player($id) {
       
            $player = Player::findOne($id);
    
    
            view('pages.player',compact('player'));
        }
    
        public function allplayer() {
           
            $players = Player::findAll();
    
    
            view('pages.allplayer',compact('players'));
        }

        public function getPlayerByName($nom){
    
            $db = getDb();
        
            $query = $db->prepare('SELECT p_nom 
                                    FROM player 
                                    WHERE p_nom LIKE :nomPlayer ');
        
            $query->execute([
                'nomPlayer' => '%'.$nom.'%'
            ]);
        
            $playersearch = $query->fetchAll(PDO::FETCH_ASSOC);
        
            return $playersearch;
        }

    }