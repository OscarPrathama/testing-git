<?php
namespace Controllers\Controller;
interface Controller{

    public function index();
    public function show();
    public function create();
    public function store();
    public function edit();
    public function update();
    public function delete();

}