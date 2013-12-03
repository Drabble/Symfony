<?php

namespace Portfolio\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Portfolio\PortfolioBundle\Entity\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=255)
     */
    private $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;
	
	/**
	* @ORM\OneToMany(targetEntity="Portfolio\PortfolioBundle\Entity\Comment", mappedBy="article")
	*/
	private $comments;
	
	/**
	* @ORM\OneToOne(targetEntity="Portfolio\PortfolioBundle\Entity\Image", cascade={"persist"})
	*/
	private $image;

	public function __construct()
	{
		$this->image = new Image();
		$this->date = new \Datetime('now');
		$this->publication = true;
		$this->comments = new \Doctrine\Common\Collections\ArrayCollection();
	}
	 
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
     * @return Article
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
     * Set description
     *
     * @param string $description
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return Article
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    
        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }


	public function addComment(\Portfolio\PortfolioBundle\Entity\Comment $comment)
	{
		$this->comments[] = $comment;
		$comment->setArticle($this);
		return $this;
	}

	public function removeComment(\Portfolio\PortfolioBundle\Entity\Comment $comment)
	{
		$this->comments->removeElement($comment);
	}

	public function getcomments()
	{
		return $this->comments;
	}

	public function setImage(\Portfolio\PortfolioBundle\Entity\Image $image)
	{
		$this->image = $image;
		$image->setArticle($this);
		return $this;
	}

	public function removeImage(\Portfolio\PortfolioBundle\Entity\Image $image)
	{
		$this->image->removeElement($image);
	}
	
	public function getImage()
	{
		return $this->image;
	}

}