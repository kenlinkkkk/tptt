<?php

/**
 * @param $key
 * @param $data
 * @return bool|string
 */
function aes128Encrypt($key, $data) {
    return base64_encode(openssl_encrypt($data, 'aes-128-ecb', $key, OPENSSL_RAW_DATA));
}

/**
 * @param $key
 * @param $data
 * @return bool|string
 */
function aes128Decrypt($key, $data) {
    return openssl_decrypt(base64_decode($data), 'aes-128-ecb', $key, OPENSSL_RAW_DATA);
}
