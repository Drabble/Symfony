<?php

namespace Portfolio\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Study
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Portfolio\PortfolioBundle\Entity\StudyRepository")
 */
class Study
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Dates", type="string", length=255)
     */
    private $dates;

    /**
     * @var string
     *
     * @ORM\Column(name="Enterprise", type="string", length=255)
     */
    private $enterprise;

    /**
     * @var string
     *
     * @ORM\Column(name="Link", type="string", length=255)
     */
    private $link;


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
     * Set title
     *
     * @param string $title
     * @return Study
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set dates
     *
     * @param string $dates
     * @return Study
     */
    public function setDates($dates)
    {
        $this->dates = $dates;
    
        return $this;
    }

    /**
     * Get dates
     *
     * @return string 
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Set enterprise
     *
     * @param string $enterprise
     * @return Study
     */
    public function setEnterprise($enterprise)
    {
        $this->enterprise = $enterprise;
    
        return $this;
    }

    /**
     * Get enterprise
     *
     * @return string 
     */
    public function getEnterprise()
    {
        return $this->enterprise;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Study
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
}
