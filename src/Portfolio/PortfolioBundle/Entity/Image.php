<?php

namespace Portfolio\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Portfolio\PortfolioBundle\Entity\ImageRepository")
 */
class Image
{
	/**
	* @ORM\ManyToOne(targetEntity="Portfolio\PortfolioBundle\Entity\Article", inversedBy="images")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $article;
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
	
	private $file;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

	public function __construct()
	{
		$this->date = new \Datetime('now');
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
     * Set url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Image
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
     * Set date
     *
     * @param \DateTime $date
     * @return Image
     */
    public function setDate($date)
    {
        $this->date = new \DateTime("now");
    
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
     * Set article
     *
     * @param \Portfolio\PortfolioBundle\Entity\Article $article
     * @return Image
     */
    public function setArticle(\Portfolio\PortfolioBundle\Entity\Article $article)
    {
        $this->article = $article;
    
        return $this;
    }

    /**
     * Get article
     *
     * @return \Portfolio\PortfolioBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
	
	public function upload()
	{
		// Si jamais il n'y a pas de fichier (champ facultatif)
		if (null === $this->file) {
			return;
		}

		// On garde le nom original du fichier de l'internaute
		$name = $this->file->getClientOriginalName();

		// On déplace le fichier envoyé dans le répertoire de notre choix
		$this->file->move($this->getUploadRootDir(), $name);

		// On sauvegarde le nom de fichier dans notre attribut $url
		$this->url = $name;

		// On crée également le futur attribut alt de notre balise <img>
		$this->alt = $name;
	}

	public function getUploadDir()
	{
		// On retourne le chemin relatif vers l'image pour un navigateur
		return 'pictures';
	}

	protected function getUploadRootDir()
	{
		// On retourne le chemin relatif vers l'image pour notre code PHP
		return __DIR__.'/../../../../web/'.$this->getUploadDir();
	}
}