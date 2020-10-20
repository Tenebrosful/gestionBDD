<?php


abstract class Model
{
    abstract function save();

    abstract function update();

    abstract function delete();

    abstract function find();
}