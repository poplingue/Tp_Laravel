<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
   
class QuestionTableSeeder extends Seeder {
    
    public function run() {
        
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        
        DB::table('questions')->delete();
        
        DB::table('questions')->insert(
            [
                [
                    'category_id'=> 1,
                    'question'   => 'Plus c\'est gros et mieux ça passe',
                    'answer'     => 'Chirac',
                    'wiki'       => "Jacques Chirac, né le 29 novembre 1932 dans le 5e arrondissement de Paris, est un homme d'État français. Il est le 22e président de la République française du 17 mai 1995 au 16 mai 2007. Fondateur de deux partis politiques classés à droite de l'échiquier politique, le Rassemblement pour la République (RPR) en 1976 puis l'Union pour un mouvement populaire (UMP) en 2002, il occupe à plusieurs reprises la fonction de député de la troisième circonscription de la Corrèze et est le maire de Paris entre 1977 et 1995. Premier ministre sous la présidence de Valéry Giscard d'Estaing de 1974 à 1976, il est nommé chef du gouvernement pour la seconde fois de sa carrière par le président socialiste François Mitterrand, en 1986, à la suite de la victoire de la droite aux élections législatives, étant ainsi le premier chef du gouvernement d'une cohabitation sous la Ve République et, par la même occasion, la seule personnalité politique sous ce même régime ayant assumé, par deux fois, la charge de Premier ministre. Jacques Chirac devient le 22e président de la République française le 17 mai 1995, à la suite de son élection face au candidat socialiste, Lionel Jospin. Son premier mandat est marqué par le plan Juppé de 1995, la troisième cohabitation avec Lionel Jospin à la suite de la dissolution manquée de l'Assemblée nationale, des affaires judiciaires dans lesquelles il est directement mis en cause par des enquêtes journalistiques ou encore le référendum de 2000, qui ramène la durée du mandat présidentiel à cinq ans. Lors de l'élection présidentielle de 2002, il est réélu au second tour face au candidat du Front national, Jean-Marie Le Pen. Pendant son second mandat, il s'oppose notamment à la guerre d'Irak. Il quitte le palais de l'Élysée le 16 mai 2007, après l'investiture de Nicolas Sarkozy à la présidence de la République. Il siège ensuite au Conseil constitutionnel, dont il est membre de droit en tant qu'ancien président de la République, jusqu'au 9 décembre 2010, date à partir de laquelle il se met en retrait du fait de son état de santé et de ses ennuis judiciaires. En 2011, il est condamné à deux ans de prison avec sursis dans le cadre de l'affaire des emplois fictifs de la mairie de Paris.",
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'category_id'=> 1,
                    'question'   => 'T\'as pas un gimmick, mec ?',
                    'answer'     => 'M',
                    'wiki'       => "Matthieu Chedid, connu sous le nom d'artiste -M-, est un auteur-compositeur-interprète français né le 21 décembre 1971 à Boulogne-Billancourt. S'il joue principalement sur scène de la guitare, -M- est aussi multi-instrumentiste en studio, où il assure la quasi-totalité des différentes partitions.",
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'category_id'=> 1,
                    'question'   => "Les résolutions sont comme les anguilles ; on les prend aisément. Le diable est de les tenir.",
                    'answer'     => 'Alexandre Dumas',
                    'wiki'       => "Alexandre Dumas (dit aussi Alexandre Dumas père) est un écrivain français né le 24 juillet 1802 à Villers-Cotterêts (Aisne) et mort le 5 décembre 1870 à Puys, près de Dieppe (Seine-Maritime). Il est le fils de Thomas Alexandre Davy de la Pailleterie, dit le général Dumas, et le père de l'écrivain Alexandre Dumas (1824-1895) dit Dumas fils, auteur en particulier de La Dame aux camélias. Proche des romantiques et tourné vers le théâtre, Alexandre Dumas écrit d'abord des vaudevilles à succès et des drames historiques comme Henri III et sa cour (1829), La Tour de Nesle (1832), Kean (1836). Auteur prolifique, il s'oriente ensuite vers le roman historique telles que la trilogie Les Trois Mousquetaires (1844), Vingt ans après (1845) et Le Vicomte de Bragelonne (1847), ou encore Le Comte de Monte-Cristo (1844 -1846) et La Reine Margot (1845). La paternité de certaines de ses œuvres lui est contestée. Dumas fut ainsi soupçonné par plusieurs critiques de son époque d'avoir eu recours à des nègres littéraires, notamment Auguste Maquet. Toutefois les recherches contemporaines ont montré que Dumas avait mis en place une véritable coopération avec ce dernier : Dumas s'occupait de choisir le thème général et modifiait les ébauches de Maquet pour les rendre plus dynamiques. On ne peut donc lui nier la paternité de son œuvre, même s'il a été aidé.",
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'category_id'=> 1,
                    'question'   => "On ne vit pas de ce que l'on mange, mais de ce que l'on digère.",
                    'answer'     => 'Alexandre Dumas',
                    'wiki'       => "Alexandre Dumas (dit aussi Alexandre Dumas père) est un écrivain français né le 24 juillet 1802 à Villers-Cotterêts (Aisne) et mort le 5 décembre 1870 à Puys, près de Dieppe (Seine-Maritime). Il est le fils de Thomas Alexandre Davy de la Pailleterie, dit le général Dumas, et le père de l'écrivain Alexandre Dumas (1824-1895) dit Dumas fils, auteur en particulier de La Dame aux camélias. Proche des romantiques et tourné vers le théâtre, Alexandre Dumas écrit d'abord des vaudevilles à succès et des drames historiques comme Henri III et sa cour (1829), La Tour de Nesle (1832), Kean (1836). Auteur prolifique, il s'oriente ensuite vers le roman historique telles que la trilogie Les Trois Mousquetaires (1844), Vingt ans après (1845) et Le Vicomte de Bragelonne (1847), ou encore Le Comte de Monte-Cristo (1844 -1846) et La Reine Margot (1845). La paternité de certaines de ses œuvres lui est contestée. Dumas fut ainsi soupçonné par plusieurs critiques de son époque d'avoir eu recours à des nègres littéraires, notamment Auguste Maquet. Toutefois les recherches contemporaines ont montré que Dumas avait mis en place une véritable coopération avec ce dernier : Dumas s'occupait de choisir le thème général et modifiait les ébauches de Maquet pour les rendre plus dynamiques. On ne peut donc lui nier la paternité de son œuvre, même s'il a été aidé.",
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'category_id'=> 1,
                    'question'   => "On ne sait jouir de rien à force de vouloir jouir de tout.",
                    'answer'     => 'Sand',
                    'wiki'       => "George Sand est le pseudonyme d'Amantine Aurore Lucile Dupin, baronne Dudevant, romancière, auteur dramatique, critique littéraire française, journaliste, née à Paris le 1er juillet 1804 et morte au château de Nohant-Vic le 8 juin 1876. Elle compte parmi les écrivains prolifiques avec plus de soixante-dix romans à son actif, cinquante volumes d'œuvres diverses dont des nouvelles, des contes, des pièces de théâtre et des textes politiques.",
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'category_id'=> 3,
                    'question'   => "Le vrai est trop simple, il faut y arriver toujours par le compliqué.",
                    'answer'     => 'Sand',
                    'wiki'       => "George Sand est le pseudonyme d'Amantine Aurore Lucile Dupin, baronne Dudevant, romancière, auteur dramatique, critique littéraire française, journaliste, née à Paris le 1er juillet 1804 et morte au château de Nohant-Vic le 8 juin 1876. Elle compte parmi les écrivains prolifiques avec plus de soixante-dix romans à son actif, cinquante volumes d'œuvres diverses dont des nouvelles, des contes, des pièces de théâtre et des textes politiques.",
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'category_id'=> 2,
                    'question'   => "Il y a des gens qui ne sont heureux que dans la dépendance.",
                    'answer'     => 'Sand',
                    'wiki'       => "George Sand est le pseudonyme d'Amantine Aurore Lucile Dupin, baronne Dudevant, romancière, auteur dramatique, critique littéraire française, journaliste, née à Paris le 1er juillet 1804 et morte au château de Nohant-Vic le 8 juin 1876. Elle compte parmi les écrivains prolifiques avec plus de soixante-dix romans à son actif, cinquante volumes d'œuvres diverses dont des nouvelles, des contes, des pièces de théâtre et des textes politiques.",
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'category_id'=> 2,
                    'question'   => "Il y a une grande analogie entre la tyrannie de tous et la tyrannie d’un seul.",
                    'answer'     => 'Chateaubriand',
                    'wiki'       => "François-René, vicomte de ChateaubriandN 1, né à Saint-Malo le 4 septembre 1768 et mort à Paris le 4 juillet 1848, est un écrivain et homme politique français. Il est considéré comme l'un des précurseurs du romantisme français et l'un des grands noms de la littérature française. Si le rôle politique de Chateaubriand dans la mouvance royaliste au moment du Premier Empire et de la Restauration est resté mineur, il en va tout autrement dans le domaine littéraire où sa place est grande. En effet ses descriptions de la nature et son analyse des sentiments du « moi » en ont fait un modèle pour la génération des écrivains romantiques en France (« Je veux être Chateaubriand ou rien » proclamait le jeune Victor Hugo). Il a aussi, le premier, dans René, ou les Effets des passions (1802) formulé le « vague des passions » qui deviendra un lieu commun du romantisme et fera de René le personnage emblématique de cette sensibilité nouvelle, créée avec une prose ample et rythmée que ses détracteurs qualifieront d'ampoulée. Il participera aussi au goût pour l'exotisme de l'époque en évoquant l'Amérique du Nord où il déclare avoir voyagé, dans Atala (1801) ou Les Natchez (1826) ou encore dans le récit de son voyage en Méditerranée dans Itinéraire de Paris à Jérusalem en 1811. L'œuvre monumentale de Chateaubriand reste les Mémoires d'outre-tombe (posthumes, 1849-1850) dont les premiers livres recréent son enfance et sa formation dans son milieu social de petite noblesse bretonne à Saint-Malo ou à Combourg, alors que les livres suivants relèvent davantage du tableau historique des périodes dont il a été le témoin de 1789 à 1841, ce qui fait de ce texte à la fois un chef-d'œuvre d'autobiographie et une mine d'informations pour l'historien.",
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
            ]
        );
    }
}