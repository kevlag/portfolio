<section id='tdf' data-case-study="100ansdetour">
    <nav class="pagination tdf">
        <ul>
            <li><a class='active' href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
    </nav>
    <article id='tdf-introduction'>
        <div class="page-content">
            <ul>
                <li>
                    <span>Date :</span>
                    June 2013
                </li><!--
                !--><li>
                    <span>Client :</span>
                    Tour de France
                </li><!--
                !--><li>
                    <span>Role :</span>
                    Design - Intégration
                </li>
            </ul>
            <h1>
                <img id='pignon' src='./assets/img/100ansdetour/pignon.svg' alt=''>
                <span>100 ans de Tour</span>
            </h1>
            <p>
                Projet de data-visualization sur les 100 ans du Tour de France . À quelques mois de la 100ème édition, la Grande Boucle a retenu tout notre intérêt. Un sujet qui plus est fascinant sur le plan des données à explorer. 100 ans de données à parcourir entre classements, parcours ou encore coureurs de légende.
            </p>
            <a id='checkTdf' href='http://100ansdetour.fr' target='_blank'>Check the site</a>
            <img id='tdf-mbp' src='./assets/img/100ansdetour/tdf-mbp.png' alt=''>
        </div>
    </article>
    <article id='tdf-context'>
        <div class="page-content">
            <h2>
                The Context
            </h2>
            <h3>
                Un événement exceptionnel
            </h3>
            <p>
                Le Tour de France est la course cycliste la plus prestigieuse au monde. Le fait d'être la 100e édition, le Tour de France 2013 est un évènement légendaire. Ce sera une des éditions les plus mondialisées et les plus diffusées de l'histoire du Tour de France.
            </p>
            <ul>
                <li>
                    <span>Une tendance</span>
                    Le Tour est un évènement sportif récurent qui a lieu chaqué été, il s'inscrit au patrimoine national de notre culture. C'est un évènement qui se modernise et se mondialise tout en continuant à jouer sur les repères constitutifs de l’identité française. On assiste à un réel regain d'intéret pour le vélo.
                </li><!--
                !--><li>
                    <img src='./assets/img/100ansdetour/tour-de-france.svg' alt='Logo 100 ans de Tour, 100ème édition'>
                </li><!--
                !--><li>
                    <span>100 ans de données</span>
                    Cent ans que l'Hexagone vit au rythme des coups de pédale de sportifs surentrainés pour remporté la Grande boucle.<br/>
                    Cent ans de parcours, de classements et d'anecdotes, soit de nombreuses analyses et statistiques possibles.
                </li>
            </ul>
            <div id='maillot' class='animation-on-scroll' data-start-margin='50'>
                <img src='./assets/img/100ansdetour/maillot-jaune.svg' alt=''>
                <img src='./assets/img/100ansdetour/maillot-blanc.svg' alt=''>
                <img src='./assets/img/100ansdetour/maillot-vert.svg' alt=''>
                <img src='./assets/img/100ansdetour/maillot-pois.svg' alt=''>
            </div>
        </div>
    </article>

    <article id='tdf-data'>
        <div class="page-content">
            <h2>
                The data
            </h2>
            <h3>
                Des choix et des concessions
            </h3>
            <ul id='tdf-dataNumbers'>
                <li>
                    <span>2 142</span>
                    étapes
                </li><!--
                !--><li>
                    <span>345 093</span>
                    km parcourus
                </li><!--
                !--><li>
                    <span>8 745</span> 
                    participants
                </li>
            </ul>
            <p class="dataDescription">
                La récupération de données pour les 100 ans du Tour de France a été un travail de longue haleine. Nous avons du faire des choix et des concessions. Il a été difficile de trouver les informations que nous recherchions, notamment pour les premières éditions de la Grande Boucle.
            </p>
            <ul id='tdf-UI' class='animation-on-scroll' data-start-margin='50'>
                <li>
                    <img src='./assets/img/100ansdetour/tdf-ui1.png' alt=''>
                </li><!--
                !--><li>
                    <img src='./assets/img/100ansdetour/tdf-ui2.png' alt=''>
                </li><!--
                !--><li>
                    <img src='./assets/img/100ansdetour/tdf-ui3.png' alt=''>
                </li>
            </ul>
            <p>
                Les sites et les internautes mettant à disposition les données du Tour de France, nous ont permis de constituer une base données fondamentale dans la réalisation de ce projet. Un grand merci pour eux.
            </p><!--
            !--><p>
                Nous avons créer des scripts qui nous ont permis de récupérer ces données et ensuite de faire un formatage au format Json pour constituer notre base de données.
            </p><!--
            !--><p>
                Nous avons du ensuite adapter le développement de notre interface sur la base des données collectées. L’ensemble de nos graphiques ont été réalisés avec la librairie javascript D3.            
            </p>
        </div>
    </article>

    <article id='tdf-design'>
        <div class="page-content">
            <h2>
                The Design
            </h2>
            <h3>
                Un design aux couleurs du Tour
            </h3>
            <p class='design-infos'>
                Un design flat, aux couleurs du Tour de France, pour travailler en vectorielle et manipuler plus facilement les intéractions des éléments. Une interface full screen, où l'on navigue d'année en année, pour découvrir les différentes analyses de chaque éditions du Tour.
            </p>

            <div class='design-screen animation-on-scroll' data-start-margin='50'>
                <img src='./assets/img/100ansdetour/home.jpg' alt=''>  
                <img src='./assets/img/100ansdetour/date.jpg' alt=''>  
                <img src='./assets/img/100ansdetour/comparative.jpg' alt=''>  
            </div> 

            <div class='design-context animation-on-scroll' data-start-margin='50'>
                <div>
                    <h4>Context</h4>
                    <p>
                        La partie Context du site, permet de découvrir les différents tracés du Tour, de revivre chaque étape, les villes traversées, les kilomètres parcourus en chiffre et en images !
                    </p>
                </div><!--
                !--><img src='./assets/img/100ansdetour/context.jpg' alt=''>
            </div>
            <div class='design-steps animation-on-scroll' data-start-margin='50'>
                <img src='./assets/img/100ansdetour/steps.jpg' alt=''><!--
                !--><div>
                    <h4>Steps</h4>
                    <p>
                        Chaque étape du tour est ici représentée selon sa catégorie mais également selon la distance parcourue. Retrouvez également les coureurs qui ont animé le Tour de France et leurs victoires.
                    </p>
                </div>
            </div>
            <div class='design-participation animation-on-scroll' data-start-margin='50'>
                <div>
                    <h4>Participation</h4>
                    <p>
                        Les coureurs sont ici présentés selon leur pays d'origine. On mesure ainsi l'internationalisation du Tour au fil des années et le succès grandissant de la Grande Boucle.
                    </p>
                </div><!--
                !--><img src='./assets/img/100ansdetour/participation.jpg' alt=''>
            </div>
            <div class='design-rank animation-on-scroll' data-start-margin='50'>
                <img src='./assets/img/100ansdetour/rank.jpg' alt=''><!--
                !--><div>
                    <h4>Rating</h4>
                    <p>
                        Retrouvez l'intégralité des classements pour l'année choisie, le temps des coureurs et leur nationalité. Ainsi que les coureurs qui se sont distingués pour leur performance au général, au sprint ou en montagne.
                    </p>
                </div>
            </div>
        </div>
    </article>

    <article id='tdf-thanks'>
        <div class="page-content">
            <h2>
                Remerciements
            </h2>
            <p>
                Un remerciement très spécial à l'ensemble des sites et internautes qui mettent à disposition les données du Tour de France. Ils nous ont permis de constituer une base de données fondamentale dans la réalisation de ce projet.
                N'hésitez pas à nous contacter pour faire remonter d'éventuelles erreurs ou simplement passer le bonjour !           
            </p>
            <p>A project made with ...</p>
            <ul>
                <li>
                    <a href='http://www.sebastienlambla.fr/' target='_blank'>Sébastien Lambla</a>
                    <a href='https://twitter.com/SebLambla' target='_blank'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="14px" viewBox="0 0 17.61 14.34" enable-background="new 0 0 17.61 14.34" xml:space="preserve">
                            <g><path d="M17.61,1.71c-0.48,0.701-1.08,1.331-1.8,1.89v0.42c0,1.2-0.225,2.415-0.675,3.645c-0.45,1.23-1.11,2.34-1.98,3.33c-0.87,0.99-1.94,1.795-3.21,2.415c-1.271,0.62-2.735,0.93-4.395,0.93c-1.02,0-1.995-0.145-2.925-0.435C1.695,13.616,0.82,13.21,0,12.69c0.14,0.02,0.28,0.03,0.42,0.03c0.14,0,0.29,0,0.45,0c1.72,0,3.21-0.51,4.47-1.53c-0.8-0.02-1.505-0.265-2.115-0.735C2.615,9.985,2.2,9.39,1.98,8.67c0.24,0.06,0.46,0.09,0.66,0.09c0.18,0,0.345-0.01,0.495-0.03C3.285,8.71,3.44,8.681,3.6,8.64C2.76,8.46,2.065,8.045,1.515,7.395C0.965,6.746,0.69,5.98,0.69,5.1V5.07c0.24,0.12,0.495,0.22,0.765,0.3C1.725,5.45,2.03,5.49,2.37,5.49C1.85,5.17,1.45,4.75,1.17,4.23c-0.28-0.52-0.42-1.1-0.42-1.74c0-0.64,0.16-1.25,0.48-1.83c0.9,1.12,1.99,2.015,3.27,2.685C5.78,4.016,7.17,4.38,8.67,4.44C8.61,4.2,8.58,3.94,8.58,3.66c0-0.5,0.095-0.975,0.285-1.425c0.19-0.45,0.45-0.84,0.78-1.17c0.33-0.33,0.71-0.59,1.14-0.78C11.215,0.095,11.68,0,12.18,0c0.54,0,1.03,0.105,1.47,0.315c0.44,0.21,0.83,0.485,1.17,0.825c0.399-0.06,0.799-0.169,1.2-0.33c0.4-0.16,0.77-0.33,1.11-0.51c-0.32,0.84-0.85,1.5-1.59,1.98c0.38-0.04,0.74-0.11,1.08-0.21C16.96,1.97,17.29,1.851,17.61,1.71z"/></g>
                        </svg>
                    </a>
                    Développement,<br/>intégration
                </li><!--
                !--><li>
                    <a href='http://bastien-lardeux.com/' target='_blank'>Bastien Lardeux</a>
                    <a href='https://twitter.com/dolly_pr4ne' target='_blank'>                                
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="14px" viewBox="0 0 17.61 14.34" enable-background="new 0 0 17.61 14.34" xml:space="preserve">
                            <g><path d="M17.61,1.71c-0.48,0.701-1.08,1.331-1.8,1.89v0.42c0,1.2-0.225,2.415-0.675,3.645c-0.45,1.23-1.11,2.34-1.98,3.33c-0.87,0.99-1.94,1.795-3.21,2.415c-1.271,0.62-2.735,0.93-4.395,0.93c-1.02,0-1.995-0.145-2.925-0.435C1.695,13.616,0.82,13.21,0,12.69c0.14,0.02,0.28,0.03,0.42,0.03c0.14,0,0.29,0,0.45,0c1.72,0,3.21-0.51,4.47-1.53c-0.8-0.02-1.505-0.265-2.115-0.735C2.615,9.985,2.2,9.39,1.98,8.67c0.24,0.06,0.46,0.09,0.66,0.09c0.18,0,0.345-0.01,0.495-0.03C3.285,8.71,3.44,8.681,3.6,8.64C2.76,8.46,2.065,8.045,1.515,7.395C0.965,6.746,0.69,5.98,0.69,5.1V5.07c0.24,0.12,0.495,0.22,0.765,0.3C1.725,5.45,2.03,5.49,2.37,5.49C1.85,5.17,1.45,4.75,1.17,4.23c-0.28-0.52-0.42-1.1-0.42-1.74c0-0.64,0.16-1.25,0.48-1.83c0.9,1.12,1.99,2.015,3.27,2.685C5.78,4.016,7.17,4.38,8.67,4.44C8.61,4.2,8.58,3.94,8.58,3.66c0-0.5,0.095-0.975,0.285-1.425c0.19-0.45,0.45-0.84,0.78-1.17c0.33-0.33,0.71-0.59,1.14-0.78C11.215,0.095,11.68,0,12.18,0c0.54,0,1.03,0.105,1.47,0.315c0.44,0.21,0.83,0.485,1.17,0.825c0.399-0.06,0.799-0.169,1.2-0.33c0.4-0.16,0.77-0.33,1.11-0.51c-0.32,0.84-0.85,1.5-1.59,1.98c0.38-0.04,0.74-0.11,1.08-0.21C16.96,1.97,17.29,1.851,17.61,1.71z"/></g>
                        </svg>
                    </a>
                    Chef de projet,<br/>développeur d3
                </li><!--
                !--><li>
                    <a href='http://www.nicolasmatt.com/' target='_blank'>Nicolas Matt</a>
                    <a href='https://twitter.com/nicomatt89' target='_blank'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="14px" viewBox="0 0 17.61 14.34" enable-background="new 0 0 17.61 14.34" xml:space="preserve">
                            <g><path d="M17.61,1.71c-0.48,0.701-1.08,1.331-1.8,1.89v0.42c0,1.2-0.225,2.415-0.675,3.645c-0.45,1.23-1.11,2.34-1.98,3.33c-0.87,0.99-1.94,1.795-3.21,2.415c-1.271,0.62-2.735,0.93-4.395,0.93c-1.02,0-1.995-0.145-2.925-0.435C1.695,13.616,0.82,13.21,0,12.69c0.14,0.02,0.28,0.03,0.42,0.03c0.14,0,0.29,0,0.45,0c1.72,0,3.21-0.51,4.47-1.53c-0.8-0.02-1.505-0.265-2.115-0.735C2.615,9.985,2.2,9.39,1.98,8.67c0.24,0.06,0.46,0.09,0.66,0.09c0.18,0,0.345-0.01,0.495-0.03C3.285,8.71,3.44,8.681,3.6,8.64C2.76,8.46,2.065,8.045,1.515,7.395C0.965,6.746,0.69,5.98,0.69,5.1V5.07c0.24,0.12,0.495,0.22,0.765,0.3C1.725,5.45,2.03,5.49,2.37,5.49C1.85,5.17,1.45,4.75,1.17,4.23c-0.28-0.52-0.42-1.1-0.42-1.74c0-0.64,0.16-1.25,0.48-1.83c0.9,1.12,1.99,2.015,3.27,2.685C5.78,4.016,7.17,4.38,8.67,4.44C8.61,4.2,8.58,3.94,8.58,3.66c0-0.5,0.095-0.975,0.285-1.425c0.19-0.45,0.45-0.84,0.78-1.17c0.33-0.33,0.71-0.59,1.14-0.78C11.215,0.095,11.68,0,12.18,0c0.54,0,1.03,0.105,1.47,0.315c0.44,0.21,0.83,0.485,1.17,0.825c0.399-0.06,0.799-0.169,1.2-0.33c0.4-0.16,0.77-0.33,1.11-0.51c-0.32,0.84-0.85,1.5-1.59,1.98c0.38-0.04,0.74-0.11,1.08-0.21C16.96,1.97,17.29,1.851,17.61,1.71z"/></g>
                        </svg>
                    </a>
                    Statisticien,<br/>UX design
                </li><!--
                !--><li>
                    <a href='http://florentin-monteil.com/' target='_blank'>Florentin Monteil</a>
                    <a href='https://twitter.com/FloMonteil' target='_blank'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="14px" viewBox="0 0 17.61 14.34" enable-background="new 0 0 17.61 14.34" xml:space="preserve">
                            <g><path d="M17.61,1.71c-0.48,0.701-1.08,1.331-1.8,1.89v0.42c0,1.2-0.225,2.415-0.675,3.645c-0.45,1.23-1.11,2.34-1.98,3.33c-0.87,0.99-1.94,1.795-3.21,2.415c-1.271,0.62-2.735,0.93-4.395,0.93c-1.02,0-1.995-0.145-2.925-0.435C1.695,13.616,0.82,13.21,0,12.69c0.14,0.02,0.28,0.03,0.42,0.03c0.14,0,0.29,0,0.45,0c1.72,0,3.21-0.51,4.47-1.53c-0.8-0.02-1.505-0.265-2.115-0.735C2.615,9.985,2.2,9.39,1.98,8.67c0.24,0.06,0.46,0.09,0.66,0.09c0.18,0,0.345-0.01,0.495-0.03C3.285,8.71,3.44,8.681,3.6,8.64C2.76,8.46,2.065,8.045,1.515,7.395C0.965,6.746,0.69,5.98,0.69,5.1V5.07c0.24,0.12,0.495,0.22,0.765,0.3C1.725,5.45,2.03,5.49,2.37,5.49C1.85,5.17,1.45,4.75,1.17,4.23c-0.28-0.52-0.42-1.1-0.42-1.74c0-0.64,0.16-1.25,0.48-1.83c0.9,1.12,1.99,2.015,3.27,2.685C5.78,4.016,7.17,4.38,8.67,4.44C8.61,4.2,8.58,3.94,8.58,3.66c0-0.5,0.095-0.975,0.285-1.425c0.19-0.45,0.45-0.84,0.78-1.17c0.33-0.33,0.71-0.59,1.14-0.78C11.215,0.095,11.68,0,12.18,0c0.54,0,1.03,0.105,1.47,0.315c0.44,0.21,0.83,0.485,1.17,0.825c0.399-0.06,0.799-0.169,1.2-0.33c0.4-0.16,0.77-0.33,1.11-0.51c-0.32,0.84-0.85,1.5-1.59,1.98c0.38-0.04,0.74-0.11,1.08-0.21C16.96,1.97,17.29,1.851,17.61,1.71z"/></g>
                        </svg>
                    </a>
                    Développeur<br/>(d3, backbone...)
                </li>
            </ul>
        </div>
    </article>

    <article id='tdf-other'>
        <div class="page-content">
            <h2>They talk about us</h2>
            <div id='tdf-ask'>
                <ul>
                    <li>
                        <b>Huffingtonpost</b>
                        C'est une mine d'or pour tous les amoureux de statistiques et de classements. Le site 100ansdetour.fr a effectué un colossal travail de compilation de données [ ... ]
                        <a href='http://www.huffingtonpost.fr/2013/06/29/tour-de-france-2013-cyclisme-meilleur-pire-du-web_n_3502291.html?#62_data-tour-de-france' target='_blank'>See article</a>
                    </li><!--
                    !--><li>
                        <b>Codrops</b>
                        A beautifully designed hommage to celebrate 100 years of the Tour de France. Some great effects and a brilliant way to present data made us pick this website for this week's inspiration.
                        <a href='http://tympanus.net/codrops/collective/collective-74/' target='_blank'>See article</a>
                    </li><!--
                    !--><li>
                        <b>Webdesignermag</b>
                        The Tour de France is one of the most famous cycling tests in the world. This site celebrates 100 years of the race with an imaginative and interactive look at the facts and figures [ ... ]
                        <a href='http://www.webdesignermag.co.uk/site-of-the-week/site-of-the-week-100-ans-de-tour/' target='_blank'>See article</a>
                    </li><!--
                    !--><li>
                        <b>Design Spartan</b>
                        Je ne comprendrais jamais ce qui intéresse tant les gens dans le Tour de France, mais ce site web mérite de l’attention [ ... ]
                        <a href='http://designspartan.com/info_generale/5-sites-riches-et-originaux-que-vous-noublierez-pas-14/' target='_blank'>See article</a>
                    </li><!--
                    !--><li>
                        <b>Blog du webdesign</b>
                        Le Tour de France fête ses 100 ans !<br/>Pour l'occasion découvrez un site qui fait la rétrospective des 100 dernières années du Tour [ ... ]
                        <a href='http://www.blogduwebdesign.com/inspiration-webdesign/5-sites-navigation-concept-original-81/1020' target='_blank'>See article</a>
                    </li><!--
                    !--><li>
                        <b>John's Graphisme</b>
                        Whaouu, ça faisait un petit moment que je n’avais pas fait un article dans cette thématique, les sites qui envoient du poney [ ... ]
                        <a href='http://www.jonathan-menet.fr/blog/2013/07/23/le-site-qui-envoie-du-poney-mort-e37-100-ans-de-tour/' target='_blank'>See article</a>
                    </li>   
                </ul> 
            </div>
            <div id='tdf-onTwitter'>
                <div id='tdf-twitter'>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17.61 14.34" enable-background="new 0 0 17.61 14.34" xml:space="preserve">
                        <g><path d="M17.61,1.71c-0.48,0.701-1.08,1.331-1.8,1.89v0.42c0,1.2-0.225,2.415-0.675,3.645c-0.45,1.23-1.11,2.34-1.98,3.33c-0.87,0.99-1.94,1.795-3.21,2.415c-1.271,0.62-2.735,0.93-4.395,0.93c-1.02,0-1.995-0.145-2.925-0.435C1.695,13.616,0.82,13.21,0,12.69c0.14,0.02,0.28,0.03,0.42,0.03c0.14,0,0.29,0,0.45,0c1.72,0,3.21-0.51,4.47-1.53c-0.8-0.02-1.505-0.265-2.115-0.735C2.615,9.985,2.2,9.39,1.98,8.67c0.24,0.06,0.46,0.09,0.66,0.09c0.18,0,0.345-0.01,0.495-0.03C3.285,8.71,3.44,8.681,3.6,8.64C2.76,8.46,2.065,8.045,1.515,7.395C0.965,6.746,0.69,5.98,0.69,5.1V5.07c0.24,0.12,0.495,0.22,0.765,0.3C1.725,5.45,2.03,5.49,2.37,5.49C1.85,5.17,1.45,4.75,1.17,4.23c-0.28-0.52-0.42-1.1-0.42-1.74c0-0.64,0.16-1.25,0.48-1.83c0.9,1.12,1.99,2.015,3.27,2.685C5.78,4.016,7.17,4.38,8.67,4.44C8.61,4.2,8.58,3.94,8.58,3.66c0-0.5,0.095-0.975,0.285-1.425c0.19-0.45,0.45-0.84,0.78-1.17c0.33-0.33,0.71-0.59,1.14-0.78C11.215,0.095,11.68,0,12.18,0c0.54,0,1.03,0.105,1.47,0.315c0.44,0.21,0.83,0.485,1.17,0.825c0.399-0.06,0.799-0.169,1.2-0.33c0.4-0.16,0.77-0.33,1.11-0.51c-0.32,0.84-0.85,1.5-1.59,1.98c0.38-0.04,0.74-0.11,1.08-0.21C16.96,1.97,17.29,1.851,17.61,1.71z"/></g>
                    </svg>
                </div>
                <div id='tdf-tweetLeft' class='tdf-tweet'>
                    <div class="tweetAnimationOne">
                        Really cool dataviz on the 100 Tour de France "La grande rétrospective du Tour de France" - <a href='http://100ansdetour.fr' target='_blank'>http://100ansdetour.fr/</a>  <span>#100ansdetour</span> <span>#webdesign</span>
                        <b>Thibault Jorge - @madebytj</b>
                    </div>
                    <div class="tweetAnimationTwo">
                        100 ans de Tour : un site de data visualisation sur les données des tours de France <a href='http://100ansdetour.fr' target='_blank'>http://bit.ly/16om4rI</a> Boulot monstre
                        <b>JP Cabaroc ‏- @Cabaroc</b>
                    </div>
                    <div class="tweetAnimationThree">
                        100 Tours. The complete history is at <a href='http://100ansdetour.fr' target='_blank'>http://100ansdetour.fr</a> with all data about the stages, results, … Beautifully done. Bookmarked!
                        <b>Veerle Pieters ‏- @vpieters</b>
                    </div>
                    <div class="tweetAnimationFour">
                        A découvrir pour son graphisme réussi : la grande rétrospective du Tour de France <span>#TDF</span> - <a href='http://100ansdetour.fr' target='_blank'>http://100ansdetour.fr/</a> <span>#100ansdetour</span>
                        <b>Jean-renaud DACLIN ‏- @jrdaclin</b>
                    </div>

                </div>            
                <div id='tdf-tweetRight' class='tdf-tweet'>
                    <div class="tweetAnimationFive">
                        La grande rétrospective du Tour de France<br/> 
                        <span>#TDF</span> <a href='http://100ansdetour.fr' target='_blank'>http://www.100ansdetour.fr</a> <span>#100ansdetour</span><br/>
                        WOW !!!
                        <b>Francois Pumir - @fpumir</b>
                    </div>
                    <div class="tweetAnimationSix">
                        Le site des 100 ans du tour de France: 1 visualisation interactive de données très bien faite ! <a href='http://100ansdetour.fr' target='_blank'>http://100ansdetour.fr</a> (via <span>@johnsgraphisme</span>)
                        <b>Céline Rouquié ‏- @CelineRouquie</b>
                    </div>
                    <div class="tweetAnimationSeven">
                        Encore du beau travail de #dataviz de l'<span>@hetic</span> <a href='http://100ansdetour.fr' target='_blank'>http://100ansdetour.fr/</a> 
                        <b>Benoit Gaillat ‏- @Benoit_Gaillat</b>
                    </div>
                    <div class="tweetAnimationHeight">
                        Le site des 100 ans du Tour de France ! A voir absolument ! <a href='http://100ansdetour.fr' target='_blank'>http://100ansdetour.fr</a> <span>#tourdefrance</span> <span>#design</span> via <span>@johnsgraphisme</span>                        
                        <b>Montres LIP ‏- @lipwatches</b>
                    </div>
                </div>

            </div>
            <ul id='tdf-award'>
                <li>
                    <a href="http://www.thefwa.com/site/100-ans-de-tour?search=tour" target="_blank">
                        <img src='./assets/img/100ansdetour/fwa.svg' alt=''>
                        <span>Site of the day</span>
                        September 07 2013
                    </a>
                </li><!--
                !--><li>
                    <a href="http://www.awwwards.com/web-design-awards/100-ans-de-tour" target="_blank">
                        <img src='./assets/img/100ansdetour/awwwards.svg' alt=''>
                        <span>Site of the day</span>
                        July 31 2013
                    </a>
                </li>
            </ul>
        </div>
    </article>

    <footer>
        <p>That’s all folks</p>
        <p>Thank you for watching</p>
    </footer>
</section>
