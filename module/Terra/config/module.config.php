<?php

return array(
    /*'router' => array(
        'routes' => array(
            'terra-show' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/show',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Terra/Controller',
                        'controller' => 'index',
                        'action' => 'show'
                    )
                )
            )
        )
    ),*/
    'router' => array(
        'routes' => array(
            'terra-show' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/show',
                    'defaults' => array(
                        'controller' => 'Terra\Controller\Index',
                        'action' => 'show'
                    )
                )
            ),
            'terra-hide' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/hide',
                    'defaults' => array(
                        'controller' => 'Terra\Controller\Index',
                        'action' => 'hide'
                    )
                )
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Terra\Controller\Index' => 'Terra\Controller\IndexController'
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/terra/layout/layout.phtml',
            'terra/index/index' => __DIR__ . '/../view/terra/index/index.phtml',
            'error/404' => __DIR__ . '/../view/terra/error/404.phtml',
            'error/index' => __DIR__ . '/../view/terra/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
);
