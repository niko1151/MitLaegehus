<?php
namespace db\PDO;

class Statement extends \PDOStatement
{
    private $_last_used_vars = [];

    function execute($input_parameters = NULL)
    {
        $this->_last_used_vars = $input_parameters;
        return parent::execute($input_parameters);
    }

    function debugLastQuery()
    {
        if(!($this->_last_used_vars && is_array($this->_last_used_vars) && count($this->_last_used_vars) > 0)){
            return $this->queryString;
        }

        $query = $this->queryString;
        foreach($this->_last_used_vars as $key=>$value){
            $first_key = $key;
            break;
        }

        $pattern = \is_numeric($first_key) ? '/\?/' : '/'.addslashes($key).'/';
        foreach($this->_last_used_vars as $var){
            $query = preg_replace($pattern, "'".addslashes($var)."'", $query, 1);
        }
        return $query;
    }

    // function __debugInfo()
    // {
    //     $return = [];
    //     foreach(\get_object_vars($this) as $key=>$value){
    //         if(substr($key,0,1) != "_"){
    //             $return[$key] = $value;
    //         }
    //     }
    //     $return["lastUsedQuery"] = $this->debugLastQuery();
    //     return $return;
    // }
}