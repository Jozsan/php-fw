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
use Metinet\Domain\Mail;

class AccountController
{
    public function login(Request $request): Response
    {
        $mail = Mail::createFromString("j.santiago@gmail.com");
        $account = new Account($mail, "password");
        $accountRepository = new AccountRepository([$account]);
        $email = Mail::createFromString($request->getQuery()->get('email'));
        $password = $request->getQuery()->get('password');
        $account = $accountRepository->verifyCredentials($email, $password);
        if(!isset($_SESSION))
        {
            session_start();
        }
        $_SESSION['mail'] = $request->getQuery()->get('email');
        return new Response(sprintf('<p>Success Login at %s</p>', $_SESSION['mail']));
    }

    public function logout(){
        session_destroy();
        return new Response(sprintf('<p>Good bye ! :)</p>'));
    }

    public function register(Request $request){
//        $email = $request->getQuery()->get('email');
//        $password = $request->getQuery()->get('password');
//
//        if ($GLOBALS['accountRepository']->isExist($email)) {
//           throw new \Exception("Email already taken",500);
//        }
//        $newAccount = new Account($email, $password);
//        $GLOBALS['accountRepository']->add([$newAccount);
//        var_dump($GLOBALS['accountRepository']->all());
//        return new Response(sprintf('<p>Created account success</p>'));
    }
}