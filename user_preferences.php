<?php
require 'User.php';

$user = new User('dAcevedo');

$user -> addPreference(new Preference('colorButtons', '#5041f4', Preference::TYPE_STRING));
$user -> addPreference(new Preference('zoom',  80, Preference::TYPE_INT));
$user -> addPreference(new Preference('emailMsg',  'Por favor no reenviar este mensaje.', Preference::TYPE_STRING));
$user -> addPreference(new Preference('showMessage',  'true', Preference::TYPE_BOOL));

echo json_encode($user, JSON_UNESCAPED_UNICODE).'<br>';

$value   = $user -> getPreference('colorButtons');
$content = $user -> getPreference('emailMsg');
$showMessage = $user -> getPreference('showMessage');


if($showMessage -> value){
    echo '<h1 style="color:'.$value -> value.';">'.$content -> value.'</h1>';
}

echo var_dump(filter_var(80, FILTER_VALIDATE_INT));

echo '<table class="table table-sm">';
echo '<thead><th>Key</th><th>Value</th><th>Type</th></thead>';
echo '<tbody>';

foreach ($user -> preferences as $key => $pref) {
    echo '<tr><td style="border: 1px solid black;">'.$pref -> key
    .'</td><td style="border: 1px solid black;">'.$pref -> value
    .'</td><td style="border: 1px solid black;">'.$pref -> type.'</td></tr>';
}
echo '</tbody>';
echo  '</table>';


