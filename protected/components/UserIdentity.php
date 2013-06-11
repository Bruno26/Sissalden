<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
/*	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
} 
*/
    private $_id;
 
    public function authenticate()
    {
        $username=strtolower($this->username);//campo desde el formulario
        $user=Usuario::model()->find('LOWER(nb_bd_usuario)=?',array($username));//dato ingresado por formulario y correspondiente a la tabla usuario
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$user->validatePassword($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->nb_bd_usuario;//id de la tabla usuario
            $this->username=$user->nb_bd_usuario;//valor que se desea validar por formularo
            $this->errorCode=self::ERROR_NONE;

	//codigo para registrar el deslogeo
			/*Consultamos los datos del usuario por el username ($user->username) */
			$info_usuario = Usuario::model()->find('LOWER(nb_bd_usuario)=?', array($user->nb_bd_usuario));
			/*En las vistas tendremos disponibles last_login y perfil pueden setear las que requieran */
			//$this->setState('last_login',$info_usuario->last_login);
			$this->setState('in_tipo_usuario',$info_usuario->in_tipo_usuario);
			 
			/*Actualizamos el last_login del usuario que se esta autenticando ($user->username) */
			/*$sql = "update sissalden.usuario set last_login = now() where nb_bd_usuario='$user->nb_bd_usuario'";
			$connection = Yii::app() -> db;
			$command = $connection -> createCommand($sql);
			$command -> execute();*/
		
        }
        return $this->errorCode==self::ERROR_NONE;
    }
 
    public function getId()
    {
        return $this->_id;
    }
}
