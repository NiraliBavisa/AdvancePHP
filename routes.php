<?php

return [
    '/testRouter/users/{id}'                 => 'UserController@show',
    '/testRouter/users/{uid}/posts/{pid}'    => 'UserController@showPost',
   
];

?>