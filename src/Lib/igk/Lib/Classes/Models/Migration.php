<?php
namespace IGK\Models;


class Migration extends ModelBase{
    /**
     * override the table name
     * @var string
     */
    protected $table = "%prefix%migrations";
}