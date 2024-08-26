<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// Determine what page you are on
		$this->$pageURI();
	}

    // home page function
	function home()
	{
		// Get data from the defined model method - model3D_info()
		$data = $this->model->model3D_info();
		// Tell the loader what view to load and which dat to use
		$this->load->view('home', $data);
	}

    function apiCreateTable(){
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }

    function apiInsertData(){
        $data = $this->model->dbInsertData();
        $this->load->view("viewMessage", $data);
    }

    function apiGetData()// Gets db data
    {
        $data = $this->model->dbGetData();
        $this->load->view("view3DAppData", $data);
    }

    function apiGetJson()
    {
        $this->load->view("viewJson");
    }
    }
?>