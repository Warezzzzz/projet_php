<?php 

class Articles {
    
    public $id;
    public $titre;
    public $text;
    public $date;
    public $publie;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getPublie()
    {
        return $this->publie;
    }

    /**
     * @param mixed $publie
     */
    public function setPublie($publie)
    {
        $this->publie = $publie;
    }


   
    public function hydrate($donnees) {
        if(isset($donnees['titre'])) {
            $this->titre = $donnees['titre'];
        } else {
            $this->titre = '';
        }
    
        if(isset($donnees['text'])) {
            $this->text = $donnees['text'];
        } else {
            $this->text = '';
        }
        if(isset($donnees['date'])) {
            $this->date = $donnees['date'];
        } else {
            $this->date = '';
        }
    
        if(isset($donnees['publie'])) {
            $this->publie = $donnees['publie'];
        } else {
            $this->publie = '';
        }
    }
}
