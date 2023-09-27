<?php

namespace App\Controllers\Middleware;

use CodeIgniter\Filters\MiddlewareInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\Uri;
use Config\Services;

class AuthMiddleware implements MiddlewareInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if the user is authenticated
        $isLoggedIn = false;

        if (session()->get('logged_in')) {
            $isLoggedIn = true;
        }

        if (!$isLoggedIn) {
            // User is not authenticated, redirect to login page
            $response = new RedirectResponse((new Uri())->setPath('/login'));
            return $response;
        }

        // User is authenticated, continue to the next middleware or route
        return;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do any necessary post-processing after the route is dispatched
    }
}
