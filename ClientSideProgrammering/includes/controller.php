<?php
if(!empty($_GET['page']))
{
if (!file_exists (trim(strtolower($_GET['page'].".php"))) )
    {
    include("pages/home.php");
    }
      else
      {
      include($_GET['page'].".php");
      }
}
        else
        {
        include("pages/home.php");
        }
