<?php
  $requestData = http_build_query(json_decode($_REQUEST['request'],true));
  $opts = array('http' =>
      array(
          'method'  => $_REQUEST['method'],
          'header'  => 'Content-type: application/x-www-form-urlencoded',
          'content' => $requestData
      )
  );
  $context  = stream_context_create($opts);
  if($_REQUEST['method'] == 'POST') {
    $result = file_get_contents($_REQUEST['url'], false, $context);
  }else {
    $result = file_get_contents($_REQUEST['url'].'?'.$requestData);
  }
if(isset($result) && strlen($result) > 0)
  echo $result;
else
  echo 'Error with Graph API';
