<?php

namespace FormProject\ScoreBundle\Entity;

/**
 * Score
 */
class Score
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $nbQuestion;

    /**
     * @var int
     */
    private $nbReponse;

    /**
     * @var int
     */
    private $score;
    
    /**
     * @var integer
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="idUser",  referencedColumnName="id", nullable=false)
     */
    private $idUser;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nbQuestion
     *
     * @param integer $nbQuestion
     *
     * @return Score
     */
    public function setNbQuestion($nbQuestion)
    {
        $this->nbQuestion = $nbQuestion;

        return $this;
    }

    /**
     * Get nbQuestion
     *
     * @return int
     */
    public function getNbQuestion()
    {
        return $this->nbQuestion;
    }

    /**
     * Set nbReponse
     *
     * @param integer $nbReponse
     *
     * @return Score
     */
    public function setNbReponse($nbReponse)
    {
        $this->nbReponse = $nbReponse;

        return $this;
    }

    /**
     * Get nbReponse
     *
     * @return int
     */
    public function getNbReponse()
    {
        return $this->nbReponse;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Score
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Score
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    public function __toString()
    {
        return 'My string version of UserCategory'; // if you have a name property you can do $this->getName();
    }
}

