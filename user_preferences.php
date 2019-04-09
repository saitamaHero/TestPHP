<?php
require 'User.php';

$user = new User('dAcevedo');

$user -> addPreference(new Preference('colorButtons', '#5041f4', Preference::TYPE_STRING));
$user -> addPreference(new Preference('zoom',  80, Preference::TYPE_INT));
$user -> addPreference(new Preference('welcomeMessage',  'Dionicio es un buen compañero.... y nadie lo puede negar!', Preference::TYPE_STRING));
$user -> addPreference(new Preference('showMessage',  true, Preference::TYPE_INT));

echo json_encode($user, JSON_UNESCAPED_UNICODE).'<br>';

$value   = $user -> getPreference('colorButtons');
$content = $user -> getPreference('welcomeMessage');
$showMessage = $user -> getPreference('showMessage');


if($showMessage -> value){
    echo '<h1 style="color:'.$value -> value.';">'.$content -> value.'</h1>';
}



