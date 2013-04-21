<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {

        $config = Yii::app()->getComponents(false);
        $connection = new CDbConnection($config['db']['connectionString'], $config['db']['username'], $config['db']['password']);

        $sql = "select * from users where email=:email and password=:password ;";
        $command = $connection->createCommand($sql);
        $command->bindParam(":email", $this->username, PDO::PARAM_STR);
        $command->bindParam(":password", $this->password, PDO::PARAM_STR);
        $loginResult = $command->queryAll();
        if (!empty($loginResult[0])) {
            if (!isset($loginResult[0]['email']) && ($loginResult[0]['email'] != $this->username)) {
                $this->errorCode = self::ERROR_USERNAME_INVALID;
            } 
            elseif ($loginResult[0]['password'] !== $this->password) {
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            } 
            else {
                $this->errorCode = self::ERROR_NONE;
                Yii::app()->session['user'] = $loginResult[0];
            }
        } 
        else {
            return;
        }
        return !$this->errorCode;
    }

}