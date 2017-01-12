<?php
/**
 * Created by PhpStorm.
 * User: To Olympus
 * Date: 2017-01-11
 * Time: 10:36 AM
 */
class Student{
    /*
     * Student constructor. constructor for a student
     */
    function __construct()
    {
        $this->surname = '';
        $this->firstname = '';
        $this->emails = array();
        $this->grades = array();
    }

    /*
     * put an email into the emails array
     * @param $which what kind of email
     * @param $address the email
     */
    function add_email($which, $address){
        $this->emails[$which]=$address;
    }

    /*
     * put a grade into the grades array
     */
    function add_grade($grade){
        $this->grades[]=$grade;
    }

    /*
     * @return float|int calculate the average grade of the student
     */
    function average(){
        $total = 0;
        foreach($this->grades as $value){
            $total += $value;
        }
        return $total/count($this->grades);
    }

    /*
     * @return string output of a student
     */
    function toString() {
        $result = $this->firstname . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
