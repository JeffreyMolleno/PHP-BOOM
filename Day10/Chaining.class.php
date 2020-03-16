<?php

 class Course{

    private $course, $name, $mentor, $batch, $office_hours, $email, $contact;
    
    public function __construct($course, $name){
        $this->course = $course;
        $this->name = $name;        
    }

    public function setBatch($batch){
        $this->batch = $batch;
        return $this;
    }

    public function setMentor($mentor){
        $this->mentor = $mentor;
        return $this;
    }

    public function setOfficeHours($office_hours){
        $this->office_hours = $office_hours;
        return $this;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function setContact($contact){
        $this->contact = $contact;
        return $this;
    }

    public function getInfo(){
        return print('I am '.$this->name.'. A trainee under the '. $this->course.' course. Conscientiously guided by our mentor '. $this->mentor.'. Working hours '.$this->office_hours.'. My given company email is '.$this->email.'. Conctact details include '.$this->contact);
    }

 }

 $pasaway = new Course('PHP','Jeff Molleno');

 $pasaway->setBatch(1)->setMentor('Jino')->setOfficeHours('0900-1800')->setEmail('jeffrey.molleno@boom.camp')->setContact('09205683083')->getInfo();