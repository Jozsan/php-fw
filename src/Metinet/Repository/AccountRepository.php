<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 18/01/18
 * Time: 09:42
 */
namespace Metinet\Repository;
use Metinet\Domain\Account;

class AccountRepository
{
    private $accounts = [];

    public function __construct(array $accounts = [])
    {
        foreach ($accounts as $account) {
            if (!$account instanceof Account) {

                throw new \LogicException('Invalid item provided, must be an instance of Account');
            }
        }

        $this->accounts = $accounts;
    }

    public function add(Account $account)
    {
        $this->accounts[] = $account;
    }

    public function all(): array
    {
        return $this->accounts;
    }

    public function merge(AccountRepository $accounts): void
    {
        foreach ($accounts->all() as $account) {
            $this->accounts[] = $account;
        }
    }

    public function verifyCredentials($mail, $password)
    {
        foreach ($this->accounts as $account) {

            if ($account->getMail() == $mail && $account->getPassword() == $password) {
                return $account;
            }
        }
        throw new \Exception("Mauvais login / password", 500);
    }
}