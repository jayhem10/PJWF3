<?php

// PagesController.php

class PagesController {

    /* Page d'acceuil  */ 
    public function home() {

        // données à récuperer de mon model 

        view('pages.viewHome');
    }

    public function about() {

        $var = findOne(2);


        view('pages.about', compact('var'));
    }

    public function contact() {

        $form = new Form($_POST);

        $form->input("select", 'civilite', 'Civilité', [1=>'M', 2=>'Mme', 3=>'Mlle'])->required()
            ->input('text', "nom", "Nom")->required()
            ->input('text', "prenom", "Prénom")->required()
            ->input('text', "email", "E-mail")->required()
            ->input('textarea', "message", "Message")->required()
            ->submit('enregistrer');

        $formulaireHtml = $form->getForm();

        $formValid  = false;
        $errors     = false; 

        // si le formulaire est validé 
        if($data = $form->valid()){

            // formulaire valide
            $formValid = true;

            // Enregistrement des données

        } else {
            // affichage des erreurs 
            $errors =  $form->displayErrors();
        }

        // vue de la page contact 
        view('pages.contact', compact('formulaireHtml', 'errors', 'formValid'));
    }

    //FONCTOIN LOGIN

    public function login() {

        $form = new Form($_POST);

        $form->input('text', 'email', 'E-mail')->required()
            ->input('password', 'password', 'Mot de passe')->required()
            ->submit('Se connecter');

        $formulaireHtml2 = $form->getForm();

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
                
                echo 'Incorrect';
                
                //$errors = alert('Identifiants incorrects');
            }

        } else {
            // affichage des erreurs 
            $errors =  $form->displayErrors();
        }

        view('pages.login', compact('formulaireHtml2', 'errors', 'formValid'));
    }

    //FONCTION INSCRIRE SUR LE SITE

    public function signin() {

        $sport = Sports::getAllSelect();
            
        $form = new Form($_POST);

        $form->input("select", 'civilite', 'Civilité', [1=>'M', 2=>'Mme', 3=>'Mlle'])->required()
            ->input('text', "nom", "Nom")->required()
            ->input('text', "prenom", "Prénom")->required()
            ->input('text', "email", "E-mail")->required()
            ->input('password', 'password', 'Mot de passe')->required()
            ->input('select', "sport", "Choisis ton sport favori", $sport )->required()
           // ->input('password', 'password2', 'Confirmer mot de passe')->required()
            ->submit('Inscris-toi');

        $formulaireHtml1 = $form->getForm();

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
                    "usr_password"   => $_POST['password'],
                    "nom_sport"   => $_POST['sport']
                ]);

                // redirection apres ajout en BDD 
                //redirectTo('user/'.$id.'/'.slugify($_POST['nom']));
                redirectTo('admin');

            } else {
                // affichage des erreurs 
                $errors =  $form->displayErrors();
            }
        }

        view('pages.signin', compact('formulaireHtml1', 'errors', 'formValid'));
    }


        //FONCTION LOGOUT
        
    public function logout() {

        // destruction de la session utilisateur 
        User::logout();
        // session_destroy();

        redirectTo('viewHome');
    
   
    }
    
    public function page404() {

        view('pages.404');

    }

}