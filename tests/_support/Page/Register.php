<?php
namespace Page;

class Register
{
    // include url of current page
    public static $URL = '/register';

    public static $nameField = '#register-form #name';
    public static $emailField = '#register-form #email';
    public static $passwordField = '#register-form #password';
    public static $passwordConfirmationField = '#register-form #password-confirmation';
    public static $registerForm = "#register-form";
    public static $registerButton = "#register";
    public static $registerLink = "#register-link";

    /** @var \AcceptanceTester */
    private $tester;

    public function __construct(\FunctionalTester $tester)
    {
        $this->tester = $tester;
    }

    /**
     * @param $param
     * @return string
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

}