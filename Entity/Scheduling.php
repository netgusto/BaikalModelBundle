<?php

namespace Baikal\ModelBundle\Entity;

use Baikal\ModelBundle\Entity\Calendar;

use Sabre\VObject;

class Scheduling
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $principaluri;

    /**
     * @var string
     */
    private $calendardata;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var integer
     */
    private $lastmodified;

    /**
     * @var string
     */
    private $etag;

    /**
     * @var integer
     */
    private $size;


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
     * Set principaluri
     *
     * @param string $principaluri
     * @return Event
     */
    public function setPrincipaluri($principaluri)
    {
        $this->principaluri = $principaluri;

        return $this;
    }

    /**
     * Get principaluri
     *
     * @return string 
     */
    public function getPrincipaluri()
    {
        return $this->principaluri;
    }

    /**
     * Set calendardata
     *
     * @param string $calendardata
     * @return Event
     */
    public function setCalendardata($calendardata)
    {
        $this->calendardata = $calendardata;

        return $this;
    }

    /**
     * Get calendardata
     *
     * @return string 
     */
    public function getCalendardata()
    {
        return $this->calendardata;
    }

    /**
     * Set uri
     *
     * @param string $uri
     * @return Event
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string 
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set lastmodified
     *
     * @param integer $lastmodified
     * @return Event
     */
    public function setLastmodified($lastmodified)
    {
        $this->lastmodified = $lastmodified;

        return $this;
    }

    /**
     * Get lastmodified
     *
     * @return integer 
     */
    public function getLastmodified()
    {
        return $this->lastmodified;
    }

    /**
     * Set etag
     *
     * @param string $etag
     * @return Event
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;

        return $this;
    }

    /**
     * Get etag
     *
     * @return string 
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return Event
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }
}
