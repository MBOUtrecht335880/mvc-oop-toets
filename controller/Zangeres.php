<?php

class Zangeres extends BaseController
{

    public function index ()
    {

        $data = [
            'title' => 'Top 5 rijkste zangeresen ter wereld'
        ];

        $this->view('zangeres', $data);            
    }
}