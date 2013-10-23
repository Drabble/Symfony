<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/test_blog')) {
            // testblog_index
            if ($pathinfo === '/test_blog/blog') {
                return array (  '_controller' => 'test\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'testblog_index',);
            }

            if (0 === strpos($pathinfo, '/test_blog/a')) {
                // testblog_accueil
                if ($pathinfo === '/test_blog/accueil') {
                    return array (  '_controller' => 'test\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'testblog_accueil',);
                }

                // testblog_voir
                if (0 === strpos($pathinfo, '/test_blog/article') && preg_match('#^/test_blog/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'testblog_voir')), array (  '_controller' => 'test\\BlogBundle\\Controller\\BlogController::voirAction',));
                }

                // testblog_ajouter
                if ($pathinfo === '/test_blog/ajouter') {
                    return array (  '_controller' => 'test\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'testblog_ajouter',);
                }

            }

            // testblog_modifier
            if (0 === strpos($pathinfo, '/test_blog/modifier') && preg_match('#^/test_blog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'testblog_modifier')), array (  '_controller' => 'test\\BlogBundle\\Controller\\BlogController::modifierAction',));
            }

            // testblog_supprimer
            if (0 === strpos($pathinfo, '/test_blog/supprimer') && preg_match('#^/test_blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'testblog_supprimer')), array (  '_controller' => 'test\\BlogBundle\\Controller\\BlogController::supprimerAction',));
            }

        }

        // Portfolio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Portfolio');
            }

            return array (  '_controller' => 'Portfolio\\PortfolioBundle\\Controller\\PortfolioController::indexAction',  '_route' => 'Portfolio',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
