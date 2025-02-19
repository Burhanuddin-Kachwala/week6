<?php



test('test1', function () {
   
    $obj = new stdClass();
    $obj->result = 'burhan';
    $result = (string)$obj->result;
    expect($result)->toEqual('burhan');
});
