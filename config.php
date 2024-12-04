<?php
/**
 * =======================================================================================
 *                           GemFramework (c) GemPixel                                     
 * ---------------------------------------------------------------------------------------
 *  This software is packaged with an exclusive framework as such distribution
 *  or modification of this framework is not allowed before prior consent from
 *  GemPixel. If you find that this framework is packaged in a software not distributed 
 *  by GemPixel or authorized parties, you must not use this software and contact gempixel
 *  at https://gempixel.com/contact to inform them of this misuse otherwise you risk
 *  of being prosecuted in courts.
 * =======================================================================================
 *
 * @package GemPixel\Premium_URL_Shortener
 * @author GemPixel (https://gempixel.com)
 * @copyright 2023 GemPixel
 * @license https://gempixel.com/license
 * @link https://gempixel.com  
 */
  
  // Database Configuration
  define('DBhost', 'localhost');      // Your mySQL Host (usually Localhost)
  define('DBname', 'shortnerlive_db');         // The database name where the data will be stored
  define('DBuser', 'rsadmin');         // Your mySQL username
  define('DBpassword', 'Xo>DuN?sce[8');        //  Your mySQL Password 
  define('DBprefix', '');         // Prefix for your tables if you are using same db for multiple scripts
  define('DBport', 3306);

  // This is your base path. If you have installed this script in a folder, add the folder's name here. e.g. /folderName/
  define('BASEPATH', 'AUTO');

  // Use CDN to host libraries for faster loading
  define('USECDN', true);    

  // CDN URL to your assets
  define('CDNASSETS', null);
  define('CDNUPLOADS', null);

  // If FORCEURL is set to false, the software will accept any domain name that resolves to the server otherwise it will force settings url
  define('FORCEURL', false);

  // Your Server's Timezone - List of available timezones (Pick the closest): https://php.net/manual/en/timezones.php  
  define('TIMEZONE', 'GMT+0'); 

  // Cache Data - If you notice anomalies, disable this. You should enable this when you get high hits
  define('CACHE', true);  

  // Do not enable this if your site is live or has many visitors
  define('DEBUG', 0);

  /************************************************************************************
   ====================================================================================
   * Do not change anything below - it might crash your site
   * ----------------------------------------------------------------------------------
   *  - Setup a security phrase - This is used to encode some important user 
   *    information such as password. The longer the key the more secure they are.
   *  - If you change this, many things such as user login and even admin login will 
   *    not work anymore.
   ====================================================================================
   ***********************************************************************************/

  define('AuthToken', 'PUS72349ac571f8827f9c63855f9e09569de278fd060d171eb5aecc7851fba1cf34');
  define('EncryptionToken', 'def000005c4a87bd7bb85121ed93d6a2234b7cb53b4c9322f9d51cb1f0d97da24d197a46e4048d6415fb2a170f72000427a514b5cfa7c050b3a79647af1fea23686e868c');
  define('PublicToken', 'd7eb549f9bf79065b452a210d1682d05');
