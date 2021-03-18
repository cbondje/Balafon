<?php
namespace IGK\Models;


class User extends ModelBase{
    /**
     * override the table name
     * @var string
     */
    protected $table = "%prefix%users";
}