<?php
namespace ml\laege\Controllers;

use fix\db\PDO;

class UserController
{

    public static function getUser($id)
    {
        $stmnt = PDO::getInstance()->prepare("SELECT * FROM WMS.Users where Id = ?;");
        $stmnt->execute([$id]);
        $result = $stmnt->fetchObject();

        return $result;
    }
    public static function checkUserLogin()
    {
        $username = 'testuser';
        $password = 'testpassword';
        
        $url = 'https://localhost:7022/api/User/LogInCheck?username=' . urlencode($username) . '&password=' . urlencode($password);
        $response = file_get_contents($url);
        
        if ($response === false) {
            // Handle the error case
            echo 'Error calling API';
        } else {
            // Parse the JSON response
            $data = json_decode($response);
            if ($data->statusCode == 200) {
                echo 'Login successful';
            } else {
                echo 'Invalid username or password';
            }
        }

        return $data;
    }
    

}