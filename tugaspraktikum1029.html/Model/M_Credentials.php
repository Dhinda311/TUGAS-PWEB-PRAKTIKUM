<?php

include_once 'config/connection.php';

class M_Credentials{

    static function login($data = [])
    {
        $username = $data['username'];
        $password = $data['password'];
        global $conn;

        $result = $conn->query("SELECT * FROM credentials WHERE username = '$username'");
        if ($result = $result->fetch_assoc()) {
            $hashedPassword = $result['password'];
            $verify = password_verify($password, $hashedPassword);
            if ($verify) {
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    static function register($data = [])
    {
        $username = $data['username'];
        $password = $data['password'];
        global $conn;


        # Insert to credentials table
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql_cred = "INSERT INTO credentials SET username = ?, password = ?";
        $stmt_cred = $conn->prepare($sql_cred);
        $stmt_cred->bind_param('ss', $username, $hashedPassword);
        $stmt_cred->execute();

        $result_cred = $stmt_cred->affected_rows > 0 ? true : false;



        echo '<script>console.log("' . $result_cred . '")</script>';
        return $result_cred;
    }

    // static function getPassword($email)
    // {
    //     global $conn;
    //     $sql = "SELECT password FROM users WHERE email = ?";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param('s', $email);
    //     $stmt->execute();

    //     $result = $stmt->affected_rows > 0 ? true : false;
    //     return $result;
    // }
    

}