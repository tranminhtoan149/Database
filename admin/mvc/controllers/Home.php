<?php
class Home extends Controller
{
    public $data = array();

    //all client
    function HomePage()
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
        $this->data['client']=''
        $this->data['dataClient'] = $client->getDetailClient($id);
        $this->view("layout", $this->data);
    }
}
