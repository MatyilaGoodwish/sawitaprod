<?php 

/**
 * Interface register
 */
interface IRegister { 
    public function register();
    public function isRegistered();
    public function isMatchingPasswords();
}

/**
 * interface login
 */
interface ILogin { 
    public function signIn();
}

/**
 * interface dashboard
 */
interface IDashboard {
    public function currentUser();
}


/**
 * dashboard abstract class
 */

abstract class Dashboard implements IDashboard { 
    public function currentUser() { 

    }
}

/**
 * Base Accounts
 */
abstract class BaseAccounts {
    
}
