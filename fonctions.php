<?php

//* Nombre de page
$typedesite=0;

//* Nombre de page
$nombredepage=0;

function spa()
{
    echo "\n\033[32mHEADER:\033[0m\n";
    echo "\033[32m----------------------------------------------------------------------------------\033[0m\n\n";
echo "Liste d'elements possible de l'entête du site :\n";
echo "[A]-Mini bar d`infos\n";
echo "[B]-Logo\n[C]-Navbar\n[D]-Logo + navbar\n";
echo "[E]-Intro text\n[F]-Intro image\n[G]-Intro image + text\n[H]-Intro image + text + formulaire\n";
echo "[I]-Intro image + text + bouton\n[J]-Intro slide images\n[K]-Intro slide images + text\n";
echo "[L]-Intro slide images + text + bouton\n[M]-Intro slide images + text + formulaire\n[N]-Intro vidéo\n";
echo "[O]-Intro vidéo + text\n[P]-Intro vidéo + text + bouton\n[Q]-Intro vidéo + text + formulaire\n";
echo "\033[32m----------------------------------------------------------------------------------\033[0m\n\n";
$composant =null;

// * Obligation à renseigner une valeur
while (empty($composant) OR !is_string($composant))
{
    print "Veillez renseigner hiérarchiquement chaque composant(s) à y intégrer dans votre Header :";
    $composant = readline("");
}
echo "\n";

}

function minibarinfos()
{

}

function intro()
{

}

?>