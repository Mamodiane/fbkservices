<?php
session_start();

require_once "class-db.php";

define("PAYFAST_MERCHANT_ID", '10030457');
define("PAYFAST_MERCHANT_KEY", 'babo764ac4gto');
define("PAYFAST_PASSPHRASE", 'qwertyuiop12FBK');
define("PAYFAST_RETURN_URL", "https://past.serveo.net/fbkonline/return.php/");
define("PAYFAST_CANCEL_URL", "https://past.serveo.net/fbkonline/shopping_cart/");
define("PAYFAST_NOTIFY_URL", "https://past.serveo.net/fbkonline/notify.php");
define("PAYFAST_SANDBOX_MODE", true); // set it to false to make it live



