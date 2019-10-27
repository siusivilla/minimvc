<?php
/**
 * Created by PhpStorm.
 * User: A151166
 * Date: 26/11/2016
 * Time: 23:20
 */

namespace App\DB;


class DbFactory
{
   
    public static function create(array $options)
    {
        $dsn = '';
      switch ($options['driver'])  {
         
          case 'mysql':
             $dsn ='mysql://'.$options['host'].';dbname='.$options['database']; 
              break;
          case 'sqlite':
              break;
          default:
              throw new \InvalidArgumentException('Driver '. $options['driver'].' non implementato');
              
      }
    }

}