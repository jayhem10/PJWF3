<?php 
    class AdminController {

        public function __construct() {
            // redirection de l'utilisateur s'il n'est pas connecté
            //if (!user::isConnect()){
            //    redirectTo('user');
            //}
        }


        public function addSport() {
            
            $genres = Sports::getAllSelect();

            $form = new Form($_POST);

            $form->input('text', "nom", "Nom")->required()
                ->input('text', "image", "Image du jeu video")->required()
                ->input('select', "genre", "Genre", $genres )->required()
                ->submit('enregistrer');

            $formulaireHtml = $form->getForm();
    
            $formValid  = false;
            $errors     = false; 
    
            // si le formulaire est validé 
            if (!empty($_POST)) {
                
                if($form->valid()){
    
                    // formulaire valide
                    $formValid = true;
                
                    // Enregistrement des données
                    // insertion des données via le model Jeuvideo 
                    $id = Jeuvideo::save([
                        "jv_nom"     => $_POST['nom'],
                        "jv_slug"    => slugify($_POST['nom']),
                        "jv_image"   => $_POST['image'],
                        "genre_id"   => $_POST['genre']
                    ]);
    
                    // redirection apres ajout en BDD 
                    redirectTo('jeuvideo/'.$id.'/'.slugify($_POST['nom']));
    
                } else {
                    // affichage des erreurs 
                    $errors =  $form->displayErrors();
                }
            }

            view('admin.user', compact('formulaireHtml', 'errors'));
        }


        public function updateJeuvideo($id) {

            // je recupere les informations du jeu que je veux modifier
            $jeuvideo = Jeuvideo::findOne($id);

            // je recupere les information pour mon champ select
            $genres = Genre::getAllSelect();

            // je donne a mon formulaire les information que je veux modifier
            $form = new Form($jeuvideo);
            if (!empty($_POST)) {
                $form = new Form($_POST);
            }
            $form->input('text', "jv_nom", "Nom")->required()
                ->input('text', "jv_image", "Image du jeu video")->required()
                ->input('select', "genre_id", "Genre", $genres )->required()
                ->submit('enregistrer');

            $formulaireHtml = $form->getForm();
    
            $formValid  = false;
            $errors     = false; 
    
            // si le formulaire est validé 
            if (!empty($_POST)) {
                
                if($form->valid()){
    
                    // formulaire valide
                    $formValid = true;
                
                    // Enregistrement des données
                    // modification des données via le model Jeuvideo 
                    Jeuvideo::update([
                        "jv_nom"     => $_POST['jv_nom'],
                        "jv_slug"    => slugify($_POST['jv_nom']),
                        "jv_image"   => $_POST['jv_image'],
                        "genre_id"   => $_POST['genre_id']
                    ], $id);

                    // redirection apres ajout en BDD 
                    redirectTo('admin/jeuvideo/modify/'.$id);
    
                } else {
                    // affichage des erreurs 
                    $errors =  $form->displayErrors();
                }
            }

            view('admin.addjeuvideo', compact('formulaireHtml', 'errors'));
        }


        public function deleteJeuvideo( $id ) {

            // suppression du jeu video 
            Jeuvideo::delete($id);

            $_SESSION['delete'] = true;

            // redirection ver la page utilisateur
            redirectTo('admin');
        }

    }

