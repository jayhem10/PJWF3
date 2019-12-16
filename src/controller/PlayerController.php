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


    }