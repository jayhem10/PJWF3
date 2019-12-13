<?php

// PagesController.php

class PagesController {

    /* Page d'acceuil  */ 
    public function home() {

        // données à récuperer de mon model 

        view('pages.viewHome');
    }

    public function about() {

        // Exemple pour appeler mon objet User et une requête SQL

        view('pages.aboutus');
    }

    public function user() {
       
        $user = $_SESSION['user'];



        view('pages.user',compact('user','id'));
    }


    
//Formulaire de contact de l'utilisateur + envoi message en BDD
    public function contact() {

        $form = new Form($_POST);

        $form->input('text', "nom", "Nom")->required()
            ->input('text', "prenom", "Prénom")->required()
            ->input('text', "email", "E-mail")->required()
            ->input('textarea', "message", "Message")->required()
            ->submit('Envoyer');

        $formulaireHtml = $form->getForm();

        $formValid  = false;
        $errors     = false; 

        // si le formulaire est validé 
        if (!empty($_POST)) {
            
            if($form->valid()){

                // formulaire valide
                $formValid = true;
            
                // Enregistrement des données
                // insertion des données via le model Userbase 
                $id = Contact::message([
                    "Nom"     => $_POST['nom'],
                    //"usr_slug"    => slugify($_POST['nom']),
                    "Prenom"   => $_POST['prenom'],
                    "Mail"   => $_POST['email'],
                    "Message"   => $_POST['message']
                ]);

                // redirection apres ajout en BDD 
                redirectTo('contact');
                

            } else {
                // affichage des erreurs 
                $errors =  $form->displayErrors();
            }
        }

        // vue de la page contact 
        view('pages.contact', compact('formulaireHtml', 'errors', 'formValid'));
    }

    //FONCTOIN LOGIN

    public function login() {

        $form = new Form($_POST);

        $form->input('text', 'email', 'E-mail')->required()->is_email()
            ->input('password', 'password', 'Mot de passe')->required()
            ->submit('Se connecter');

        $formulaireHtml = $form->getForm();

        $formValid  = false;
        $errors     = false; 

        // si le formulaire est validé 
        if($form->valid()){

            // formulaire valide
            $formValid = true;

            // connexion de l'utilisateur 
            $user = User::connect( $_POST['email'], $_POST['password'] );
            
            if ($user) {
                // user connecté 
                redirectTo('user');
            }else {
                                               
                //$errors = alert('Identifiants incorrects');
            }

        } else {
            // affichage des erreurs 
            $errors =  $form->displayErrors();
        }

        view('pages.login', compact('formulaireHtml', 'errors', 'formValid'));
    }

    //FONCTION INSCRIRE SUR LE SITE

    public function signin() {

        
        $sport = User::getAllSelect();
            
        $form = new Form($_POST);

        
        $form->input('text', "prenom", "Prénom")->required()
        ->input('text', "nom", "Nom")->required()
            ->input('text', "email", "E-mail")->required()
            ->input('password', 'password', 'Mot de passe')->required()
            ->input('password', 'password2', 'Confirmer mot de passe')->required()
            ->input('select', "sport", "Choisis ton sport favori", $sport )->required()
            ->submit('Inscris-toi');

        $formulaireHtml = $form->getForm();

        $formValid  = false;
        $errors     = false; 

        // si le formulaire est validé 
        if (!empty($_POST)) {
            
            if($form->valid()){

                // formulaire valide
                $formValid = true;
            
                // Enregistrement des données
                // insertion des données via le model Userbase 
                $id = User::signin([
                    "usr_nom"     => $_POST['nom'],
                    //"usr_slug"    => slugify($_POST['nom']),
                    "usr_prenom"   => $_POST['prenom'],
                    "usr_email"   => $_POST['email'],
                    "usr_password"   => password_hash( $_POST['password'], PASSWORD_DEFAULT),
                    "id_sport"   => $_POST['sport']
                ]);
                // redirection apres ajout en BDD 
                redirectTo('login');
                

            } else {
                // affichage des erreurs 
                $errors =  $form->displayErrors();
            }
        }

        view('pages.signin', compact('formulaireHtml', 'errors', 'formValid'));
    }


        //FONCTION LOGOUT
        
    public function logout() {

        if (isset($_SESSION['user'])) {
      
            // Supression des variables de session et de la session
            session_destroy();
            redirectTo('');

        }
    
   
    }
    
    public function page404() {

        view('pages.404');

    }

}