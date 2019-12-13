<?php

/**
 * Nous allons utiliser des méthodes issues de Db, nous disons que Article
 * est une classe enfant, elle hérite de la classe Db 
 */
class Player extends Db {

    /**
     * Proprietés 
     */
    protected $id;

    /**
     * Constantes
     * Nous pouvons aussi définir des constantes. Ici, il s'agit du nom de la table. Ainsi, s'il venait à changer, nous n'aurons plus qu'à le changer à cet endroit.
     */
    const TABLE_NAME = "player";
    const PRIMARY_KEY = "p_id";

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

    // ENVOI TOUS LES USERS
    public static function findAll() {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT *
                            FROM '. self::TABLE_NAME.'
                            LIMIT 0 , 1');

        // je l'execute 
        $query->execute();

        // je retourne la liste d'articles
        return $query->fetchAll(PDO::FETCH_ASSOC);       
    }

// ENVOI LES INFOS DE L'USER PAR SON ID SEULEMENT
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

    // ENVOI LES INFOS DE LA TABLE SPORT EN FONCTION DE L'ID User
    public static function findSportByUserId(int $id) {

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

        // ENVOI LES INFOS DE LA TABLE SPORT EN FONCTION DE L'ID User
        public static function nomSport() {

            $bdd = Db::getDb();
    
            $query = $bdd->prepare('SELECT *
                                FROM sport');
    
            // je l'execute 
            $query->execute();
    
            // je retourne la liste d'articles
            $sport = $query->fetchAll(PDO::FETCH_ASSOC);

            return $sport;
    
        }

        public static function getAllSelect() {

            $genres = self::nomSport();
    
            $genreSelect = [];
    
            foreach ($genres as $value) {
    
                $genreSelect[$value['s_id']] = $value['nom_sport'];
                
            }
    
            // je retourne la liste d'articles
            return $genreSelect;     
        }
    
    // ENVOI L'UTILISATEUR PAR ID ET LA TABLE SPORT EN RELATION
    public static function findUserSport(int $id) {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT * 
                            FROM '. self::TABLE_NAME .'
                            INNER JOIN sport ON s_id = id_sport
                            WHERE usr_id = :id');

        // je l'execute 
        $query->execute([
            'id' => $id
        ]);

        // je retourne la liste d'articles
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }


    //CONNEXION A SON ESPACE
    public static function connect($email, $password) {

        $bdd = Db::getDb();
            
            // je verifie si l'e-mail est présent en BDD 
            $query = $bdd->prepare('SELECT * 
                                    FROM '. self::TABLE_NAME .'
                                    INNER JOIN sport ON id_sport = s_id
                                    WHERE usr_email = ?');
        
            // j'execute ma requete 
            $query->execute([
                $email
            ]);
         
            $user = $query->fetch(PDO::FETCH_ASSOC);

        
            // si j'ai un utilisateur correspondant à l'email 
            if ($user) {
        
                // je vérifie si le MDP tapé correspond à la clé de hashage 
                $verify = password_verify($password, $user['usr_password']);
        
                if ($verify) {
                    // connecté
                    unset($user['usr_password']);
                    // je stock les infos user dans une variable de session 
                    $_SESSION['user'] = $user;
                    redirectTo('user');    
            
                }
                else {
                    // je retourne false si le password est incorect 
                    $errors = false;
                }
            }
        
        }

        //creation d'un nouvel utilisateur en BDD

        public static function signin($data) {

            $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
    
            return $nouvelId;
        }




        
 
} 