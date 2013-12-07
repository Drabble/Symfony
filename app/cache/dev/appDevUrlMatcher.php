<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

        if (0 === strpos($pathinfo, '/a')) {
            // AddArticle
            if ($pathinfo === '/addArticle') {
                return array (  '_controller' => 'Portfolio\\PortfolioBundle\\Controller\\PortfolioController::addArticleAction',  '_route' => 'AddArticle',);
            }

            // Articles
            if ($pathinfo === '/articles') {
                return array (  '_controller' => 'Portfolio\\PortfolioBundle\\Controller\\PortfolioController::articlesAction',  '_route' => 'Articles',);
            }

        }

        // Studies
        if ($pathinfo === '/studies') {
            return array (  '_controller' => 'Portfolio\\PortfolioBundle\\Controller\\PortfolioController::studiesAction',  '_route' => 'Studies',);
        }

        // Contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Portfolio\\PortfolioBundle\\Controller\\PortfolioController::contactAction',  '_route' => 'Contact',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // Admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Portfolio\\PortfolioBundle\\Controller\\PortfolioController::adminAction',  '_route' => 'Admin',);
            }

            // Article
            if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Article')), array (  '_controller' => 'Portfolio\\PortfolioBundle\\Controller\\PortfolioController::articleAction',));
            }

            // addComment
            if ($pathinfo === '/addComment') {
                return array (  '_controller' => 'Portfolio\\PortfolioBundle\\Controller\\PortfolioController::addCommentAction',  '_route' => 'addComment',);
            }

        }

        // getComments
        if (0 === strpos($pathinfo, '/getComments') && preg_match('#^/getComments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'getComments')), array (  '_controller' => 'Portfolio\\PortfolioBundle\\Controller\\PortfolioController::getCommentsAction',));
        }

        // removeArticle
        if (0 === strpos($pathinfo, '/removeArticle') && preg_match('#^/removeArticle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeArticle')), array (  '_controller' => 'Portfolio\\PortfolioBundle\\Controller\\PortfolioController::removeArticleAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
