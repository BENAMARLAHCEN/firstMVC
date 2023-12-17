<?php

class Users
{
    
    public static function getUsers()
    {
        return CrudDynamique::selectRecords(connection::connect(), 'users');
    }
    public static function getUserData(string $where)
    {
        return CrudDynamique::selectRecords(connection::connect(), 'users', '*', $where);
    }
    public static function addUsers(array $data)
    {
        return CrudDynamique::insertRecord(connection::connect(), 'users', $data);
    }
    public static function UpdateUsers(array $data, $id)
    {
        return CrudDynamique::updateRecord(connection::connect(), 'users', $data, $id);
    }
    public static function DeleteUsers(int $id)
    {
        return CrudDynamique::deleteRecord(connection::connect(),'users',$id);
    }

}
