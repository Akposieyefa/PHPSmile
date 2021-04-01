<?php

namespace App\Libs;

class Helper
{
    protected $date;

    public function formatDate($date)
    {
        $this->date = date('F j, Y, g:i a', strtotime($date));
        return $this->date;
    }

    public  function shortDate($date)
    {
        $this->date = date("jS F Y", strtotime($date));
        return $this->date;
    }

    public function textShorten($text, $limit = 400)
    {
        $text = $text . " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . ".....";
        return $text;
    }

}