<?php

function validateProject($postData) {
    return (!empty($postData['title'])&& !empty($postData['link'])&& !empty($postData['image']));
}

function setVariables($data) {
    $result = [];
    $result[':title'] = filter_var($data['title'], FILTER_SANITIZE_STRING);
    $result[':link'] = filter_var($data['link'], FILTER_VALIDATE_URL);
    $result[':image'] = 'images/' . $data['image'];
    return $result;
}