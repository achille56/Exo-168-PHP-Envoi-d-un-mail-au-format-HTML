<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'leclercqjm59@outlook.fr',
];

$subject = "Les jeux de l'année 2023";

$html = '
    <html lang="fr">
        <head>
            <title>Les Jeux pour 2023</title>
        </head>
        <body>
            <div>
                <!-- Vos actualités ici -->
                <p>Liste des jeux</p>
                <ul>
                    <li>League of legende 2</li>
                    <li>Diablo 4</li>
                    <li>Fifa 2024</li>
                    <li>Projet Staro</li>
                </ul>
            </div>
        </body>
    </html>
';
$headers = array(
    "Reply-To" => "leclercqjm59@gmail.com",
    "X-Mailer" => "PHP/" . phpversion(),
    "Mime-Version" => "1.0",
    "Content-type" => "text/html; charset=utf-8"
);

$send = mail("leclercqjm59@outlook.fr", "coucou", $html);
if (!$send) {
    echo "Une erreur est survenue lors de l'envoi du mail";
}
else {
    echo "Le message a bien été envoyé";
}



