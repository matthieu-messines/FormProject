<?php

namespace FormProject\QuestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Question")
 * @ORM\Entity
 */
class Question
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string")
     * @ORM\Intitule
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="bonneReponse", type="string")
     * @ORM\BonneReponse
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $bonneReponse;

    /**
     * @var string
     *
     * @ORM\Column(name="proposition1", type="string")
     * @ORM\Proposition1
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $proposition1;

    /**
     * @var string
     *
     * @ORM\Column(name="proposition2", type="string")
     * @ORM\Proposition2
     * @ORM\GeneratedValue(strategy="AUTO")     
     */
    private $proposition2;

    /**
     * @var string
     *
     * @ORM\Column(name="proposition3", type="string")
     * @ORM\Proposition3
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $proposition3;


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
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Question
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set bonneReponse
     *
     * @param string $bonneReponse
     *
     * @return Question
     */
    public function setBonneReponse($bonneReponse)
    {
        $this->bonneReponse = $bonneReponse;

        return $this;
    }

    /**
     * Get bonneReponse
     *
     * @return string
     */
    public function getBonneReponse()
    {
        return $this->bonneReponse;
    }

    /**
     * Set proposition1
     *
     * @param string $proposition1
     *
     * @return Question
     */
    public function setProposition1($proposition1)
    {
        $this->proposition1 = $proposition1;

        return $this;
    }

    /**
     * Get proposition1
     *
     * @return string
     */
    public function getProposition1()
    {
        return $this->proposition1;
    }

    /**
     * Set proposition2
     *
     * @param string $proposition2
     *
     * @return Question
     */
    public function setProposition2($proposition2)
    {
        $this->proposition2 = $proposition2;

        return $this;
    }

    /**
     * Get proposition2
     *
     * @return string
     */
    public function getProposition2()
    {
        return $this->proposition2;
    }

    /**
     * Set proposition3
     *
     * @param string $proposition3
     *
     * @return Question
     */
    public function setProposition3($proposition3)
    {
        $this->proposition3 = $proposition3;

        return $this;
    }

    /**
     * Get proposition3
     *
     * @return string
     */
    public function getProposition3()
    {
        return $this->proposition3;
    }
}

