This project use Symfony

Symfony is a **PHP framework** for web and console applications and a set
of reusable **PHP components**. Symfony is used by thousands of web
applications and most of the [popular PHP projects][2].

Installation
------------

* [Install Symfony][4] with Composer (see [requirements details][3]).
* Symfony follows the [semantic versioning][5] strictly, publishes "Long Term
  Support" (LTS) versions and has a [release process][6] that is predictable and
  business-friendly.



For run the project after the installation is neccesary to run the command

symfony server:start

after the server get ready. you are able to do the request on the host


[GET] **ServerHost** /triangle/{a}/{b}/{c}

[GET] **ServerHost** /circle/{radius}

If all is fine you will see a json with the respective calculation. Otherwise. you will receive a error message.