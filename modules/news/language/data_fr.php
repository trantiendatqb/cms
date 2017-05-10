<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 2-10-2010 20:59
 */

if (!defined('NV_ADMIN')) {
    die('Stop!!!');
}

/**
 * Note:
 * 	- Module var is: $lang, $module_file, $module_data, $module_upload, $module_theme, $module_name
 * 	- Accept global var: $db, $db_config, $global_config
 */

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat (catid, parentid, title, titlesite, alias, description, descriptionhtml, image, viewdescription, weight, sort, lev, viewcat, numsubcat, subcatid, inhome, numlinks, newday, keywords, admins, add_time, edit_time, groups_view) VALUES  (1, 0, 'News', '', 'News', '', '', '', 0, 1, 1, 0, 'viewcat_page_new', 3, '5,6,7', 1, 3, '2', '', '', 1280644983, 1280927178, '6') ");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat (catid, parentid, title, titlesite, alias, description, descriptionhtml, image, viewdescription, weight, sort, lev, viewcat, numsubcat, subcatid, inhome, numlinks, newday, keywords, admins, add_time, edit_time, groups_view) VALUES  (2, 0, 'Produits', '', 'Produits', '', '', '', 0, 2, 5, 0, 'viewcat_page_new', 0, '', 1, 3, '2', '', '', 1280644996, 1280644996, '6') ");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat (catid, parentid, title, titlesite, alias, description, descriptionhtml, image, viewdescription, weight, sort, lev, viewcat, numsubcat, subcatid, inhome, numlinks, newday, keywords, admins, add_time, edit_time, groups_view) VALUES  (3, 0, 'Partenaires', '', 'Partenaires', '', '', '', 0, 3, 6, 0, 'viewcat_page_new', 0, '', 1, 3, '2', '', '', 1280645023, 1280645023, '6') ");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat (catid, parentid, title, titlesite, alias, description, descriptionhtml, image, viewdescription, weight, sort, lev, viewcat, numsubcat, subcatid, inhome, numlinks, newday, keywords, admins, add_time, edit_time, groups_view) VALUES  (4, 0, 'Recrutement', '', 'Recruitement', '', '', '', 0, 4, 7, 0, 'viewcat_page_new', 0, '', 1, 3, '2', '', '', 1280649352, 1280649900, '6') ");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat (catid, parentid, title, titlesite, alias, description, descriptionhtml, image, viewdescription, weight, sort, lev, viewcat, numsubcat, subcatid, inhome, numlinks, newday, keywords, admins, add_time, edit_time, groups_view) VALUES  (5, 1, 'News Interne', '', 'News-Interne', '', '', '', 0, 1, 2, 1, 'viewcat_page_new', 0, '', 1, 3, '2', '', '', 1280927318, 1280927318, '6') ");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat (catid, parentid, title, titlesite, alias, description, descriptionhtml, image, viewdescription, weight, sort, lev, viewcat, numsubcat, subcatid, inhome, numlinks, newday, keywords, admins, add_time, edit_time, groups_view) VALUES  (6, 1, 'Nouvelles Technologies', '', 'Nouvelles-Technologies', '', '', '', 0, 2, 3, 1, 'viewcat_page_new', 0, '', 1, 3, '2', '', '', 1280927364, 1280927364, '6') ");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat (catid, parentid, title, titlesite, alias, description, descriptionhtml, image, viewdescription, weight, sort, lev, viewcat, numsubcat, subcatid, inhome, numlinks, newday, keywords, admins, add_time, edit_time, groups_view) VALUES  (7, 1, 'Espace presse', '', 'Espace-presse', '', '', '', 0, 3, 4, 1, 'viewcat_page_new', 0, '', 1, 3, '2', '', '', 1280928740, 1280928740, '6') ");

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rows (id, catid, listcatid, topicid, admin_id, author, sourceid, addtime, edittime, status, publtime, exptime, archive, title, alias, hometext, homeimgfile, homeimgalt, homeimgthumb, inhome, allowed_comm, allowed_rating, hitstotal, hitscm, total_rating, click_rating) VALUES (1, 1, '1,2', 0, 1, '', 0, 1280645699, 1280751776, 1, 1280645640, 0, 2, 'Nukeviet 3.0', 'Nukeviet-3-0', 'NukeViet 3 est une nouvelle génération de Système de Gestion de Contenu développée par les Vietnamiens. Pour la première fois au Vietnam, un noyau de Open Source ouverte est investi professionnelement en financement, en ressources humaines et en temps. Le résultat est que 100% de ligne de code de NukeViet est écrit entièrement neuf. Nukeviet 3.0 utilise XHTML, CSS et jQuery avec Xtemplate permettant une application souple de Ajax, même au niveau de noyau.', 'nukeviet-cms.jpg', '', 1, 1, '6', 1, 2, 0, 0, 0) ");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rows (id, catid, listcatid, topicid, admin_id, author, sourceid, addtime, edittime, status, publtime, exptime, archive, title, alias, hometext, homeimgfile, homeimgalt, homeimgthumb, inhome, allowed_comm, allowed_rating, hitstotal, hitscm, total_rating, click_rating) VALUES (2, 2, '2', 0, 1, '', 0, 1280645876, 1280751372, 1, 1280645820, 0, 2, 'NukeViet', 'NukeViet', 'NukeViet est un système de gestion de contenu open source. Les utilisateurs l’appellent habituellement Portail parce qu&#039;il est capable d&#039;intégrer plusieurs applications sur le Web. Nguyễn Anh Tú, un ex-étudiant vietnamien en Russie, avec la communauté a développé NukeViet en une application purement vietnamienne en basant sur PHP-Nuke.', 'nukeviet-cms.jpg', '', 1, 1, '6', 1, 3, 0, 0, 0)");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rows (id, catid, listcatid, topicid, admin_id, author, sourceid, addtime, edittime, status, publtime, exptime, archive, title, alias, hometext, homeimgfile, homeimgalt, homeimgthumb, inhome, allowed_comm, allowed_rating, hitstotal, hitscm, total_rating, click_rating) VALUES (3, 3, '3', 0, 1, '', 0, 1280646202, 1280751407, 1, 1280646180, 0, 2, 'VINADES', 'VINADES', 'Pour professionaliser la publication de NukeViet, l&#039;administration de NukeViet a décidé de créer une société spécialisant la gestion de NukeViet avec la raison sociale en vietnamien “Công ty cổ phần Phát triển Nguồn mở Việt Nam”, en anglais &quot;VIET NAM OPEN SOURCE DEVELOPMENT JOINT STOCK COMPANY&quot; et en abrégé VINADES.,JSC.', 'nangly.jpg', '', 1, 1, '6', 1, 3, 0, 0, 0)");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rows (id, catid, listcatid, topicid, admin_id, author, sourceid, addtime, edittime, status, publtime, exptime, archive, title, alias, hometext, homeimgfile, homeimgalt, homeimgthumb, inhome, allowed_comm, allowed_rating, hitstotal, hitscm, total_rating, click_rating) VALUES (4, 4, '4', 0, 1, '', 0, 1280650419, 1280751748, 1, 1280650380, 0, 2, 'Recrutement et la formation des enseignants', 'Recrutement-et-la-formation-des-enseignants', 'A l’issue d’une série de consultations avec les organisations représentatives des personnels de l’éducation nationale et de l’enseignement supérieur sur la réforme du recrutement et de la formation des enseignants, le ministre de l’Éducation nationale et la ministre de l’Enseignement supérieur et de la Recherche apportent plusieurs éléments d’information complémentaires.', 'hoptac.jpg', '', 1, 1, '6', 1, 4, 0, 0, 0)");

