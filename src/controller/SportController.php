<?php 
    class SportController {

        public function all() {
            // appel a la BDD 
            $genres = Genre::findAll();

            view('exemple.all', compact('genres'));
        }


    }