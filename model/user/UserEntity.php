<?php

class UserEntity {
    
  protected $user_id;
  protected $user_name;
  protected $user_profile;
  protected $user_removed;

  
  public function getUser_id() {
      return $this->user_id;
  }

  public function getUser_name() {
      return $this->user_name;
  }

  public function getUser_profile() {
      return $this->user_profile;
  }

  public function getUser_removed() {
      return $this->user_removed;
  }

  public function setUser_id($user_id) {
      $this->user_id = $user_id;
      return $this;
  }

  public function setUser_name($user_name) {
      $this->user_name = $user_name;
      return $this;
  }

  public function setUser_profile($user_profile) {
      $this->user_profile = $user_profile;
      return $this;
  }

  public function setUser_removed($user_removed) {
      $this->user_removed = $user_removed;
      return $this;
  }


    
}
