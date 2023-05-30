<?php
namespace db\PDO;

class Connection extends \PDO
{
    function __construct(string $dsn, string $username = "", string $passwd = "", array $options = [])
    {
        $options = [
            self::ATTR_STATEMENT_CLASS => ['\db\PDO\Statement'],
            self::ATTR_DEFAULT_FETCH_MODE => self::FETCH_OBJ
        ]+$options;
        parent::__construct($dsn, $username, $passwd, $options);
    }
}