<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        }

        // mail
        if ('/mail' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\MailController::welcomeuser',  '_route' => 'mail',);
        }

        // printcalendar
        if ('/print' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\CalendarController::printcalendar',  '_route' => 'printcalendar',);
        }

        // calendario
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\CalendarController::index',  '_route' => 'calendario',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'calendario'));
            }

            return $ret;
        }

        // iframecalendar
        if (0 === strpos($pathinfo, '/i') && preg_match('#^/i(?:/(?P<header>\\d+)(?:/(?P<topic1>[^/]++)(?:/(?P<topic2>[^/]++)(?:/(?P<place1>[^/]++)(?:/(?P<place2>[^/]++)(?:/(?P<teacher>[^/]++)(?:/(?P<weight>[^/]++)(?:/(?P<type>[^/]++))?)?)?)?)?)?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'iframecalendar')), array (  'header' => 1,  'topic1' => '',  'topic2' => '',  'place1' => '',  'place2' => '',  'teacher' => '',  'weight' => '',  'type' => '',  '_controller' => 'App\\Controller\\CalendarController::index',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\AdminController::index',  '_route' => 'admin',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin'));
                }

                return $ret;
            }

            if (0 === strpos($pathinfo, '/admin/event')) {
                // eventall
                if ('/admin/event' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\AdminController::allevent',  '_route' => 'eventall',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'eventall'));
                    }

                    return $ret;
                }

                // eventmodify
                if (0 === strpos($pathinfo, '/admin/event/modify') && preg_match('#^/admin/event/modify/(?P<idedit>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eventmodify')), array (  '_controller' => 'App\\Controller\\AdminController::eventmodify',));
                }

                // eventedit
                if (0 === strpos($pathinfo, '/admin/event/edit') && preg_match('#^/admin/event/edit/(?P<idedit>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eventedit')), array (  '_controller' => 'App\\Controller\\AdminController::eventedit',));
                }

                // eventremove
                if (0 === strpos($pathinfo, '/admin/event/remove') && preg_match('#^/admin/event/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eventremove')), array (  '_controller' => 'App\\Controller\\AdminController::removeevent',));
                }

                // event
                if ('/admin/event/new' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::eventnew',  '_route' => 'event',);
                }

                // booking
                if (0 === strpos($pathinfo, '/admin/event/booking') && preg_match('#^/admin/event/booking/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'booking')), array (  '_controller' => 'App\\Controller\\AdminController::bookingall',));
                }

            }

            // editusertype
            if (0 === strpos($pathinfo, '/admin/editusertype') && preg_match('#^/admin/editusertype/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editusertype')), array (  '_controller' => 'App\\Controller\\AdminController::editusertype',));
            }

            if (0 === strpos($pathinfo, '/admin/t')) {
                if (0 === strpos($pathinfo, '/admin/topic')) {
                    // topicall
                    if ('/admin/topic' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'App\\Controller\\AdminController::alltopic',  '_route' => 'topicall',);
                        if (substr($pathinfo, -1) !== '/') {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'topicall'));
                        }

                        return $ret;
                    }

                    // topic
                    if ('/admin/topic/new' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::topic',  '_route' => 'topic',);
                    }

                    // topicedit
                    if ('/admin/topic/edit' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::topicedit',  '_route' => 'topicedit',);
                    }

                    // topicmodify
                    if (0 === strpos($pathinfo, '/admin/topic/modify') && preg_match('#^/admin/topic/modify/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topicmodify')), array (  '_controller' => 'App\\Controller\\AdminController::topicmodify',));
                    }

                    // topicremove
                    if (0 === strpos($pathinfo, '/admin/topic/remove') && preg_match('#^/admin/topic/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topicremove')), array (  '_controller' => 'App\\Controller\\AdminController::topicremove',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/teacher')) {
                    // teacher
                    if ('/admin/teacher/new' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::teacher',  '_route' => 'teacher',);
                    }

                    // teacheredit
                    if ('/admin/teacher/edit' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::teacheredit',  '_route' => 'teacheredit',);
                    }

                    // teachermodify
                    if (0 === strpos($pathinfo, '/admin/teacher/modify') && preg_match('#^/admin/teacher/modify/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'teachermodify')), array (  '_controller' => 'App\\Controller\\AdminController::teachermodify',));
                    }

                    // teacherremove
                    if (0 === strpos($pathinfo, '/admin/teacher/remove') && preg_match('#^/admin/teacher/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacherremove')), array (  '_controller' => 'App\\Controller\\AdminController::removeteacher',));
                    }

                    // teacherall
                    if ('/admin/teacher' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::allteacher',  '_route' => 'teacherall',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/type')) {
                    // typeall
                    if ('/admin/type' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::alltype',  '_route' => 'typeall',);
                    }

                    // type
                    if ('/admin/type/new' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::type',  '_route' => 'type',);
                    }

                    // typeedit
                    if ('/admin/type/edit' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::typeedit',  '_route' => 'typeedit',);
                    }

                    // typemodify
                    if (0 === strpos($pathinfo, '/admin/type/modify') && preg_match('#^/admin/type/modify/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'typemodify')), array (  '_controller' => 'App\\Controller\\AdminController::typemodify',));
                    }

                    // typeremove
                    if (0 === strpos($pathinfo, '/admin/type/remove') && preg_match('#^/admin/type/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeremove')), array (  '_controller' => 'App\\Controller\\AdminController::removetype',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/place')) {
                // placeall
                if ('/admin/place' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::allplace',  '_route' => 'placeall',);
                }

                // place
                if ('/admin/place/new' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::place',  '_route' => 'place',);
                }

                // placeedit
                if ('/admin/place/edit' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::placeedit',  '_route' => 'placeedit',);
                }

                // placemodify
                if (0 === strpos($pathinfo, '/admin/place/modify') && preg_match('#^/admin/place/modify/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'placemodify')), array (  '_controller' => 'App\\Controller\\AdminController::placemodify',));
                }

                // placeremove
                if (0 === strpos($pathinfo, '/admin/place/remove') && preg_match('#^/admin/place/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'placeremove')), array (  '_controller' => 'App\\Controller\\AdminController::removeplace',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/user')) {
                // userall
                if ('/admin/user' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::alluser',  '_route' => 'userall',);
                }

                if (0 === strpos($pathinfo, '/admin/user/profile')) {
                    // userprofile
                    if (preg_match('#^/admin/user/profile(?:/(?P<usermodifyed>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'userprofile')), array (  'usermodifyed' => 0,  '_controller' => 'App\\Controller\\AdminController::userprofile',));
                    }

                    // usermodifyed
                    if ('/admin/user/profile/1' === $pathinfo) {
                        return array (  'usermodifyed' => 1,  '_controller' => 'App\\Controller\\AdminController::userprofile',  '_route' => 'usermodifyed',);
                    }

                }

                // user
                if ('/admin/user/new' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::user',  '_route' => 'user',);
                }

                // useredit
                if ('/admin/useredit' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::useredit',  '_route' => 'useredit',);
                }

                // usermodify
                if (0 === strpos($pathinfo, '/admin/user/modify') && preg_match('#^/admin/user/modify/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usermodify')), array (  '_controller' => 'App\\Controller\\AdminController::usermodify',));
                }

                // userremove
                if (0 === strpos($pathinfo, '/admin/user/remove') && preg_match('#^/admin/user/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'userremove')), array (  '_controller' => 'App\\Controller\\AdminController::removeuser',));
                }

                if (0 === strpos($pathinfo, '/admin/usertype')) {
                    // usertypeall
                    if ('/admin/usertype' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::allusertype',  '_route' => 'usertypeall',);
                    }

                    // usertypemodify
                    if (0 === strpos($pathinfo, '/admin/usertype/modify') && preg_match('#^/admin/usertype/modify/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'usertypemodify')), array (  '_controller' => 'App\\Controller\\AdminController::usertypemodify',));
                    }

                    // usertype
                    if ('/admin/usertype/new' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::usertype',  '_route' => 'usertype',);
                    }

                    // removeusertype
                    if (0 === strpos($pathinfo, '/admin/usertype/remove') && preg_match('#^/admin/usertype/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeusertype')), array (  '_controller' => 'App\\Controller\\AdminController::removeusertype',));
                    }

                }

            }

            // viewusertype
            if ('/admin/viewusertype' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\AdminController::viewusertype',  '_route' => 'viewusertype',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'viewusertype'));
                }

                return $ret;
            }

            // icone
            if ('/admin/icone' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::icone',  '_route' => 'icone',);
            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/recoverpassword')) {
            // recoverpassword
            if ('/recoverpassword' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::recoverpassword',  '_route' => 'recoverpassword',);
            }

            // recoverpasswordurl
            if (preg_match('#^/recoverpassword/(?P<keyurl>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recoverpasswordurl')), array (  '_controller' => 'App\\Controller\\AdminController::changepassword',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
