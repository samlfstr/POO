<?php
/*
 * Method override
 * Heritage
 */

class Utilisateur
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
    public function getUserName(): string
    {
        return $this->user_name;
    }
}

class Client extends Utilisateur {
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

class Admin extends Utilisateur{
    var $admin = true;
}

$user = new Utilisateur();
$user->first_name = "Samuel";
$user->last_name = "Foster";
$user->user_name = "Samlfstr";

echo $user->getFullName() . "<br>";

$client = new Client();
$client->first_name = "Aaron";
$client->last_name = "Foster";
$client->user_name ="Aaronfstr";
$client->city = "Ankara";
$client->state = "Yenimahalle";
$client->country = "Turkey";

echo $client->getFullName() . "<br>";
echo $client->location();