$sth = $db->prepare("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_detail (id, titlesite, description, bodyhtml, sourcetext, imgposition, copyright, allowed_send, allowed_print, allowed_save, gid) VALUES (1, '', '', :bodyhtml, '', 1, 0, 1, 1, 1, 0)");
$bodyhtml = "<p> Profiter les fruits de Open Source, mais chaque ligne de code de NukeViet est écrit manuellement. NukeViet 3 n&#039;utilise aucune plateforme. Cela signifie que Nukeviet 3 est complètement indépendant dans son développemnt. Il est très facile à lire, à comprendre le code de NukeViet pour programmer tout seul si vous avez les connaissances de base sur PHP et MySQL. NukeViet 3.0 est complètement ouvert et facile à apprendre pour tous ceux qui veulent étudier le code de NukeViet.</p><p> Hériter la simplicité de Nukeviet mais NukeViet 3 n&#039;oublie pas de se renouveller. Le système de Nukeviet 3 supporte le multi-noyau du module. Nous appelons cela la technologie de virtualisation de module. Cette technologie permet aux utilisateurs de créer automatiquement de milliers de modules sans toucher une seule ligne de code. Le module né de cette technologie est appelé module virtuel. Il est cloné à partir de n&#039;importe quel module du système de NukeViet si ce module-ci permet la création des modules virtuels.</p><p> NukeViet 3 prend en charge l&#039;installation automatique de modules, de blocks, de thèmes dans la section d&#039;administration, les utilisateurs peuvent installer le module sans faire de tâches complexes. NukeViet 3.0 permet également le paquetage des modules pour partager aux autres utilisateus.</p><p> Le multi-langage de NukeViet 3 est parfait avec le multi-langage de l&#039;interface et celui de données. NukeViet 3.0 supporte aux administrateurs de créer facilement de nouvelles langues pour le site. Le paquetage des fichiers de langue est également supporté pour faciliter la contribution du travai à la communauté.</p>";
$sth->bindParam(':bodyhtml', $bodyhtml, PDO::PARAM_STR, strlen($bodyhtml));
$sth->execute();

