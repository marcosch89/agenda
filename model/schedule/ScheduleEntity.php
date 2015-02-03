<?php

class ScheduleEntity {
    
  protected $schedule_id;
  protected $schedule_client;
  protected $schedule_doctor;
  protected $schedule_time;
  protected $schedule_removed;
  protected $schedule_cpf;
  
  
  public function getSchedule_id() {
      return $this->schedule_id;
  }

  public function getSchedule_client() {
      return $this->schedule_client;
  }

  public function getSchedule_doctor() {
      return $this->schedule_doctor;
  }

  public function getSchedule_time() {
      return $this->schedule_time;
  }

  public function getSchedule_removed() {
      return $this->schedule_removed;
  }

  public function getSchedule_cpf() {
      return $this->schedule_cpf;
  }

  public function setSchedule_id($schedule_id) {
      $this->schedule_id = $schedule_id;
      return $this;
  }

  public function setSchedule_client($schedule_client) {
      $this->schedule_client = $schedule_client;
      return $this;
  }

  public function setSchedule_doctor($schedule_doctor) {
      $this->schedule_doctor = $schedule_doctor;
      return $this;
  }

  public function setSchedule_time($schedule_time) {
      $this->schedule_time = $schedule_time;
      return $this;
  }

  public function setSchedule_removed($schedule_removed) {
      $this->schedule_removed = $schedule_removed;
      return $this;
  }

  public function setSchedule_cpf($schedule_cpf) {
      $this->schedule_cpf = $schedule_cpf;
      return $this;
  }


    
    
}

