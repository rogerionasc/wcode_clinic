<?php

namespace App\models;

abstract class Model
{
    /** @var object|null **/
    protected $data;

    /** @var ?\PDOException **/
    protected $fail;

    /** @var string\null **/
    protected $message;

    public function data(): ?object
    {
        return $this->data;
    }

    public function fail(): ?\PDOException
    {
        return $this->fail;
    }

    public function message(): ?string
    {
        return $this->message;
    }

    protected function create()
    {

    }

    protected function read(string $string, string $params = null)
    {

    }

    protected function update()
    {

    }

    protected function delete()
    {

    }

    protected function safe(): ?array
    {
        
    }

    private function filter()
    {
        
    }
    
    






}