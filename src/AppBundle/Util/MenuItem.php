<?php

namespace AppBundle\Util;

class MenuItem
{
    private $link='';
    private $text='';
    private $separator=false;
    private $submenu=null;

    public function getLink()
    {
        return $this->link;
    }

    public function getText()
    {
        return $this->text;
    }

    public function isSeparator()
    {
        return $this->separator;
    }

    public function getSubmenu()
    {
        return $this->submenu;
    }

    public function setLink($value)
    {
        $this->link = $value;
        return $this;
    }

    public function setText($value)
    {
        $this->text = $value;
        return $this;
    }

    public function setSeparator($value)
    {
        $this->separator = $value;
        return $this;
    }

    public function addSubmenu($value)
    {
        $this->submenu[] = $value;
        return $this;
    }
}
