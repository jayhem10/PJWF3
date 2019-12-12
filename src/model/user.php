<?php

/**
 * Nous allons utiliser des méthodes issues de Db, nous disons que Article
 * est une classe enfant, elle hérite de la classe Db 
 */
class User extends Db {

    /**
     * Proprietés 
     */
    protected $id;

    /**
     * Constantes
     * Nous pouvons aussi définir des constantes. Ici, il s'agit du nom de la table. Ainsi, s'il venait à changer, nous n'aurons plus qu'à le changer à cet endroit.
     */
    const TABLE_NAME = "user";
    const PRIMARY_KEY = "usr_id";

    /**
     * Méthodes magiques
     */
    public function __construct(  ) {

        /**
         * Pour chaque argument, on utilise les Setters pour attribuer la valeur à l'objet.
         * Pour appeler une méthode non statique de la classe DANS la classe, on utilise $this.
         */
    }

     /**
     * CRUD Methods
     */
    public static function save($data) {

        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);

        return $nouvelId;
    }

    public static function update($data, $id) {

        $id = Db::dbUpdate(self::TABLE_NAME, 
                        $data, 
                        [self::PRIMARY_KEY => $id]);

        return $id;
    }

    public static function delete($id) {

        Db::dbDelete(self::TABLE_NAME, [self::PRIMARY_KEY => $id ]);
        
        return;
    }

    public static function findAll() {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT *
                            FROM '. self::TABLE_NAME);

        // je l'execute 
        $query->execute();

        // je retourne la liste d'articles
        return $query->fetchAll(PDO::FETCH_ASSOC);       
    }

    public static function findOne(int $id) {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT *
                            FROM '. self::TABLE_NAME .' 
                            WHERE '.self::PRIMARY_KEY.' = :id');

        // je l'execute 
        $query->execute([
            'id' => $id
        ]);

        // je retourne la liste d'articles
        return $query->fetch(PDO::FETCH_ASSOC);

    }

    public static function find(int $id) {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT *
                            FROM sport
                            WHERE s_id = :id');

        // je l'execute 
        $query->execute([
            'id' => $id
        ]);

        // je retourne la liste d'articles
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
    
    public static function plateformeAvailable(int $id) {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT * 
                            FROM sport
                            INNER JOIN user ON s_id = id_sport
                            WHERE s_id = :id');

        // je l'execute 
        $query->execute([
            'id' => $id
        ]);

        // je retourne la liste d'articles
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function connect($email, $password) {

        $bdd = Db::getDb();
            
            // je verifie si l'e-mail est présent en BDD 
            $query = $bdd->prepare('SELECT * 
                                    FROM user 
                                    WHERE usr_email = ?');
        
            // j'execute ma requete 
            $query->execute([
                $email
            ]);
         
            $user = $query->fetch(PDO::FETCH_ASSOC);

        
            // si j'ai un utilisateur corresspondant à l'email 
            if ($user) {
        
                // je vérifie si le MDP tapé correspond à la clé de hashage 
                $verify = password_verify($password, $user['usr_password']);
        
                if ($verify) {
                    // connecté
                    unset($user['usr_password']);
                    // je stock les infos user dans une variable de session 
                    $_SESSION['user'] = $user;
                    redirectTo('admin');    
                    
        
                    // je retourne les infos utilisateur 
                    return $user;
            
                }
                else {
                    // je retourne false si le password est incorect 
                    $errors = false;
                }
            }
        
        }

        public function signin() {
            
            //$nom = User::signin();
    
            $form = new Form($_POST);
    
           
            $form->input('text', "nom", "Nom")->required()
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

        
 
} 