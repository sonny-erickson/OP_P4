<?php
require_once ('models/model.php');
require_once ('models/modelAuth.php');
require_once ('controllers/controller.php');

function profil()
{
    require 'view/admin/profilView.php';
}
function admin()
{
    require 'view/admin/adminView.php';

}
function signalement()
{
    require 'view/admin/signalementView.php';
}