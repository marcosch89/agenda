<?php

class DoctorEntity {
    
  protected $doctor_id;
  protected $doctor_name;
  protected $doctor_phone;
  protected $doctor_removed;
  protected $doctor_email;
  protected $doctor_city;
  protected $doctor_state;
  protected $doctor_adress;
  protected $doctor_rg;
  protected $doctor_cpf;
  protected $doctor_speciality;
    
  public function getDoctor_id() {
      return $this->doctor_id;
  }

  public function getDoctor_name() {
      return $this->doctor_name;
  }

  public function getDoctor_phone() {
      return $this->doctor_phone;
  }

  public function getDoctor_removed() {
      return $this->doctor_removed;
  }

  public function getDoctor_email() {
      return $this->doctor_email;
  }

  public function getDoctor_city() {
      return $this->doctor_city;
  }

  public function getDoctor_state() {
      return $this->doctor_state;
  }

  public function getDoctor_adress() {
      return $this->doctor_adress;
  }

  public function getDoctor_rg() {
      return $this->doctor_rg;
  }

  public function getDoctor_cpf() {
      return $this->doctor_cpf;
  }

  public function getDoctor_speciality() {
      return $this->doctor_speciality;
  }

  public function setDoctor_id($doctor_id) {
      $this->doctor_id = $doctor_id;
      return $this;
  }

  public function setDoctor_name($doctor_name) {
      $this->doctor_name = $doctor_name;
      return $this;
  }

  public function setDoctor_phone($doctor_phone) {
      $this->doctor_phone = $doctor_phone;
      return $this;
  }

  public function setDoctor_removed($doctor_removed) {
      $this->doctor_removed = $doctor_removed;
      return $this;
  }

  public function setDoctor_email($doctor_email) {
      $this->doctor_email = $doctor_email;
      return $this;
  }

  public function setDoctor_city($doctor_city) {
      $this->doctor_city = $doctor_city;
      return $this;
  }

  public function setDoctor_state($doctor_state) {
      $this->doctor_state = $doctor_state;
      return $this;
  }

  public function setDoctor_adress($doctor_adress) {
      $this->doctor_adress = $doctor_adress;
      return $this;
  }

  public function setDoctor_rg($doctor_rg) {
      $this->doctor_rg = $doctor_rg;
      return $this;
  }

  public function setDoctor_cpf($doctor_cpf) {
      $this->doctor_cpf = $doctor_cpf;
      return $this;
  }

  public function setDoctor_speciality($doctor_speciality) {
      $this->doctor_speciality = $doctor_speciality;
      return $this;
  }


}

