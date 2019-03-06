<?php
namespace App\Helpers;

class Helpers {
    
    /**
    **@autor César Cancino Zapata
    **@soporte cesar.cancinozapata@externos-cl.cencosud.com
    **@name conexión active directory
    **@param user : cadena de texto con el usuario de red
    **@param password: contraseña de la red del usuario
    **@return arreglo en donde los dos primeros índices indican el estado de la conexión.
    **/
    public static function active_directory($user, $password)
    {
      $server = '172.21.132.31';
      $domain = '@cencosud.corp';
      $port = 389;
      $dn = "dc=cencosud, dc=corp";
      $filter = "sAMAccountName=" . $user . "*";
      $attr = array("displayname", "mail", "givenname", "sn", "useraccountcontrol", "cn", "department", "samaccountname", "telephonenumber", "memberof");
      $connection = @ldap_connect($server, $port);
      ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
      ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);
      $bind = @ldap_bind($connection, $user.$domain, $password);
      if($bind==false)
      {
        switch(ldap_error($connection))
        {
          case 'Invalid credentials':
            $mensaje="Los datos ingresados no son correctos";
          break;
          default:
            $mensaje="Indefinido";
          break;
        }
        return array
        (
          'estado'=>'0',
          'mensaje'=>$mensaje
        );
      }else
      {
        $info = ldap_get_entries($connection, ldap_search($connection, $dn, $filter, $attr));
        return array
        (
          'estado'=>'1',
          'mensaje'=>'success',
          'cn'=>$info[0]["cn"][0],
          'mail'=>$info[0]["mail"][0],
          'department'=>$info[0]["department"][0],
          'samaccountname'=>$info[0]["samaccountname"][0],
          'telephonenumber'=>$info[0]["telephonenumber"][0],
          'memberof'=>$info[0]["memberof"][0],
          'password'=>$password
        );
      }
      ldap_close($connection);
    }
    /**
    **@autor César Cancino Zapata
    **@soporte cesar.cancinozapata@externos-cl.cencosud.com
    **@name conexión con DTE Paperless
    **@param url : cadena de texto con url, el formato debe ser http://link
    **@param idDespacho: valor numérico que hace referencia el idDespacho de la tabla DespachoEnc de DAD
    **@param token: valor hexadecimal que se usa para validar vía header la petición HTTP que se realiza al endpoint
    **@return json con valores devueltos por Paperless.
    **/
    public static function consumePaperless($url, $idDespacho, $token)
    {
       $headers=array();
       $headers[] = 'Token:'.$token;
       $curl = curl_init($url);
       //curl_setopt($curl, CURLOPT_USERPWD, self::getUser() . ':' . self::getPassword()); 
       curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
       curl_setopt($curl, CURLINFO_HEADER_OUT, true);  
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POSTFIELDS, array('idDespacho'=>$idDespacho));
       $curl_response = curl_exec($curl);
       $http_code = curl_getinfo($curl, CURLINFO_HEADER_OUT);
       curl_close($curl);
       //echo $http_code.'<hr />';
       //echo $curl_response;
       //return $http_code;
       return $curl_response;
    }
    public static function formatea_fecha($fecha) 
    {
            $dia=substr($fecha,8,2);
          $mes=substr($fecha,5,2);
          $anio=substr($fecha,0,4);
        switch ($mes){
          case '01':
          $mes="Enero";
          break;
          case '02':
          $mes="Febrero";
          break;
          case '03':
          $mes="Marzo";
          break;
          case '04':
          $mes="Abril";
          break;
          case '05':
          $mes="Mayo";
          break;
          case '06':
          $mes="Junio";
          break;
          case '07':
          $mes="Julio";
          break;
          case '08':
          $mes="Agosto";
          break;
          case '09':
          $mes="Septiembre";
          break;
          case '10':
          $mes="Octubre";
          break;
          case '11':
          $mes="Noviembre";
          break;
          case '12':
          $mes="Diciembre";
          break;
        }
        return $dia." de ".$mes." de ".$anio; 
    }
    public static function invierte_fecha($date)
    {
      $explode=explode('-', $date);
      return $explode[2].'-'.$explode[1].'-'.$explode[0];
    }
    public static function invierte_fecha_datetime($date)
    {
      $fecha=explode(' ',$date);
      $explode=explode('-', $fecha[0]);
      return $explode[2].'-'.$explode[1].'-'.$explode[0];
    }
    public static function  esRut($r = false)
    {
    if((!$r) or (is_array($r)))
        return false; /* Hace falta el rut */
 
    if(!$r = preg_replace('|[^0-9kK]|i', '', $r))
        return false; /* Era código basura */
 
    if(!((strlen($r) == 8) or (strlen($r) == 9)))
        return false; /* La cantidad de carácteres no es válida. */
 
    $v = strtoupper(substr($r, -1));
    if(!$r = substr($r, 0, -1))
        return false;
 
    if(!((int)$r > 0))
        return false; /* No es un valor numérico */
 
    $x = 2; $s = 0;
    for($i = (strlen($r) - 1); $i >= 0; $i--){
        if($x > 7)
            $x = 2;
        $s += ($r[$i] * $x);
        $x++;
    }
    $dv=11-($s % 11);
    if($dv == 10)
        $dv = 'K';
    if($dv == 11)
        $dv = '0';
    if($dv == $v)
        return number_format($r, 0, '', '.').'-'.$v; /* Formatea el RUT */
        //return true;
    return false;
    }
    
    public static function get_youtube_id($url)
    {
        $start = strpos($url, "v=") + 2;
        return substr($url, $start, 11);
    }
    public static function encriptarSha256($pass)
    {
        $pass_mayuscula = strtoupper($pass); 
        $hasheada= hash('sha256', $pass_mayuscula,false); 
        return $hasheada;
    }
    public static function rutaActiva($slug, $tipo)
    {
        $pos=strpos(Helpers::base_url(), '?');
        if($pos===false)
        {
            $url=explode('/',substr(Helpers::base_url(),strlen(Helpers::base_path()),strlen(Helpers::base_path())));
        }else
        {
            $url=explode('/',substr(substr(Helpers::base_url(), 0,$pos),strlen(Helpers::base_path()),strlen(Helpers::base_path())));
        }
        
        $segment=$url[0];
         switch($tipo)
        {
          case '1':
              if($slug==$segment)
              {
                return 'current';
              }else
              {
                return '';
              }
          break;
          case '2':
              if($slug==$segment)
              {
                return ' open';
              }else
              {
                return '';
              }
          break;
        }
        
    }
    public static function base_path()
    {
      return Helpers::base_domain().'/tamila/cencosud/dad_2_mn1/';
    }
    public static function base_domain()
    {
      return "http://" . $_SERVER['SERVER_NAME'];
    }
    public static function base_url()
    {
      return "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    }
    public static function getTimeStamp()
    {
      $fecha = date_create();
      return date_timestamp_get($fecha);
    }
}