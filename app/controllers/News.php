<?php

class News extends Controller
{
    public function index()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.news.developeridn.com/ekonomi",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        $response = json_decode($response, true); //because of true, it's in an array


        curl_close($curl);

        $data = $response['data'];


        $this->view('templates/header');
        $this->view('templates/sidebar');
        //    $this->view('templates/navbar');
        $this->view('news/news', $data);
        $this->view('templates/footer');
    }

    public function detail(...$url)
    {

        $strUrl = implode('/', $url);

        $strUrl = substr_replace($strUrl, '/', 7, 0);


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.news.developeridn.com/detail/?url=" . $strUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $response = json_decode($response, true); //because of true, it's in an array

        curl_close($curl);

        $data = $response['data'];




        $this->view('templates/header');
        $this->view('templates/sidebar');
        //$this->view('templates/navbar');
        $this->view('news/detail', $data);

        $this->view('templates/footer');
    }
}
