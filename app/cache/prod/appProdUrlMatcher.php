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

        // trungnd_store_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trungnd_store_homepage')), array (  '_controller' => 'Trungnd\\StoreBundle\\Controller\\DefaultController::indexAction',));
        }

        // tuhn_hello_echo
        if ($pathinfo === '/echo') {
            return array (  '_controller' => 'Tuhn\\HelloBundle\\Controller\\DefaultController::echoAction',  '_route' => 'tuhn_hello_echo',);
        }

        // tuhn_hello_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuhn_hello_homepage')), array (  '_controller' => 'Tuhn\\HelloBundle\\Controller\\DefaultController::indexAction',  'name' => 'mate',));
        }

        // tuhn_hello_orm
        if ($pathinfo === '/orm') {
            return array (  '_controller' => 'Tuhn\\HelloBundle\\Controller\\DefaultController::ormAction',  '_route' => 'tuhn_hello_orm',);
        }

        // tuhn_hello_dbal
        if ($pathinfo === '/dbal') {
            return array (  '_controller' => 'Tuhn\\HelloBundle\\Controller\\SecondController::dbalAction',  '_route' => 'tuhn_hello_dbal',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
