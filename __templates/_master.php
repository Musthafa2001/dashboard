<!doctype html>

<html lang="en" data-bs-theme="auto">

<?php Session::load("head") ?>

<body>

    <?php

    Session::load("__header");

    Session::load(session::currentScript());

    Session::load("__footer") ?>
