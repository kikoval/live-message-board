<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="message")
 */
class Message
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /** @Column(length=20) */
    private $user;

    /** @Column(length=140) */
    private $text;

    /** @Column(type="smallint", name="status") */
    private $status = 0;

    /** @Column(type="datetime", name="posted_at") */
    private $posted_at;


    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function setPostedAt($posted_at)
    {
        $this->posted_at = $posted_at;

        return $this;
    }
}
