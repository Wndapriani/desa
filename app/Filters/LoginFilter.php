<?php

namespace App\Filters;

use App\Models\LoginModel;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LoginFilter implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        // Example authentication logic
        $isLoggedIn = false; // Default value

        // Implement your authentication logic here
        // For example, you can check if a user is logged in by verifying the session data or checking the authentication token

        if (session()->get('logged_in')) {
            $isLoggedIn = true;
        }

        // Continue with your code based on the $isLoggedIn value
        if ($isLoggedIn) {
            // User is logged in, perform authorized actions
            // For example, you can fetch user data from the database or display protected content

            // $loginModel = new \App\Models\LoginModel();
            // $user = $loginModel->getId(session()->get('id_pengguna'));


            // echo 'Welcome, ' . $user['nama_pengguna'];
        } else {
            // User is not logged in, redirect to the login page or perform unauthorized actions
            // For example, you can redirect the user to the login page or display an error message
            return redirect()->to('login');
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

        if (session()->get('logged_in')) {
            $isLoggedIn = true;
        }

        if ($isLoggedIn) {
            // User is logged in, perform authorized actions
            // For example, you can fetch user data from the database or display protected content

            $loginModel = new \App\Models\LoginModel();
            $user = $loginModel->getId(session()->get('id_pengguna'));


            // echo 'Welcome, ' . $user['nama_pengguna'];
        } else {
            // User is not logged in, redirect to the login page or perform unauthorized actions
            // For example, you can redirect the user to the login page or display an error message
            return redirect()->to('login');
        }
    }
}