$sth = $db->prepare("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_detail (id, titlesite, description, bodyhtml, sourcetext, imgposition, copyright, allowed_send, allowed_print, allowed_save, gid) VALUES (2, '', '', :bodyhtml, '', 1, 0, 1, 1, 1, 0)");
$bodyhtml = "<p> Similaire à PHP-Nuke, NukeViet est écrit en langage PHP et utilise la base de données MySQL, permet aux utilisateurs de publier, de gérer facilement leur contenu sur Internet ou Intranet.</p><p> <strong>* Fonctionnalités de base de NukeViet: </strong></p><p> - News: Gestion d’articles: créer les articles multi-niveau, générer la page d’impression, permettre le téléchargement, les commentaires.</p><p> -&nbsp; Download: Gestion de téléchargement des fichier</p><p> - Vote: sondage</p><p> - Contact</p><p> -&nbsp; Search: Rechercher</p><p> -&nbsp; RSS</p><p> <strong>* Caractéristiques: </strong></p><p> - Supporter le multi-langage</p><p> - Permettre le changement de l’interface (theme)</p><p> - Monter le pare-feu pour limiter DDOS ...</p><p> Nukeviet est utilisé dans de nombreux sites Web, de sites personnels aux sites professionnels. Il offre de nombreux services et applications grâce à la capacité d&#039;accroître la fonctionnalité en installant des modules, blocks additionnels ... Cependant, Nukeviet est utilisé principalement pour les sites d’actualités vietnamiens par ce que son module News conforme bien aux exigences et habitudes des Vietnamiens. Il est très facile d’installer, de gérer Nukeviet, même avec les débutants, il est donc un système favorable des amateurs.</p><p> NukeViet est open source, et totalement gratuit pour tout de monde de tous les pays. Toutefois, les Vietnamiens sont les utilisateurs principales en raison des caractéristiques de la code source (provenant de PHP-Nuke) et de la politique des développeurs &quot;Système de Portail Pour les Vietnamiens&quot;.</p>";
$sth->bindParam(':bodyhtml', $bodyhtml, PDO::PARAM_STR, strlen($bodyhtml));
$sth->execute();

