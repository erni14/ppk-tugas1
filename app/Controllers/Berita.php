<?php
namespace App\Controllers;

class Berita extends BaseController {
    public function index() {
        echo view('templates/header');
        echo view('home/index');
        echo view('templates/footer');
    }

    public function berita1() {
        echo view('templates/header');
        $berita_xml_1 = file_get_contents('https://rss.tempo.co/bisnis');
        $xml_1 = simplexml_load_string($berita_xml_1);
        $data['berita_xml_1'] = $xml_1;
        echo view('berita1/index', $data);
        echo view('templates/footer');
    }

    public function berita2() {
        echo view('templates/header');
        $berita_xml_2 = file_get_contents('https://www.cnnindonesia.com/ekonomi/rss');
        $xml_2 = simplexml_load_string($berita_xml_2);
        $data['berita_xml_2'] = $xml_2;
        echo view('berita2/index', $data);
        echo view('templates/footer');
    }

    public function berita3() {
        echo view('templates/header');
        $berita_xml_3 = file_get_contents('https://www.republika.co.id/rss');
        $xml_3 = simplexml_load_string($berita_xml_3);
        $data['berita_xml_3'] = $xml_3;
        echo view('berita3/index', $data);
        echo view('templates/footer');
    }

    public function berita4() {
        echo view('templates/header');
        $berita_json = file_get_contents('https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json');
        $json_port = json_decode($berita_json, true);
        //Dapatkan 15 data terakhir
        $data['berita_json'] = $json_port;
        // echo "<pre>";
        // print_r($json_port);
        echo view('berita4/index', $data);
        echo view('templates/footer');
    }

}