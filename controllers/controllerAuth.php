<?php
require_once ('models/model.php');
require_once ('models/modelAuth.php');

function inscription()
{
    if(isset($_POST['formulInscription']))    
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $pass = htmlspecialchars($_POST['pass']);   
        $pass2 = htmlspecialchars($_POST['pass2']);   
        $mail = htmlspecialchars($_POST['mail']);   
        $mail2 = htmlspecialchars($_POST['mail2']);
        if(!empty($_POST['pseudo']) AND !empty($_POST['pass']) AND !empty($_POST['pass2']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']))
        {
            if($mail == $mail2)
            {
                $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                if($pass == $pass2)
                {
                    if (pseudoCheck($pseudo)== 0) 
                    {
                        if (emailCheckInsciption($mail)== 0)
                        {
                            if(strlen($pseudo)<=255)
                            {
                                addUser($pseudo, $pass_hache, $mail);
                                $accept='Votre compte a été créé avec succés ! Connectez-vous';                            
                            }
                            else
                            {
                                $erreur = 'Ton pseudo est trop long !';
                            }
                        }
                        else
                        {
                            $erreur = 'Ton email est déja prit  !';
                        }     
                    }
                    else
                    {
                        $erreur = 'Ton pseudo est déja prit  !';          
                    }
                }
                else
                {
                    $erreur = 'Les deux MP ne correspondent pas !';
                }
            }
            else
            {
                $erreur = 'Les deux mails ne correspondent pas !';
            }
        }
        else
        {
        $erreur= 'Champs non remplies';
        }
    }
require 'view/viewInscription.php';
}

function connectionSend()
{
    if(isset($_POST['formulConnect']))    
    {
        $mailConnect = htmlspecialchars($_POST['mailConnect']);
        $passConnect = htmlspecialchars($_POST['passConnect']);   
        if(!empty($_POST['mailConnect']) AND !empty($_POST['passConnect']))
        {
            emailCheckConnection($mailConnect);
            // vérif le pass
            $isPassCorrect = password_verify($_POST['passConnect'], $result['pass']);
            if (!$result) 
            {
                $erreur='Erreur vous n\'avez pas de compte';
                   
            }
            else
            {
                if ($isPassCorrect)
                    {
                       $accept='welcome';
                    }
                else
                    {
                        $erreur = 'le mp !!';
                        // blablabla sesion_start
                    }
            }
        }
        else
        {
            $erreur = 'Tout les champs doivent être complétés';
        }
    }
require 'view/connectionView.php';
}