$sth = $db->prepare("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_detail (id, titlesite, description, bodyhtml, sourcetext, imgposition, copyright, allowed_send, allowed_print, allowed_save, gid) VALUES (3, '', '', :bodyhtml, '', 1, 0, 1, 1, 1, 0)");
$bodyhtml = "<p> Cette société est ouverte officiellement au&nbsp; 25-2-2010 avec le bureau à&nbsp; Chambre 1706 – CT2 Nang Huong building, 583 Nguyen Trai, Hanoi, Vietnam. Son but est de développer et de diffuser NukeViet au Vietnam.<br /> <br /> D&#039;après M. Nguyễn Anh Tú, président de VINADES, cette société développera le source de NukeViet sous forme open source, professionnel, et totalement gratuit selon l&#039;esprit mondial de open source.<br /> <br /> NukeViet est un système de gestion de contenu open source (Open Source Content Management System) purement vietnamien développé à la base de PHP-Nuke et base de données MySQL. Les utilisateurs l&#039;appellent habituellement Portail par ce qu&#039;ils puissent intégrer de multiples applications permettant la publication et la gestion facile de contenu sur l&#039;internet ou sur l&#039;intranet.</p><p> NukeViet peut fournir plusieurs services et appliations grace aux modules, blocks... L&#039;installation, la gestion de NukeViet 3 est très facile,&nbsp; même avec les débutants.</p><p> Depuis quelques années, NukeViet est devenu une application Open Source tres familière de la communauté informatique du Vietnam. Nukeviet est utilisé dans presque toutes les domaines, de l&#039;actualité, de la commerce électronique, de site personnel aux site professionel.</p><p> Pour avoir les details plus amples sur NukeViet, veuillez consulter le site http://nukeviet.vn.</p>";
$sth->bindParam(':bodyhtml', $bodyhtml, PDO::PARAM_STR, strlen($bodyhtml));
$sth->execute();

