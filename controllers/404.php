<?php

class PagNoFoundController
{
    public function index()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/404.php";
    }
}