<?php

class IndexController extends Controller
{
    public function index()
    {
        $this->viewRender('index');
    }

    public function apiGeneration()
    {
        if (isset($_POST['submit'])) {
            if (!empty($_POST['location'])) {
                $location = $_POST['location'];
                $api_key = "128086befff2d75041c9e1f30c9b0ce1";
                $api = "https://api.openweathermap.org/data/2.5/weather?q=$location&appid=$api_key";
                $api_data = file_get_contents($api);
                $data = json_decode($api_data, true);
                $array['description'] = $data['weather'][0]['description'];
                $array['temperature'] = intval($data['main']['temp'] - 273);
                $array['pressure'] = intval($data['main']['pressure']);
                $array['humidity'] = intval($data['main']['humidity']);
                $array['wind'] = intval($data['wind']['speed'] * 1.609344);
                $array['date'] = date('H:i', $data['dt']);
                $array['location'] = $data['name'];
                $this->viewRender('show', $array);
            } else {
                redirect('');
            }
        } else {
            redirect('error');
        }
        unset($_POST);
    }
}