<?php

$folderView = "rock";
$nsController = "Rock\Controller";

return array(
    'router' => array(
        'routes' => array(            
            'home' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '[/]',
                    'defaults' => array(
                        'controller' => "$nsController\Index",
                        'action' => 'index',
                    ),
                ),
            ),
            'rock-product' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/rock/product[/:action]',                    
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => "$nsController\Product",
                        'action'     => 'index',
                    ),
                ),
            ),
            'rock-detail' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/rock/detail[/:action]',                    
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => "$nsController\Detail",
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            "$nsController\Index" => "$nsController\IndexController",
            "$nsController\Product" => "$nsController\ProductController",
            "$nsController\Detail" => "$nsController\DetailController"
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . "/../view/$folderView/layout/layout.phtml",
            "$folderView/index/index" => __DIR__ . "/../view/$folderView/index/index.phtml",
            'error/404' => __DIR__ . "/../view/$folderView/error/404.phtml",
            'error/index' => __DIR__ . "/../view/$folderView/error/index.phtml",
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
);
