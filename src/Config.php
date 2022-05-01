<?php
namespace src;

class Config {
    // const BASE_DIR = '/meusite.proj/public_html';
    // const BASE_DIR = '/meusite.proj/public';
    const BASE_DIR = '';

    const DB_CHARSET = 'utf8';
    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'tubaraorosa';
    const DB_USER = 'root';
    const DB_PASS = '';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}