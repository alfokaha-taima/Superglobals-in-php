
<?php 
function getProjectName()
{
    $script = $_SERVER['SCRIPT_NAME'];
    $project = explode('/', $_SERVER['REQUEST_URI'])[1];
    echo  $project.'<br>';
    echo  $script ;
}
 getProjectName();
 ?>