<?php

class ProfileEntity {
    
  protected $profile_id;
  protected $profile_description;
  protected $profile_removed;
  
  public function getProfile_id() {
      return $this->profile_id;
  }

  public function getProfile_description() {
      return $this->profile_description;
  }

  public function getProfile_removed() {
      return $this->profile_removed;
  }

  public function setProfile_id($profile_id) {
      $this->profile_id = $profile_id;
      return $this;
  }

  public function setProfile_description($profile_description) {
      $this->profile_description = $profile_description;
      return $this;
  }

  public function setProfile_removed($profile_removed) {
      $this->profile_removed = $profile_removed;
      return $this;
  }


    
}
