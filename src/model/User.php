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
    public function __construct( $id = null ) {

        /**
         * Pour chaque argument, on utilise les Setters pour attribuer la valeur à l'objet.
         * Pour appeler une méthode non statique de la classe DANS la classe, on utilise $this.
         */
        if ( $id != null ) {
            $this->setId($id);
        }
    }

     /**
     * CRUD Methods
     */
    public static function save($data) {

        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);

        return $nouvelId;
    }

    public static function update($data, $id) {

        Db::dbUpdate(self::TABLE_NAME, 
                        $data, 
                        [self::PRIMARY_KEY => $id]);

        return;
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
    
    public static function connect($email, $password) {

        $bdd = Db::getDb();

        // je verifie si l'email existe dans ma table User 
        $query = $bdd->prepare('SELECT *
                            FROM '. self::TABLE_NAME .' 
                            WHERE usr_email = :email');
 
        $query->execute([
            'email' => $email
        ]);

        // je retourne les info user 
        $userInfo = $query->fetch(PDO::FETCH_ASSOC);
        
        if ($userInfo) {
            if (password_verify( $password, $userInfo['usr_password'])) {
                // le pswd et le mail sont corrects
                $_SESSION['USER'] = $userInfo; 

                return true; 
            } else {
                // le mot de passe est incorrect 
                return false; 
            }
        }
        else {
            // l'email n'existe pas dans la table User
            return false; 
        }

    }


    //quand l'utilisateur s'inscrit

    public static function signin($email, $password) {

        $bdd = Db::getDb();

        // je verifie si l'email existe dans ma table User 
        $query = $bdd->prepare('SELECT *
                            FROM '. self::TABLE_NAME .' 
                            WHERE usr_email = :email');
 
        $query->execute([
            'email' => $email
        ]);

        // je retourne les info user 
        $userInfo = $query->fetch(PDO::FETCH_ASSOC);
        
        if ($userInfo) {
            if (password_verify( $password, $userInfo['usr_password'])) {
                // le pswd et le mail sont corrects
                $_SESSION['USER'] = $userInfo; 

                return true; 
            } else {
                // le mot de passe est incorrect 
                return false; 
            }
        }
        else {
            // l'email n'existe pas dans la table User
            return false; 
        }

    }

    public static function logout() {

        session_destroy();

    }

    public static function isConnect() {

        if (!isset($_SESSION['USER'])) {
            return false;
        }

        return true;

    }

} 