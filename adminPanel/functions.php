<?php

function validateProject(array $postData): bool {
    return (!empty($postData['title'])&& !empty($postData['link'])&& !empty($postData['image']));
}

function setVariables(array $data): array {
    $result = [];
    $result[':title'] = filter_var($data['title'], FILTER_SANITIZE_STRING);
    $result[':link'] = filter_var($data['link'], FILTER_SANITIZE_URL);
    $result[':image'] = 'images/' . $data['image'];
    return $result;
}