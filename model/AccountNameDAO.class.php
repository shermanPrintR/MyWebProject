<?php
require_once '../db/DB.class.php';
require_once 'AccountName.class.php';

class AccountNameDAO
{
    public function findByUser($account)
    {
        try {
            $dbh = (new DB())->getDbh();
            $pstmt = $dbh->prepare('SELECT * FROM accountwithname WHERE username=? AND password=?');
            $pstmt->execute(array($account->getUsername(), $account->getPassword()));
            return $res = $pstmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo '发生PDO异常' . $e->getMessage();
        }

    }
}