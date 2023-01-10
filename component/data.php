<?php 

$utilisateur = [
    array(
        "id"=>"1",
        "image"=>"https://media-exp1.licdn.com/dms/image/D4E03AQExkg6S0U7bqQ/profile-displayphoto-shrink_400_400/0/1665737926340?e=1675296000&v=beta&t=0qYSyKl4l2qyr6S6ytbb8chtf6camnaCYSkl0ItPFlk",
        "nom"=>"Rubens Mensah",
        "tel"=>"002250779074238",
        "mail"=>"rubs99rstd@gmail.com",
    ),
    array(
        "id"=>"2",
        "image"=>"https://media-exp1.licdn.com/dms/image/D4E03AQGzTN8hkKeN7Q/profile-displayphoto-shrink_400_400/0/1666123032643?e=1675296000&v=beta&t=huDdRjdi5_vJtdagGtLEIMjGsgi3L6oofwLpYOcpKAI",
        "nom"=>"Farah KONÉ ",
        "tel"=>"",
        "mail"=>"farahyedidiah@gmail.com",
    ),
    array(
        "id"=>"3",
        "image"=>"https://media-exp1.licdn.com/dms/image/D4E03AQEhArX2NluFAA/profile-displayphoto-shrink_400_400/0/1666547266564?e=1675296000&v=beta&t=cJessq8-bPh1V6mb6BkNZchRYTdkDEAKIr4WigaJZIc",
        "nom"=>"Ismaël Coulibaly ",
        "tel"=>"",
        "mail"=>"ismomee2403@gmail.com",
    ),
    array(
        "id"=>"4",
        "image"=>"https://media-exp1.licdn.com/dms/image/D4E03AQENqyr_H9vyQw/profile-displayphoto-shrink_400_400/0/1666175514509?e=1675296000&v=beta&t=PuEUgyUiLpmVgGeoL8igkx3oXRnMAWqS43sDJ3wBjds",
        "nom"=>"Noura Koné ",
        "tel"=>"",
        "mail"=>"nourakone49@gmail.com",
    ),
];

$article=[
    array(
        "id"=>"1",
        "type"=>"photo",
        "src"=>"assets/sima.jpg",
        "titre"=>"SIMA",
        "date"=>"11/11/22",
        "description"=>"Bonsoir Chers tous, 
        Comme annoncé   nous sommes conviés à participer au SALON DE L’INDUSTRIE MUSICALE SIMA qui se tiendra le 17  Novembre 2022. 
        Ce grand salon réunira toutes les grandes personnalités du numérique tels que Le directeur de UNIVERSAL MUSIC, Le directeur de Voodoo Communication , Le directeur de A+ et biens de nombreux artistes tels que Didi B , Suspect 95 et biens d’autres. 
        Pour participer aux salons, veuillez obligatoirement vous inscrire via ce lien ci contre  https://sima-online.net/accueil, puis envoyer une capture d’écran de votre inscription aux numéros suivant :  +2250151296974  afin qu’on puisse recenser toutes personnes inscrites. 
        Le Président des étudiants.",
        "id_user"=>"4",   
    ),
    array(
        "id"=>"2",
        "type"=>"photo",
        "src"=>"assets/awf.jpg",
        "date"=>"14/11/22",
        "titre"=>"Africa Web festival",
        "description"=>"Chers étudiants, nous sommes invités ce Mercredi au African Web Festival 
        pour y participer,inscrivez vous au plus tard le lundi 12h00 auprès de la vice-présidente 
        Degla Eva . Merci",
        "id_user"=>"2",   
    ),
    array(
        "id"=>"3",
        "type"=>"video",
        "src"=>"assets/colorday.mp4",
        "date"=>"17/11/22",
        "titre"=>"Color day",
        "description"=>"Bonsoir Chers tous, 
        Le Bureau des Etudiants Ifranais-BEI organise Colors Day_ Ifranais 🎨🍩🍸 qui est un moment de partage ce vendredi 02 décembre de 12h00 à 14h00 à l'Open Space.
        À cet effet, des couleurs ont été attribuées à chaque classe afin de rendre notre événement  plus fun car Le bonheur, c’est la vie en couleurs 🥰.  Chaque classe devra apporter  de la nourriture 🍊🥪🍬🍫, et de la boisson 🧃🥛🍹 (🚫alcool) correspondant aux couleurs attribuées.  😉👍
        NB: Veuillez vous rapprocher du Président ou de la Vice Président du BEI pour plus d’informations. 
        Arielle M'Ponon - Président du BEI",
        "id_user"=>"1",   
    ) 

];

$comment=[
    array(
        "id"=>"1",
        "text"=>"cool",
        "date"=>"11/11/22",
        "id_user"=>"3",
        "id_article"=>"1", 
    ),
    array(
        "id"=>"2",
        "text"=>"pff c nul ",
        "date"=>"11/11/22",
        "id_user"=>"2",
        "id_article"=>"1", 
    ),
    array(
        "id"=>"3",
        "text"=>"cool",
        "date"=>"11/11/22",
        "id_user"=>"3",
        "id_article"=>"2", 
    ),
    array(
        "id"=>"4",
        "text"=>"pff c nul ",
        "date"=>"11/11/22",
        "id_user"=>"2",
        "id_article"=>"2", 
    ),
    array(
        "id"=>"5",
        "text"=>"cool",
        "date"=>"11/11/22",
        "id_user"=>"3",
        "id_article"=>"3", 
    ),
    array(
        "id"=>"5",
        "text"=>"pff c nul ",
        "date"=>"11/11/22",
        "id_user"=>"2",
        "id_article"=>"3", 
    ),
];  

$emploi = [
    array(
        "id"=>"1",
        "titre"=>"Developpeur web",
        "text"=>"Recherche un developpeur front-end junior.Pour postuler prière de nous envoyer votre cv à l'addresse suivante: company@gmail.com"
    ),
    array(
        "id"=>"2",
        "titre"=>"Developpeur web",
        "text"=>"Recherche un developpeur front-end junior.Pour postuler prière de nous envoyer votre cv à l'addresse suivante: company@gmail.com"
    ),
    array(
        "id"=>"3",
        "titre"=>"Developpeur web",
        "text"=>"Recherche un developpeur front-end junior.Pour postuler prière de nous envoyer votre cv à l'addresse suivante: company@gmail.com"
    ),
];


?>