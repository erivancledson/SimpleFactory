<?php

require 'facebook.php';

$fb = new Facebook();

$post = $fb->createPost();
$post->setAutor("Erivan Cledson");
$post->setMensagem("Minha mensagem");


echo "Autor: ".$post->getAutor();



$post2 = $fb->createPost();
$post2->setAutor("Erivan ");
$post2->setMensagem("Minha mensagem");

echo "Autor: ".$post2->getAutor();