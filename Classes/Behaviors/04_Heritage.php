<?php
/*
 * Method override
 * Heritage
 */

class User
{
    var $admin = false;
    var $first_name="";
    var $last_name="";
    var $user_name="";

    /**
     * [Full Name]
     * @return string
     */
    public function getFullName() : string
    {
        return $this->first_name . " " .$this->last_name;
    }

    /**
     * [User Name]
     * @return string
     */
    public function getUserName() : string
    {
        return $this->user_name;
    }
}

class Client extends User {
    var $city;
    var $state;
    var $country;

    /**
     * [Client Location]
     * @return string
     */
    public function location(){
        return $this->city . ", " . $this->state . ", " . $this->country;
    }

}

class Admin extends User{
    var $admin = true;
}

$user = new User();
$user->first_name = "Samuel";
$user->last_name = "Foster";
$user->user_name = "Samlfstr";

echo "User Class -> : " . $user->getFullName() . "<br>";

$client = new Client();
$client->first_name = "Aaron";
$client->last_name = "Foster";
$client->user_name ="Aaronfstr";
$client->city = "Ankara";
$client->state = "Yenimahalle";
$client->country = "Turkey";

echo $client->getFullName() . "<br>";
echo $client->location();


