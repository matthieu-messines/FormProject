<?php

namespace FormProject\QuestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 */
class Questionnaire
{
    /**
     * @var int
     *
     */
    private $id;

    /**
     * @var array
     *
     */
    private $question1;

    /**
     * @var array
     *
     */
    private $question2;

    /**
     * @var array
     *
     */
    private $question3;

    /**
     * @var array
     *
     */
    private $question4;

    /**
     * @var array
     *
     */
    private $question5;

    /**
     * @var array
     *
     */
    private $question6;

    /**
     * @var array
     *
     */
    private $question7;

    /**
     * @var array
     *
     */
    private $question8;

    /**
     * @var array
     *
     */
    private $question9;

    /**
     * @var array
     *
     */
    private $question10;

    public function getNbPoints(){
        $result=0;
        if($this->question1==true)
            $result++;
        if($this->question2==true)
            $result++;
        if($this->question3==true)
            $result++;
        if($this->question4==true)
            $result++;
        if($this->question5==true)
            $result++;
        if($this->question6==true)
            $result++;
        if($this->question7==true)
            $result++;
        if($this->question8==true)
            $result++;
        if($this->question9==true)
            $result++;
        if($this->question10==true)
            $result++;
        return $result;
    }

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
     * Set question1
     *
     * @param array $question1
     *
     * @return Questionnaire
     */
    public function setQuestion1($question1)
    {
        $this->question1 = $question1;

        return $this;
    }

    /**
     * Get question1
     *
     * @return array
     */
    public function getQuestion1()
    {
        return $this->question1;
    }

    /**
     * Set question2
     *
     * @param array $question2
     *
     * @return Questionnaire
     */
    public function setQuestion2($question2)
    {
        $this->question2 = $question2;

        return $this;
    }

    /**
     * Get question2
     *
     * @return array
     */
    public function getQuestion2()
    {
        return $this->question2;
    }

    /**
     * Set question3
     *
     * @param array $question3
     *
     * @return Questionnaire
     */
    public function setQuestion3($question3)
    {
        $this->question3 = $question3;

        return $this;
    }

    /**
     * Get question3
     *
     * @return array
     */
    public function getQuestion3()
    {
        return $this->question3;
    }

    /**
     * Set question4
     *
     * @param array $question4
     *
     * @return Questionnaire
     */
    public function setQuestion4($question4)
    {
        $this->question4 = $question4;

        return $this;
    }

    /**
     * Get question4
     *
     * @return array
     */
    public function getQuestion4()
    {
        return $this->question4;
    }

    /**
     * Set question5
     *
     * @param array $question5
     *
     * @return Questionnaire
     */
    public function setQuestion5($question5)
    {
        $this->question5 = $question5;

        return $this;
    }

    /**
     * Get question5
     *
     * @return array
     */
    public function getQuestion5()
    {
        return $this->question5;
    }

    /**
     * Set question6
     *
     * @param array $question6
     *
     * @return Questionnaire
     */
    public function setQuestion6($question6)
    {
        $this->question6 = $question6;

        return $this;
    }

    /**
     * Get question6
     *
     * @return array
     */
    public function getQuestion6()
    {
        return $this->question6;
    }

    /**
     * Set question7
     *
     * @param array $question7
     *
     * @return Questionnaire
     */
    public function setQuestion7($question7)
    {
        $this->question7 = $question7;

        return $this;
    }

    /**
     * Get question7
     *
     * @return array
     */
    public function getQuestion7()
    {
        return $this->question7;
    }

    /**
     * Set question8
     *
     * @param array $question8
     *
     * @return Questionnaire
     */
    public function setQuestion8($question8)
    {
        $this->question8 = $question8;

        return $this;
    }

    /**
     * Get question8
     *
     * @return array
     */
    public function getQuestion8()
    {
        return $this->question8;
    }

    /**
     * Set question9
     *
     * @param array $question9
     *
     * @return Questionnaire
     */
    public function setQuestion9($question9)
    {
        $this->question9 = $question9;

        return $this;
    }

    /**
     * Get question9
     *
     * @return array
     */
    public function getQuestion9()
    {
        return $this->question9;
    }

    /**
     * Set question10
     *
     * @param array $question10
     *
     * @return Questionnaire
     */
    public function setQuestion10($question10)
    {
        $this->question10 = $question10;

        return $this;
    }

    /**
     * Get question10
     *
     * @return array
     */
    public function getQuestion10()
    {
        return $this->question10;
    }
}

