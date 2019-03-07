<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 06/03/2019
 * Time: 15:11
 */

namespace Core;


class Request
{

    private $post;
    private $get;
    private $files;
    private $cookie;
    private $session;
    private $request;
    private $server;    /**
     * Request constructor.
     *
     * @param array $post
     * @param $get
     * @param $files
     * @param $cookie
     * @param $session
     * @param $request
     * @param $server
     */
    public function __construct(array $post,$get,$files,$cookie,$session,$request,$server)
    {
        $this->post = $post;
        $this->get = $get;
        $this->files = $files;
        $this->cookie = $cookie;
        $this->session = $session;
        $this->request = $request;
        $this->server = $server;
    }

    /**
     * @return Request
     */
    public static function createFormGlobals()
    {
        session_start();
        return new Request($_POST, $_GET, $_FILES, $_COOKIE, $_SESSION, $_REQUEST, $_SERVER);
    }

    public function getPost()
    {
        return $this->post;
    }
    public function getGet()
    {
        return $this->get;
    }
    public function getFiles()
    {
        return $this->files;
    }
    public function getCookie()
    {
        return $this->cookie;
    }
    public function getSession()
    {
        return $this->session;
    }
    public function getRequest()
    {
        return $this->request;
    }
    public function getServer()
    {
        return $this->server;
    }


}