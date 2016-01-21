<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NoteRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Note
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
     * @ORM\Column(name="noteSubject", type="string", length=255)
     */
    private $noteSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="noteBody", type="string", length=255)
     */
    private $noteBody;

    /**
     * @var string
     *
     * @ORM\Column(name="noteAuthor", type="string", length=255)
     */
    private $noteAuthor;

    /**
     * @var int
     *
     * @ORM\Column(name="noteBodyCharCount", type="integer", nullable=true)
     */
    private $noteBodyCharCount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="noteDateTime", type="datetime", nullable=true)
     */
    private $noteDateTime;


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
     * Set noteSubject
     *
     * @param string $noteSubject
     *
     * @return Note
     */
    public function setNoteSubject($noteSubject)
    {
        $this->noteSubject = $noteSubject;

        return $this;
    }

    /**
     * Get noteSubject
     *
     * @return string
     */
    public function getNoteSubject()
    {
        return $this->noteSubject;
    }

    /**
     * Set noteBody
     *
     * @param string $noteBody
     *
     * @return Note
     */
    public function setNoteBody($noteBody)
    {
        $this->noteBody = $noteBody;
        $this->setNoteBodyCharCount($this->$noteBody);

        return $this->noteBody;
    }

    /**
     * Get noteBody
     *
     * @return string
     */
    public function getNoteBody()
    {
        return $this->noteBody;
    }

    /**
     * Set noteAuthor
     *
     * @param string $noteAuthor
     *
     * @return Note
     */
    public function setNoteAuthor($noteAuthor)
    {
        $this->noteAuthor = $noteAuthor;

        return $this;
    }

    /**
     * Get noteAuthor
     *
     * @return string
     */
    public function getNoteAuthor()
    {
        return $this->noteAuthor;
    }

    /**
     * Set noteBodyCharCount
     *
     * @param integer $noteBodyCharCount
     *
     * @return Note
     */
    public function setNoteBodyCharCount($noteBodyCharCount)
    {
        $this->noteBodyCharCount = strlen($this->$noteBodyCharCount);

        return $this;
    }

    /**
     * Get noteBodyCharCount
     *
     * @return int
     */
    public function getNoteBodyCharCount()
    {
        return $this->noteBodyCharCount;
    }

    /**
     * Set noteDateTime
     *
     * @ORM\PrePersist
     * @param \DateTime $noteDateTime
     *
     * @return Note
     */
    public function setNoteDateTime()
    {
        if(!isset($this->noteDateTime))
        $this->noteDateTime = new \DateTime();

        return $this;
    }

    /**
     * Get noteDateTime
     *
     * @return \DateTime
     */
    public function getNoteDateTime()
    {
        return $this->noteDateTime;
    }
}

