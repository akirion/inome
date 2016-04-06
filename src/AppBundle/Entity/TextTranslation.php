<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TextTranslation
 *
 * @ORM\Table(name="text_translation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TextTranslationRepository")
 */
class TextTranslation
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
     * @var int
     *
     * @ORM\Column(name="text_id", type="integer")
     */
    private $textId;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=255)
     */
    private $local;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set textId
     *
     * @param integer $textId
     * @return TextTranslation
     */
    public function setTextId($textId)
    {
        $this->textId = $textId;

        return $this;
    }

    /**
     * Get textId
     *
     * @return integer 
     */
    public function getTextId()
    {
        return $this->textId;
    }

    /**
     * Set local
     *
     * @param string $local
     * @return TextTranslation
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string 
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return TextTranslation
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}
