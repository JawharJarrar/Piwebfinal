<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_panier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\PanierController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/panier/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_cart' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\PanierController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_cart_del' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\PanierController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/panier/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'checkout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\PanierController::checkoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/checkout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'order' => array (  0 =>   array (    0 => 'idcommande',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\PanierController::orderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcommande',    ),    1 =>     array (      0 => 'text',      1 => '/panier/order',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'thanks' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\PanierController::thanksAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/thankyou',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/venteflash/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/venteflash',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/venteflash/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/venteflash',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/venteflash/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/venteflash/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_supprimerproduit' => array (  0 =>   array (    0 => 'id',    1 => 'prod',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::deletefromvente1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prod',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/venteflash/ajaxresult1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_position' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::positionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/venteflash/position',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_index1' => array (  0 =>   array (    0 => 'id',    1 => 'operation',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::ajaxindexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'operation',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/venteflash',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_ajouterproduit' => array (  0 =>   array (    0 => 'id',    1 => 'prod',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::addtovente1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prod',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/venteflash/ajaxresult',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_Listing' => array (  0 =>   array (    0 => 'id',    1 => 'operation',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::ajaxlistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajaxoperation',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'operation',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/venteflash',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venteflash_setflash' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\VenteFlashController::setflashAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/setflash',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/venteflash',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_valable' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::valableAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/valable',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_indexme' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::indexmeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/myproducts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/product/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_change' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::projetajaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\UserController::clientsindexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/clientindex',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\UserController::clientsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/clientAjax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_wishlist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\UserController::mywishAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/wishlist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newwish' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\UserController::newwishAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletewish' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panwish' => array (  0 =>   array (    0 => 'id',    1 => 'idpd',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\UserController::panierwishlistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idpd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user/addpan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coupon_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CouponController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/coupon/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coupon_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CouponController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/coupon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coupon_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CouponController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/coupon/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coupon_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CouponController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/coupon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coupon_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CouponController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/coupon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coupon_print' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CouponController::printAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/coupon/print',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coupon_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CouponController::listescouponAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/coupon/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'endroid_qrcode' => array (  0 =>   array (    0 => 'text',    1 => 'extension',  ),  1 =>   array (    '_controller' => 'Endroid\\QrCode\\Bundle\\Controller\\QrCodeController::generateAction',  ),  2 =>   array (    'text' => '[\\w\\W]+',    'extension' => 'jpg|png|gif',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'jpg|png|gif',      3 => 'extension',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[\\w\\W]+',      3 => 'text',    ),    2 =>     array (      0 => 'text',      1 => '/qrcode',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CategorieController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CategorieController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CategorieController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CategorieController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CategorieController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'main_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CouponController::testAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mainaddminn' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\DefaultController::adminindexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/members',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'aff_autoriser_coupon' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CouponController::affautoriserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/affautoriser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_autoriser_produit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::indexAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/autProduit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_autoriser_produitAjax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::ajaxListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/autProduitAjax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_ajaxListProd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::ActiverAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ajaxproduit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coupon_accepter' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CouponController::AccepterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/traite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'coupon_refuser' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CouponController::refuserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/refuser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_activer_users' => array (  0 =>   array (    0 => 'etat',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\UserController::ActiverAction',    'etat' => '1',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'etat',    ),    1 =>     array (      0 => 'text',      1 => '/admin/activer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_ajaxList' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\UserController::ajaxListAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_ajaxsupprimer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\ProductController::supprimerAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ajaxproduit/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_User' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\DefaultController::AdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_Clients' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\DefaultController::AdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Magasin_List' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MagasinController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasin/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Magasin_List_Perso' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MagasinController::listPersoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasin/listPerso',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Magasin_Add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MagasinController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasin/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Magasin_Details' => array (  0 =>   array (    0 => 'idMagasin',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MagasinController::magasinDetailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idMagasin',    ),    1 =>     array (      0 => 'text',      1 => '/magasin/magasinDetail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Magasin_Edit' => array (  0 =>   array (    0 => 'idMagasin',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MagasinController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idMagasin',    ),    1 =>     array (      0 => 'text',      1 => '/magasin/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Magasin_Delete' => array (  0 =>   array (    0 => 'idMagasin',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MagasinController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idMagasin',    ),    1 =>     array (      0 => 'text',      1 => '/magasin/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Magasin_produits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MagasinController::productsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasin/products',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Magasin_produitsinception' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MagasinController::productsinceptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasin/addproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Magasin_produitsinceptionadd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MagasinController::addproductsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasin/addproducts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
