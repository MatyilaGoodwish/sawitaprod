<?php 
session_start();
/**

 * @author Goodwish Matyila

 * @description UMS User accounts management system for clients

 * @year 2019

 * @tel: 0723198061

 */



/**

 * register database

 */

require_once "config/db.php";



/**

 * register interfaces

 */

require_once "interfaces/_common.php";



/**

 * register app common classes

 */

include "common.php";



/**

 * register controllers

 */

include "controllers/_login.php";

include "controllers/_logout.php";

include "controllers/_register.php";

include "controllers/_reset.php";


/**

 * register application models

 */

include "models/_profile.php";





