<?php

/**
 * Nous allons utiliser des méthodes issues de Db, nous disons que Article
 * est une classe enfant, elle hérite de la classe Db 
 */
class Jeuvideo extends Db {

    /**
     * Proprietés 
     */
    protected $id;
    protected $nom;
    protected $slug;
    protected $image;

    /**
     * Constantes
     * Nous pouvons aussi définir des constantes. Ici, il s'agit du nom de la table. Ainsi, s'il venait à changer, nous n'aurons plus qu'à le changer à cet endroit.
     */
    const TABLE_NAME = "jeuvideo";
    const PRIMARY_KEY = "jv_id";

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
                            INNER JOIN genre ON jeuvideo.genre_id = genre.g_id
                            WHERE '.self::PRIMARY_KEY.' = :idJV');

        // je l'execute 
        $query->execute([
            'idJV' => $id
        ]);

        // je retourne la liste d'articles
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function findMedias(int $id) {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT *
                            FROM jeuvideo_media 
                            WHERE jeuvideo_id = :jvid');

        // je l'execute 
        $query->execute([
            'jvid' => $id
        ]);

        // je retourne la liste d'articles
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
    
    public static function plateformeAvailable(int $id) {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT * 
                            FROM plateforme
                            INNER JOIN jeuvideo_plateforme ON jeuvideo_plateforme.plateforme_id = plateforme.p_id
                            WHERE jeuvideo_id = :id');

        // je l'execute 
        $query->execute([
            'id' => $id
        ]);

        // je retourne la liste d'articles
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function sameAs($id, $genre_id) {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT *
                            FROM '. self::TABLE_NAME .'
                            WHERE jv_id != :id
                            AND genre_id = :genre
                            ORDER BY RAND()
                            LIMIT 0, 2');

        // je l'execute 
        $query->execute([
            'id' => $id, 
            'genre' => $genre_id
        ]);

        // je retourne la liste d'articles
        return $query->fetchAll(PDO::FETCH_ASSOC);       
    }
    

    
    /**
     * Get propietés
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set propietés
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of slug
     */ 
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     *
     * @return  self
     */ 
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
} 