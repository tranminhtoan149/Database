<?php
class Home extends Controller
{
    public $data = array();

    //all client
    function HomePage()
    {
        $this->view("Login");
    }

    function ClientPage()
    {
        $this->data['page'] = 'ClientInfo';
        $client = $this->model('Client');
        $this->data['listClient'] = $client->getAllClientInfo();
        $this->view("Layout", $this->data);
    }
    function SearchClient()
    {
        $keyword = $_POST['keyword'];
        $client = $this->model('Client');
        $this->data['listClient'] = $client->searchClient($keyword);
        echo $this->view('Content/ClientInfoSearch', $this->data);
    }
    function DetailClient($id)
    {
        $client = $this->model('Client');
        $this->data['page'] = 'DetailClient';
        $this->data['client'] = $client->getClient($id);
        $this->data['dataClient'] = $client->getDetailClient($id);
        $this->view("Layout", $this->data);
    }
    function StatisticPage()
    {
        $branch = $this->model('Branch');
        $this->data['page'] = 'Statistic';
        $this->data['branch'] = $branch->getAllBranch();
        $this->view('Layout', $this->data);
    }
    function doStatistic()
    {
        $branch = $this->model('Branch');
        $this->data['statistic'] = $branch->getStatistic($_POST['id'], $_POST['year']);
        echo $this->view('Content/doStatistic', $this->data);
    }
    function AddPage()
    {
        $room = $this->model('Room');
        $this->data['supp'] = $room->getAllSupp();
        $this->data['page'] = 'Add';
        $this->data['id'] = $room->getLatesId();
        $this->view('Layout', $this->data);
    }
    function doAdd()
    {
        $room = $this->model('Room');
        //insert room type
        $room->addRoomType($_POST['name'], number_format($_POST['square'], 1), (int)$_POST['guest'], $_POST['description']);
        //insert bed info
        $id = $room->getLatesId()['latestId'];
        $room->addBedInfo($id, number_format($_POST['bed_size'], 1), (int)$_POST['input_quantity']);
        $room->addSupp($_POST['supp'], $id);
        // insert supplier in room

    }
    function doLogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username != 'sManager') {
            echo 'T??i kho???n kh??ng t???n t???i';
        } else if ($password != 'admin') {
            echo 'M???t kh???u kh??ng ????ng';
        } else echo 'valid';
        set_logged($username);
    }
    function doLogout()
    {
        doLogout();
        header("Location: http://localhost/Database/admin ");
    }
}
