<?php


class Modifer
{
    var $this_is_public;
    protected $only_extended;
    private $for_the_class_itsef;

    public function helloWorld()
    {
        return "Hello Every One";
    }

    protected function helloFriend()
    {
        return "Hello only friends";
    }

    private function helloMyself()
    {
        return "Talking to myself";
    }
}

class Protect extends Modifer
{
    public $this_is_public = "Cahange it than";
    protected $only_extended = "Change it than";
    // $for_the_class_itsef - I cant access to this
}
