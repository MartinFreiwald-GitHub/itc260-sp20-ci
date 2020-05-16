<?php
//application/views/pics/index.php

$this->load->view($this->config->item('theme') . 'header');
?>

<div class="list-group mt-3"> 
<?php  // CodeIgnitor search for dynamic attributes followed by  pics is the controller, view is function, 
/*
* 'pics/view/squirrel' //pics is the controller, view is function, squirrel is the view output or paragmeter
* 'Squirrels' This is what the user see for a link.
* Key value array for attributes 
*/
echo anchor('pics/squirrel', 'Squirrels', ['title' => 'The best Squirrels!','class' =>'list-group-item list-group-item-action']);

/*
* 'pics/view/pygmy_rabbit' //pics is the controller, view is function, squirrel is the view output or paragmeter
* 'Squirrels' This is what the user see for a link.
* Key value array for attributes 
*/
echo anchor('pics/pygmy_rabbit', 'Pygmy_rabbit', ['title' => 'The best Pygmy_rabbit!','class' =>'list-group-item list-group-item-action']);

/*
* 'pics/view/crows' //pics is the controller, view is function, squirrel is the view output or paragmeter
* 'Squirrels' This is what the user see for a link.
* Key value array for attributes 
*/
echo anchor('pics/crows', 'Crows', ['title' => 'The best Crows!','class' =>'list-group-item list-group-item-action']);


?>

</div>

<?php

$this->load->view($this->config->item('theme') . 'footer');

?>