<?php
namespace Employee;
class Employee {
    private $surName;
    private $name;
    private $birth;
    private $address;
    private $job;
    public function __construct($surName,$name,$birth,$address,$job){
        $this->surName=$surName;
        $this->name=$name;
        $this->birth=$birth;
        $this->address=$address;
        $this->job=$job;
    }
    public function getSurName(){
        return $this->surName;
    }
    public function setSurName($surName){
        $this->surName = $surName;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getBirth(){
        return $this->birth;
    }
    public function setBirth($birth){
        $this->birth = $birth;
    }
    public function getAddress(){
        return $this->address;
    }
    public function setAddress($address){
        $this->address = $address;
    }
    public function getJob(){
        return $this->job;
    }
    public function setJob($job){
        $this->job = $job;
    }
}