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

    public function signin() {
            
        //$nom = User::signin();

        $form = new Form($_POST);

        $form->input("select", 'civilite', 'Civilité', [1=>'M', 2=>'Mme', 3=>'Mlle'])->required()
            ->input('text', "nom", "Nom")->required()
            ->input('text', "prenom", "Prénom")->required()
            ->input('text', "email", "E-mail")->required()
            ->input('password', 'password', 'Mot de passe')->required()
            ->input('password', 'password2', 'Confirmer mot de passe')->required()
            ->submit('S\'inscrire');

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
                    "usr_slug"    => slugify($_POST['nom']),
                    "usr_prenom"   => $_POST['prenom'],
                    "usr_email"   => $_POST['email']
                ]);

                // redirection apres ajout en BDD 
                redirectTo('user/'.$id.'/'.slugify($_POST['nom']));

            } else {
                // affichage des erreurs 
                $errors =  $form->displayErrors();
            }
        }

        view('pages.login', compact('formulaireHtml', 'errors', 'formValid'));
    }




    //FONCTOIN LOGIN

    public function login() {

        $form = new Form($_POST);

        $form->input('text', 'email', 'E-mail')->required()
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
                redirectTo('admin');
            }else {
                $errors = alert('Identifiants incorrects');
            }

        } else {
            // affichage des erreurs 
            $errors =  $form->displayErrors();
        }

        view('pages.login', compact('formulaireHtml', 'formValid', 'errors'));
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