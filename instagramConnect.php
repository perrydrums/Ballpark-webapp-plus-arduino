<?php

session_start();

include('defines.php');

    if(isset($_SESSION['token'])){

        $token = $_SESSION['token'];
        $id = $_SESSION['userID'];

        $url = 'https://api.instagram.com/v1/users/'.$id.'/?access_token='.$token;
        $get = file_get_contents($url);
        $results = json_decode($get, true);

        $_SESSION['username'] = $results['data']['username'];

        include("index_page.php");

    }

    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $url = 'https://api.instagram.com/oauth/access_token';

        $access_token_settings = array(
                                        'client_id' => clientID,
                                        'client_secret' => clientSecret,
                                        'grant_type' => 'authorization_code',
                                        'redirect_uri' => redirectURI,
                                        'code' => $code
                                        );

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $access_token_settings);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($curl);
        curl_close($curl);
        $results = json_decode($result, true);

        $_SESSION['token'] = $results['access_token'];
        $_SESSION['userID'] = $results['user']['id'];

        header("Location: index.php");

    }elseif(!isset($_SESSION['token'])){
        include("login.php");
    }
