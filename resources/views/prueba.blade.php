<?php
    $uri = 'http://api.football-data.org/v2/competitions/2000/teams';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: 1b8dcfc7c2ec4c00afdfee2d7979dd2b';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $matches = json_decode($response);

    print_r($matches);
?>
