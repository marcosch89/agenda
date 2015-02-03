<?php

class ClientEntity {

    protected $client_id;
    protected $client_name;
    protected $client_phone;
    protected $client_removed;
    protected $client_adress;
    protected $client_state;
    protected $client_city;
    protected $client_rg;
    protected $client_cpf;
    protected $client_relationship_status;
    protected $client_email;

    public function getClient_id() {
        return $this->client_id;
    }

    public function getClient_name() {
        return $this->client_name;
    }

    public function getClient_phone() {
        return $this->client_phone;
    }

    public function getClient_removed() {
        return $this->client_removed;
    }

    public function getClient_adress() {
        return $this->client_adress;
    }

    public function getClient_state() {
        return $this->client_state;
    }

    public function getClient_city() {
        return $this->client_city;
    }

    public function getClient_rg() {
        return $this->client_rg;
    }

    public function getClient_cpf() {
        return $this->client_cpf;
    }

    public function getClient_relationship_status() {
        return $this->client_relationship_status;
    }

    public function getClient_email() {
        return $this->client_email;
    }

    public function setClient_id($client_id) {
        $this->client_id = $client_id;
        return $this;
    }

    public function setClient_name($client_name) {
        $this->client_name = $client_name;
        return $this;
    }

    public function setClient_phone($client_phone) {
        $this->client_phone = $client_phone;
        return $this;
    }

    public function setClient_removed($client_removed) {
        $this->client_removed = $client_removed;
        return $this;
    }

    public function setClient_adress($client_adress) {
        $this->client_adress = $client_adress;
        return $this;
    }

    public function setClient_state($client_state) {
        $this->client_state = $client_state;
        return $this;
    }

    public function setClient_city($client_city) {
        $this->client_city = $client_city;
        return $this;
    }

    public function setClient_rg($client_rg) {
        $this->client_rg = $client_rg;
        return $this;
    }

    public function setClient_cpf($client_cpf) {
        $this->client_cpf = $client_cpf;
        return $this;
    }

    public function setClient_relationship_status($client_relationship_status) {
        $this->client_relationship_status = $client_relationship_status;
        return $this;
    }

    public function setClient_email($client_email) {
        $this->client_email = $client_email;
        return $this;
    }

}
