<?php

class Home extends Controller
{
    public function index()
    {

        $data['portofolio'] = $this->model('Portofolio_model')->getPortofolio();




        foreach ($data['portofolio'] as $key => $value) {
            $stockCode = $data['portofolio'][$key]['stockCode'];
            $html = file_get_html('https://finance.yahoo.com/quote/' . $stockCode . '.JK?p=' . $stockCode . '.JK&.tsrc=fin-srch');
            $lastPrice = str_replace(',', '', substr($html->find('div[class=My(6px) Pos(r) smartphone_Mt(6px)]', 0)->plaintext, 0, 5));
            $data['portofolio'][$key]['lastPrice'] = $lastPrice;
        }









        $this->view('templates/header');
        $this->view('templates/sidebar');
        //$this->view('templates/navbar');

        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function insert()
    {






        $this->view('templates/header');

        $this->view('templates/sidebar');
        $this->view('templates/navbar');


        $this->view('home/insert');
        $this->view('templates/footer');
    }
    public function save()
    {

        $stockCode = $_POST['stockCode'];
        $lot = $_POST['lot'];
        $avgBuy = $_POST['avgBuy'];
        $buyAt = $_POST['buyAt'];
        $stockBroker = $_POST['stockBroker'];
        var_dump($stockBroker);

        if (!$stockCode || !$lot || !$avgBuy || !$buyAt) {
            Flasher::setFlash('Gagal', 'form harus diisi', 'danger');
            header('Location: ' . BASEURL . 'home/insert');
            exit;
        }

        $this->model('portofolio_model')->insertPortofolio($_POST);
        Flasher::setFlash('Berhasil', 'data berhasil dimasukan ke portofolio', 'success');
        header('Location: ' . BASEURL . 'home');
        exit;
    }

    public function delete($id)
    {
        $this->model('portofolio_model')->deletePortofolio($id);
        Flasher::setFlash('Berhasil', 'data berhasil dihapus', 'success');
        header('Location: ' . BASEURL . 'home');
        exit;
    }
}
