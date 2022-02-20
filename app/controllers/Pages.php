<?php

class Pages  extends Controller {
    public function __construct() {
    }
    public function index() {
        $data = [
            'title' => 'Welcome To HOME PAGE',
        ];
        $this->view('pages/index', $data);
    }
    public function about() {
        $data = ['title' => 'Welcome About'];

        $this->view('pages/about', $data);
    }
}
