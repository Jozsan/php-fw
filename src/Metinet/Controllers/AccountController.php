<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 18/01/18
 * Time: 09:36
 */

namespace Metinet\Controllers;

use Metinet\Core\Http\Request;
use Metinet\Core\Http\Response;
use Metinet\Domain\Account;
use Metinet\Repository\AccountRepository;

class AccountController
{
    public function login(Request $request): Response
    {
        $accounts = [new Account("j.s@gmail.com", "chameau")];
        $accountRepository = new AccountRepository($accounts);

        $email = $request->getQuery()->get('email');
        $password = $request->getQuery()->get('password');
        $account = $accountRepository->verifyCredentials($email, $password);
        session_start();
        $_SESSION['mail'] = $account->getMail();
        return new Response(sprintf('<p>Success Login at %s</p>', $_SESSION['mail']));
    }

    public function logout(){
        session_destroy();
        return new Response(sprintf('<p>Good bye ! :)</p>'));
    }
}