$sth = $db->prepare("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_detail (id, titlesite, description, bodyhtml, sourcetext, imgposition, copyright, allowed_send, allowed_print, allowed_save, gid) VALUES (4, '', '', :bodyhtml, '', 1, 0, 1, 1, 1, 0)");
$bodyhtml = "<p> Ils précisent, notamment, les modalités concrètes de concertation qui conduiront à la mise en place de la réforme définitive au cours de l’année 2010/2011. Le processus de concertation avec les organisations représentatives reposera notamment sur trois groupes de travail ch@rgés d’étudier :<br /> <br /> &nbsp;&nbsp;&nbsp; * Les concours de recrutement<br /> &nbsp;&nbsp;&nbsp; * Le cadrage des masters et leur articulation avec les concours<br /> &nbsp;&nbsp;&nbsp; * L’organisation et le contenu de la période de formation continuée pendant l’année de fonctionnaire stagiaire à l’issue du concours<br /> <br /> Une commission de concertation sur la réforme du recrutement et de la formation sera également mise en place avec des acteurs universitaires. Le recteur Marois et le président Filatre en assureront la coprésidence. Ils feront très rapidement des propositions aux ministres sur la composition et le fonctionnement de cette commission qui consultera régulièrement les organisations représentatives.<br /> <br /> Les ministres ont également détaillé les conditions de mise en oeuvre du processus de mastérisation de la formation des enseignants et des conseillers principaux d’éducation (C.P.E.), qui sera engagé dès l’année prochaine.<br /> <br /> Ils confirment que, pour la session 2010, les contenus des concours resteront en l’état. Par ailleurs, pour s’inscrire aux concours de la session 2010, les étudiants devront :<br /> <br /> &nbsp;&nbsp;&nbsp; * Soit déjà être titulaires d’un master ou inscrits en M2 à la rentrée universitaire 2009 ;<br /> &nbsp;&nbsp;&nbsp; * Soit, à titre exceptionnel et dérogatoire, pour la seule session 2010 des concours :<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - avoir été présents aux épreuves d’admissibilité de la session 2009<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - ou bien, être inscrits en M1 dans une composante universitaire à la rentrée 2009.<br /> <br /> Pour l’année transitoire 2009 - 2010 l’inscription en I.U.F.M. vaudra également inscription en M1 par convention avec les universités afin de favoriser le processus de mastérisation. En cas de réussite à un concours de la session 2010, le bénéfice du concours sera garanti pendant un an à ces candidats inscrits en M1. Ils seront recrutés comme enseignant stagiaire pour la rentrée scolaire 2011 sous réserve de l’obtention de leur M2 à l’issue de l’année universitaire 2010-2011.<br /> <br /> Dès septembre 2009, des stages de pratique accompagnée ou en responsabilité rémunérés seront mis en place afin d’engager le processus de préprofessionnalisation lié à la mastérisation.<br /> <br /> Dès la prochaine rentrée universitaire, les étudiants se destinant au métier d’enseignant pourront également bénéficier d’un dispositif d’aides complémentaires mis en oeuvre par le ministère de l’Éducation Nationale.<br /> <br /> A la rentrée 2010, un tiers de l’obligation de service des nouveaux enseignants, recrutés lors de la session 2010 des concours, sera consacré à une formation continue renforcée, prenant la forme d’un tutorat et d’une formation universitaire à visée disciplinaire ou professionnelle.<br /> <br /> Enfin, la discussion sur la revalorisation du salaire des nouveaux enseignants sera conduite en parallèle pour être applicable aux lauréats des concours de la session 2010.</p>";
$sth->bindParam(':bodyhtml', $bodyhtml, PDO::PARAM_STR, strlen($bodyhtml));
$sth->execute();

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_block_cat (bid, adddefault, numbers, title, alias, image, description, weight, keywords, add_time, edit_time) VALUES (1, 0, 4, 'Populairs', 'Populairs', '', 'Block Populairs', 1, '', 1279945710, 1279956943)");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_block_cat (bid, adddefault, numbers, title, alias, image, description, weight, keywords, add_time, edit_time) VALUES (2, 1, 4, 'Récents', 'Recents', '', 'Block Récents', 2, '', 1279945725, 1279956445)");

$db->query('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_block (bid, id, weight) VALUES (1, 2, 2)');
$db->query('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_block (bid, id, weight) VALUES (1, 1, 1)');

$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_tags (tid, numnews, alias, image, description, keywords) VALUES (1, 0, 'nukeviet', '', '', 'Nukeviet')");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_tags_id (id, tid, keyword) VALUES (1, 1, 'Nukeviet')");
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_tags_id (id, tid, keyword) VALUES (2, 1, 'NukeViet')");

$copyright = 'Veuillez citer le lien vers l&#039;article original si vous le reproduisez sur un autre site. Merci.';

$db->query("UPDATE " . $db_config['prefix'] . "_config SET config_value = " . $db->quote($copyright) . " WHERE module = " . $db->quote($module_name) . " AND config_name = 'copyright' AND lang=" . $db->quote($lang));

$result = $db->query('SELECT catid FROM ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_cat ORDER BY sort ASC');
while (list ($catid_i) = $result->fetch(3)) {
    $db->exec('CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_' . $catid_i . ' LIKE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_rows');
}

$result = $db->query('SELECT id, listcatid FROM ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_rows ORDER BY id ASC');

while (list ($id, $listcatid) = $result->fetch(3)) {
    $arr_catid = explode(',', $listcatid);
    foreach ($arr_catid as $catid) {
        $db->query('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_' . $catid . ' SELECT * FROM ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_rows WHERE id=' . $id);
    }
}
$result->closeCursor();
