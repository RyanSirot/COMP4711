<?php
/**
 * Created by PhpStorm.
 * User: To Olympus
 * Date: 2017-01-11
 * Time: 10:36 AM
 */
class Student{
    function __construct()
    {
        $this->surname = '';
        $this->firstname = '';
        $this->emails = array();
        $this->grades = array();
    }
    function add_email($which, $address){
        $this->emails[$which]=$address;
    }

    function add_grade($grade){
        $this->grades[]=$grade;
    }
    function average(){
        $total = 0;
        foreach($this->grades as $value){
            $total += $value;
        }
        return $total/count($this->grades);
    }
    function toString() {
        $result = $this->firstname . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
