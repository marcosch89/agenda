<?php

class SpecialityEntity {
    
    
    protected $speciality_id;
    protected $speciality_name;
    
    public function getSpeciality_id() {
        return $this->speciality_id;
    }

    public function getSpeciality_name() {
        return $this->speciality_name;
    }

    public function setSpeciality_id($speciality_id) {
        $this->speciality_id = $speciality_id;
        return $this;
    }

    public function setSpeciality_name($speciality_name) {
        $this->speciality_name = $speciality_name;
        return $this;
    }


    
}

