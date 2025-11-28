<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Mon CV (curriculum vitæ) en format HTML / CSS / JavaScript et avec PHP / PHPMailer" />
    <link rel="stylesheet" href="style.css">
    <title>CV ACHARD Cédric</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lustria&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ff03dfd379.js" crossorigin="anonymous"></script>
</head>

<body class="wrapper flex">
    <!-- Boutons qui apparaît au scroll et permet de revenir en haut de page -->
    <div id="backToTop" class="hidden noprint">
        <a id="btnBackToTop"><i class="fa-solid fa-circle-arrow-up"></i></a>
    </div>

    <!-- Header avec photo, infos et projet professionnel en haut du site -->
    <header class="flex reveal">
        <div id="photo_cv" class="flex">
            <img src="img/photo_cv.png" alt="photo_cv">
        </div>

        <div id="infos">
            <h2>ACHARD Cédric</h2>
            <ul>
                <li>36 ans - Montpellier</li>
                <li><i class="fa-solid fa-phone"></i> <a id="tel" href="tel:0671744802">06 71 74 48 02</a></li>
                <li><i class="fa-solid fa-envelope"></i> <a id="mailto" href="mailto:achardcedric88@gmail.com">achardcedric88@gmail.com</a></li>
            </ul>
        </div>

        <div id="project" class="reveal-1">
            <h2>Développeur Web et Web Mobile</h2>
            <p>En formation au sein du CEFii de Janvier à Septembre,
                je souhaite consolider mon apprentissage lors d’un stage d'Octobre à Décembre … et vous rejoindre en CDI</p>
        </div>
    </header>

    <!-- Main contenant notions validées, expériences professionnelles, formations et infos diverses dans chaque section -->
    <main class="flex">
        <!-- Notions validées en développement -->
        <section id="notions" class="flex reveal">
            <h2 class="reveal-2"><i class="fa-solid fa-code"></i> Notions validées à ce jour</h2>
            <div class="flex reveal-4">
                <aside>Front-end</aside>
                <article>
                    <ul>
                        <li><i class="fa-brands fa-html5"></i> HTML</li>
                        <li><i class="fa-brands fa-css3-alt"></i> CSS</li>
                        <li><i class="fa-brands fa-js"></i> JavaScript</li>
                        <li><i class="fa-brands fa-bootstrap"></i> Framework Bootstrap</li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>Back-end</aside>
                <article>
                    <ul>
                        <li><i class="fa-brands fa-php"></i> PHP / Programmation procédurale et Orientée Objet</li>
                        <li><i class="fa-solid fa-database"></i> Base de données MySQL / phpMyAdmin</li>
                        <li><i class="fa-solid fa-database"></i> Base de données NoSQL / MongoDB Compass et Mongosh</li>
                        <li><i class="fa-solid fa-table-list"></i> MERISE / Schématiser Base de données</li>
                        <li><i class="fa-solid fa-square-share-nodes"></i> UML Modélisation / Astah UML</li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>Général</aside>
                <article>
                    <ul>
                        <li><i class="fa-solid fa-globe"></i> Anglais</li>
                        <li><i class="fa-solid fa-diagram-project"></i> Gestion de projet web / Gantt Project</li>
                        <li><i class="fa-solid fa-computer-mouse"></i> Ergonomie web</li>
                        <li><i class="fa-solid fa-palette"></i> Maquetter interface UX UI / FIGMA & GlooMaps</li>
                        <li><i class="fa-solid fa-calculator"></i> Programmation et Algorithmique</li>
                    </ul>
                </article>
            </div>
        </section>
        <!-- Expériences Professionnelles -->
        <section id="experiences" class="flex reveal">
            <h2 class="reveal-2"><i class="fa-solid fa-suitcase"></i> Expériences Professionnelles</h2>
            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fw-bold">5 ans</li>
                        <li class="fs-italic">2019 - 2024</li>
                        <li>Nîmes</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Commercial B to B / Chef de secteur</li>
                        <li class="fs-italic">Pomona Passion Froid</li>
                        <li>
                            <ul>
                                <li><i class="fa-solid fa-arrow-right"></i> Développement et fidélisation du secteur en restauration commerciale (> 100 clients)</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Visites hebdomadaires, négociation, défense de la marge, veille concurrentielle</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Gestion autonome, reporting, recouvrement, application de la stratégie du groupe</li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>
            
            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fw-bold">6 ans</li>
                        <li class="fs-italic">2012 - 2018</li>
                        <li>St Jean de Védas</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Commercial B to C / VRP</li>
                        <li class="fs-italic">Thiriet</li>
                        <li>
                            <ul>
                                <li><i class="fa-solid fa-arrow-right"></i> Développement et fidélisation du secteur auprès de particuliers (> 500 clients)</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Vente mensuelle par téléphone, livraison à domicile des produits surgelés</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Prospection physique, parrainages, réunions, etc.</li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fw-bold">3 ans</li>
                        <li class="fs-italic">2009 - 2012</li>
                        <li>Montpellier</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Artisan Boulanger</li>
                        <li class="fs-italic">Paul, La Fournée d’Ovalie & Le Fournil de St Jean</li>
                        <li>
                            <ul>
                                <li><i class="fa-solid fa-arrow-right"></i> Pétrissage, façonnage et cuisson des pains, viennoiseries, brioches, etc.</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Prise de commande et livraison aux différents points de vente</li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fw-bold">1 an</li>
                        <li class="fs-italic">2008 - 2009</li>
                        <li>St Jean de Védas</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Hôte - Animateur / Employé Polyvalent</li>
                        <li class="fs-italic">McDonald’s</li>
                        <li>
                            <ul>
                                <li><i class="fa-solid fa-arrow-right"></i> Accueil clientèle, prise de commande, préparation, cuisine, nettoyage</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Animation des anniversaires</li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fw-bold">2 ans</li>
                        <li class="fs-italic">2006 - 2008</li>
                        <li>Lattes</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Animateur Commercial</li>
                        <li class="fs-italic">Intersport</li>
                        <li>
                            <ul>
                                <li><i class="fa-solid fa-arrow-right"></i> Gestion du rayon, étiquetages, balisages, plv</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Utilisation des techniques de vente, conseils clients</li>
                                <li><i class="fa-solid fa-arrow-right"></i> Exploitation du SIC pour l’état des stocks et relance clients (emailing)</li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>
        </section>
        <!-- Formations -->
        <section id="formations" class="flex reveal">
            <h2 class="reveal-2"><i class="fa-solid fa-graduation-cap"></i> Formations</h2>
            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fs-italic">2025</li>
                        <li>En cours ...</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">Développement Web et Web Mobile | Niveau 5 (Bac+2) | RNCP37674</li>
                        <li class="fs-italic">CEFii Angers</li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fs-italic">2009 - 2010</li>
                        <li>Sète</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">CAP Boulangerie</li>
                        <li class="fs-italic">CFA Nicolas Albano</li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fs-italic">2006 - 2008</li>
                        <li>Montpellier</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">BTS MUC - Conduite et gestion des évènements sportifs</li>
                        <li class="fs-italic">ESCA-INFORS</li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fs-italic">2007</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">BAFA, AFPS, BSB - Animateur en centre de loisirs</li>
                    </ul>
                </article>
            </div>

            <div class="flex reveal-4">
                <aside>
                    <ul>
                        <li class="fs-italic">2006</li>
                        <li>Montpellier</li>
                    </ul>
                </aside>
                <article>
                    <ul>
                        <li class="fw-bold">BAC Scientifique - Option Arts Plastiques</li>
                        <li class="fs-italic">Lycée Notre-Dame de La Merci</li>
                    </ul>
                </article>
            </div>

        </section>
        <!-- Informatique -->
        <section id="computer" class="flex reveal">
            <h2 class="reveal-2"><i class="fa-solid fa-desktop"></i> Informatique</h2>
            <div class="flex reveal-4">
                <aside>Bureautique</aside>
                <article>Microsoft Office, Word, Excel, PowerPoint</article>
            </div>

            <div class="flex reveal-4">
                <aside>Adobe</aside>
                <article>Photoshop, After Effects</article>
            </div>

            <div class="flex reveal-4">
                <aside>Vidéo</aside>
                <article>Montage sous Wondershare Filmora</article>
            </div>

            <div class="flex reveal-4">
                <aside>Image</aside>
                <article>Vectoriel sous Inkscape, retouches sous PhotoFiltre</article>
            </div>
        </section>
        <!-- Extra-professionnel -->
        <section id="extra-professionnal" class="flex reveal">
            <h2 class="reveal-2"><i class="fa-solid fa-person-hiking"></i> Extra-Professionnel</h2>
            <div class="flex reveal-4">
                <aside>Langues</aside>
                <article>Anglais & Espagnol (usuel)</article>
            </div>

            <div class="flex reveal-4">
                <aside>Bénévole</aside>
                <article>Commissaire de piste FFSA & FFM au Circuit Paul Ricard / Le Castellet (83 Var)</article>
            </div>

            <div class="flex reveal-4">
                <aside>Association</aside>
                <article>Création d’une équipe de Foot à 7, logo, maillots, sponsors, recrutement, comptabilité</article>
            </div>

            <div class="flex reveal-4">
                <aside>Virtuel</aside>
                <article>Gestion d’une communauté d’eSport autour de la Formule 1 et sports auto</article>
            </div>

            <div class="flex reveal-4">
                <aside>Sports</aside>
                <article>Cyclisme sur route, trail, course à pied, randonnée, trekking, football, tennis</article>
            </div>

            <div class="flex reveal-4">
                <aside>Permis</aside>
                <article>A & B</article>
            </div>
        </section>
    </main>
    <!-- Footer comprenant l'envoi par mail, l'impression et la mention 'imaginé et conçu' -->
    <footer class="flex reveal noprint">
            <div id="cvbymail" class="flex reveal-2">
                <form id="cvbymailform" class="flex" action="traitement.php" method="POST" enctype="multipart/form-data" onsubmit="return verifMail()">
                        <label for="sendmail"><i id="iconcvbymail" class="fa-solid fa-envelope"></i> Recevoir mon CV par mail : </label>
                        <input id="sendmail" name="sendmail" maxlength="50" placeholder="votremail@exemple.fr">
                        
                        <input id="submit" type="submit" value="Envoyer">
                </form>
            </div>

            <!-- regExp JavaScript sur la saisie du mail, en cas d'erreur ce message s'affiche -->
            <div id="errormail" class="flex reveal-2 hidden">
                Veuillez saisir un mail valide.
            </div>

            <?php
            // Après le traitement.php, une redirection '?send=true/false' est faite : l'un des 2 messages s'affiche
            if ($_GET['send'] == 'true'){
                echo '<div id="sendtrue" class="flex reveal-2">
                            CV envoyé avec succès !
                        </div>';
            } elseif ($_GET['send'] == 'false'){
                echo '<div id="sendfalse" class="flex reveal-2">
                            Echec, veuillez réessayer.
                        </div>';
            }
            ?>

            <div id="autor" class="flex reveal-2">
                <div>Imaginé et conçu par mes soins en Mai 2025</div>
                <div><small>CV Responsive Smartphone / Tablette / Desktop</small></div>
                <div><small>Garanti sans Framework / 100% Artisanal</small></div>
            </div>
    </footer>
</body>
<!-- insertion du JavaScript -->
<script src="script.js"></script>
</html>