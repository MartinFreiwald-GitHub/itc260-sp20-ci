<?php

//application/controllers/Pics.php
class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
        //         $this->config->set_item('banner', 'News Section');
        //         $this->load->model('news_model');
        //         $this->load->helper('url_helper');
        // }
        }
        public function index()
        {
               
               
                $nav1 = $this->config->item('nav1');
                
                $this->config->set_item('title', 'picture list');
                $data['title'] = 'picture archive';
                $this->load->view('pics/index', $data);   
                $this->load->view('pics/view', $data);  
        }

        public function view($slug = NULL)
        {
                $api_key = $this->config->item('flickrKey');
                $tags = $slug;

                $perPage = 25;
                $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
                $url.= '&api_key=' . $api_key;
                $url.= '&tags=' . $tags;
                $url.= '&per_page=' . $perPage;
                $url.= '&format=json';
                $url.= '&nojsoncallback=1';
                
                $response = json_decode(file_get_contents($url));
                $pics = $response->photos->photo;
                
                /*
                echo "<pre>";
                echo var_dump($response);
                echo "</pre>";
                die;
                */
                
                foreach($pics as $pic){

                $size = 'm';
                $photo_url = '
                http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

                echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
                
                }            
        }
}