<?php

interface AbstractModelDAO
{
    function findAll();

    function findById($id);

    function insert($obj);

    function update();

    function delById($id);
}