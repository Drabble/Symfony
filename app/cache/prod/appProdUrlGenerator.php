<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'testblog_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'test\\BlogBundle\\Controller\\BlogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test_blog/blog',    ),  ),  4 =>   array (  ),),
        'testblog_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'test\\BlogBundle\\Controller\\BlogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test_blog/accueil',    ),  ),  4 =>   array (  ),),
        'testblog_voir' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'test\\BlogBundle\\Controller\\BlogController::voirAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test_blog/article',    ),  ),  4 =>   array (  ),),
        'testblog_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'test\\BlogBundle\\Controller\\BlogController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test_blog/ajouter',    ),  ),  4 =>   array (  ),),
        'testblog_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'test\\BlogBundle\\Controller\\BlogController::modifierAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test_blog/modifier',    ),  ),  4 =>   array (  ),),
        'testblog_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'test\\BlogBundle\\Controller\\BlogController::supprimerAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/test_blog/supprimer',    ),  ),  4 =>   array (  ),),
        'Portfolio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Portfolio\\PortfolioBundle\\Controller\\PortfolioController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
