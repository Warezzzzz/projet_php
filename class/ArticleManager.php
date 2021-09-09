<?php

class ArticleManager {
    private $bdd;
    private $_result;
    private $_message;
    private $_article;
    private $_getLastInsertId;

    /**
     * @return mixed
     */
    public function getBdd()
    {
        return $this->bdd;
    }

    /**
     * @param mixed $bdd
     */
    public function setBdd($bdd)
    {
        $this->bdd = $bdd;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->_result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->_result = $result;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->_message = $message;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->_article;
    }

    /**
     * @param mixed $article
     */
    public function setArticle($article)
    {
        $this->_article = $article;
    }

    /**
     * @return mixed
     */
    public function getGetLastInsertId()
    {
        return $this->_getLastInsertId;
    }

    /**
     * @param mixed $getLastInsertId
     */
    public function setGetLastInsertId($getLastInsertId)
    {
        $this->_getLastInsertId = $getLastInsertId;
    }

    public function __construct(PDO $bdd) {
        $this->setBdd($bdd);
    }

    public function get($id) {
        $sql = "SELECT * FROM articles WHERE id = :id";
        $req = $this->bdd->prepare($sql);

        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();

        $donnees = $req->fetch(PDO::FETCH_ASSOC);

        $article = new Articles();
        $article->hydrate($donnees);
        return $article;
    }

    public function getList() {
        $listArticle = [];

        $sql = 'SELECT * FROM articles';

        $req = $this->bdd->prepare($sql);

        $req->execute();

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
            $article = new Articles();
            $article->hydrate($donnees);
            $listArticle[] = $article;
        }


        return $listArticle;
    }
}