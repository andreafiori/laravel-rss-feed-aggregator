<?php

namespace App\Models;

class NewsFeeds implements FeedsListInterface
{
    public function getFeeds()
    {
        return [
            [
                'label' => 'CNN',
                'slug' => 'cnn',
                // 'country': 'U.S.A',
                // 'website': 'https://www.cnn.com',
                // 'youtube': 'https://www.youtube.com/user/CNN',
                // 'facebook': 'https://www.facebook.com/cnninternational',
                // 'twitter': 'https://twitter.com/cnni',
                // 'wikipedia': 'https://en.wikipedia.org/wiki/CNN',
                // 'rss': 'http://edition.cnn.com/services/rss/',
                'feeds' => [
                    [
                        'label' => 'Top stories',
                        'slug' => 'cnn-top-stories',
                        'url' => 'http://rss.cnn.com/rss/edition.rss',
                        'description' => '',
                    ],
                    [
                        'label' => 'World',
                        'slug' => 'cnn-world',
                        'url' => 'http://rss.cnn.com/rss/edition_world.rss',
                        'description' => '',
                    ],
                    [
                        'label' => 'Africa',
                        'slug' => 'cnn-africa',
                        'url' => 'http://rss.cnn.com/rss/edition_africa.rss',
                        'description' => '',
                    ],
                    [
                        'label' => 'Americas',
                        'slug' => 'cnn-americas',
                        'url' => 'http://rss.cnn.com/rss/edition_americas.rss',
                        'description' => '',
                    ],
                    [
                        'label' => 'Asias',
                        'slug' => 'cnn-asia',
                        'url' => 'http://rss.cnn.com/rss/edition_asia.rss',
                        'description' => '',
                    ],
                    [
                        'label' => 'U.S news',
                        'slug' => 'cnn-us',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/edition_us.rss'
                    ],
                    [
                        'label' => 'Money',
                        'slug' => 'cnn-money',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/money_news_international.rss'
                    ],
                    [
                        'label' => 'Technology',
                        'slug' => 'cnn-technology',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/edition_technology.rss'
                    ],
                    [
                        'label' => 'Science and space',
                        'slug' => 'cnn-science-space',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/edition_space.rss'
                    ],
                    [
                        'label' => 'Entertainment',
                        'slug' => 'cnn-entertainment',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/edition_entertainment.rss'
                    ],
                    [
                        'slug' => 'cnn-world-sport',
                        'label' => 'World Sport news',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/edition_sport.rss'
                    ],
                    [
                        'slug' => 'Football',
                        'label' => 'Football',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/edition_football.rss'
                    ],
                    [
                        'label' => 'Golf',
                        'slug' => 'cnn-golf',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/edition_golf.rss'
                    ],
                    [
                        'label' => 'Motorsport',
                        'slug' => 'cnn-motorsport',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/edition_motorsport.rss'
                    ],
                    [
                        'label' => 'Tennis',
                        'slug' => 'cnn-tennis',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/edition_tennis.rss'
                    ],
                    [
                        'label' => 'Travel',
                        'slug' => 'cnn-travel',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/edition_travel.rss'
                    ],
                    [
                        'label' => 'Travel',
                        'slug' => 'cnn-video',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/cnn_freevideo.rss'
                    ],
                    [
                        'label' => 'Most recent news',
                        'slug' => 'cnn-most-recent',
                        'description' => '',
                        'url' => 'http://rss.cnn.com/rss/cnn_latest.rss'
                    ],
                ],
            ],
            [
                'label' => 'Ansa.it (italian)',
                'slug' => 'ansa',
                'nosorting' => true,
                'website' => 'http://www.ansa.it/',
                'facebook' => 'https://www.facebook.com/pages/ANSAit/158259371219',
                'twitter' => 'https://twitter.com/agenzia_ansa',
                'linkedin' => 'https://www.linkedin.com/company/ansa',
                'youtube' => 'https://www.youtube.com/user/Ansa',
                'instagram' => 'https://www.instagram.com/agenzia_ansa/',
                'whatsapp' => 'https://whatsapp.com/channel/0029Va681qrFsn0cGTu7WJ3g',
                'github' => '',
                'feeds' => [
                    //  [
                    //     'label'       => '',
                    //     'slug'        => '',
                    //     'url'         => '',
                    //     'description' => '',
                    //     'website'     => '',
                    //     'facebook'    => '',
                    //     'twitter'     => '',
                    //     'linkedin'    => '',
                    //     'youtube'     => '',
                    //     'github'      => '',
                    //     'keywords'    => '',
                    // ],
                    [
                        'label' => 'Homepage',
                        'slug' => 'ansa-homepage',
                        'url' => 'http://www.ansa.it/sito/ansait_rss.xml',
                        'description' => '',
                    ],
                    [
                        'label' => 'Cronaca',
                        'slug' => 'ansa-cronaca',
                        'url' => 'http://www.ansa.it/sito/notizie/cronaca/cronaca_rss.xml',
                        'description' => '',
                    ],
                    [
                        'label' => 'Mondo',
                        'slug' => 'ansa-mondo',
                        'url' => 'http://www.ansa.it/sito/notizie/mondo/mondo_rss.xml',
                        'description' => '',
                    ],
                    [
                        'label' => 'Economia',
                        'slug' => 'ansa-economia',
                        'url' => 'http://www.ansa.it/sito/notizie/economia/economia_rss.xml',
                        'description' => '',
                    ],
                    [
                        'label' => 'Sport',
                        'slug' => 'ansa-sport',
                        'url' => 'http://www.ansa.it/sito/notizie/sport/sport_rss.xml',
                        'description' => '',
                    ],
                    [
                        'label' => 'Cinema',
                        'slug' => 'ansa-cinema',
                        'url' => 'http://www.ansa.it/sito/notizie/cultura/cinema/cinema_rss.xml',
                        'description' => '',
                    ],
                    [
                        'label' => 'Tecnologia',
                        'slug' => 'ansa-tecnologia',
                        'url' => 'http://www.ansa.it/sito/notizie/tecnologia/tecnologia_rss.xml',
                        'description' => '',
                    ],
                    [
                        'label' => 'Ultima ora',
                        'slug' => 'ansa-ultima-ora',
                        'url' => 'http://www.ansa.it/sito/notizie/topnews/topnews_rss.xml',
                        'description' => '',
                    ],
                    [
                        'label' => 'English news',
                        'slug' => 'ansa-english-news',
                        'url' => 'http://www.ansa.it/english/english_rss.xml',
                        'description' => '',
                    ],
                    [
                        'label' => 'Foto',
                        'slug' => 'ansa-foto',
                        'url' => 'http://www.ansa.it/sito/photogallery/foto_rss.xml',
                        'description' => '',
                    ],
                    [
                        'label' => 'Video',
                        'slug' => 'ansa-video',
                        'url' => 'http://www.ansa.it/sito/videogallery/video_rss.xml',
                        'description' => '',
                    ],
                    // NEWS REGIONALI
                    [
                        'label' => 'Abruzzo',
                        'slug' => 'ansa-abruzzo',
                        'description' => '',
                        'url' => 'http://www.ansa.it/abruzzo/notizie/abruzzo_rss.xml'
                    ],
                    [
                        'label' => 'Basilicata',
                        'slug' => 'ansa-asilicata',
                        'description' => '',
                        'url' => 'http://www.ansa.it/basilicata/notizie/basilicata_rss.xml'
                    ],
                    [
                        'label' => 'Calabria',
                        'slug' => 'ansa-calabria',
                        'description' => '',
                        'url' => 'http://www.ansa.it/calabria/notizie/calabria_rss.xml'
                    ],
                    [
                        'label' => 'Campania',
                        'slug' => 'ansa-campania',
                        'description' => '',
                        'url' => 'http://www.ansa.it/campania/notizie/campania_rss.xml'
                    ],
                    [
                        'label' => 'Emilia Romagna',
                        'slug' => 'ansa-emilia-rRomagna',
                        'description' => '',
                        'url' => 'http://www.ansa.it/emiliaromagna/notizie/emiliaromagna_rss.xml'
                    ],
                    [
                        'label' => 'Friuli Venezia Giulia',
                        'slug' => 'ansa-friuli-venezia-giulia',
                        'description' => '',
                        'url' => 'http://www.ansa.it/friuliveneziagiulia/notizie/friuliveneziagiulia_rss.xml'
                    ],
                    [
                        'label' => 'Lazio',
                        'slug' => 'ansa-lazio',
                        'description' => '',
                        'url' => 'http://www.ansa.it/lazio/notizie/lazio_rss.xml'
                    ],
                    [
                        'label' => 'Lombardia',
                        'slug' => 'ansa-lombardia',
                        'description' => '',
                        'url' => 'http://www.ansa.it/lombardia/notizie/lombardia_rss.xml'
                    ],
                    [
                        'label' => 'Marche',
                        'slug' => 'ansa-marche',
                        'description' => '',
                        'url' => 'http://www.ansa.it/marche/notizie/marche_rss.xml'
                    ],
                    [
                        'label' => 'Molise',
                        'slug' => 'ansa-molise',
                        'description' => '',
                        'url' => 'http://www.ansa.it/molise/notizie/molise_rss.xml'
                    ],
                    [
                        'label' => 'Piemonte',
                        'slug' => 'Piemonte',
                        'description' => '',
                        'url' => 'http://www.ansa.it/piemonte/notizie/piemonte_rss.xml'
                    ],
                    [
                        'label' => 'Puglia',
                        'slug' => 'Puglia',
                        'description' => '',
                        'url' => 'http://www.ansa.it/puglia/notizie/puglia_rss.xml'
                    ],
                    [
                        'label' => 'Sardegna',
                        'slug' => 'Sardegna',
                        'description' => '',
                        'url' => 'http://www.ansa.it/sardegna/notizie/sardegna_rss.xml'
                    ],
                    [
                        'label' => 'Sicilia',
                        'slug' => 'Sicilia',
                        'description' => '',
                        'url' => 'http://www.ansa.it/sicilia/notizie/sicilia_rss.xml'
                    ],
                    [
                        'label' => 'Toscana',
                        'slug' => 'ansa-toscana',
                        'description' => '',
                        'url' => 'http://www.ansa.it/toscana/notizie/toscana_rss.xml'
                    ],
                    [
                        'label' => 'Tretino Alto Adige \\ Sudtirol',
                        'slug' => 'ansa-trentino',
                        'description' => '',
                        'url' => 'http://www.ansa.it/trentino/notizie/trentino_rss.xml'
                    ],
                    [
                        'label' => 'Umbria',
                        'slug' => 'ansa-umbria',
                        'description' => '',
                        'url' => 'http://www.ansa.it/umbria/notizie/umbria_rss.xml'
                    ],
                    [
                        'label' => 'Valle d\' Aosta',
                        'slug' => 'ansa-valle-aosta',
                        'description' => '',
                        'url' => 'http://www.ansa.it/valledaosta/notizie/valledaosta_rss.xml'
                    ],
                    [
                        'label' => 'Veneto',
                        'slug' => 'Veneto',
                        'description' => 'ansa-veneto',
                        'url' => 'http://www.ansa.it/veneto/notizie/veneto_rss.xml'
                    ],
                    // CAnali e speciali
                    [
                        'label' => 'Ambiente ed Energia',
                        'description' =>   '',
                        'slug' =>  'ansa-ambiente-energia',
                        'url' =>  'http://www.ansa.it/canale_ambiente/notizie/ambiente_rss.xml'
                    ],
                    [
                        'label' => 'Motori',
                        'description' =>   'Canale Motori',
                        'slug' =>  'ansa-motori',
                        'url' =>  'http://www.ansa.it/canale_motori/notizie/motori_rss.xml'
                    ],
                    [
                        'label' => 'Terra &amp; Gusto',
                        'description' =>   '',
                        'slug' =>  'ansa-terra-and-gusto',
                        'url' =>  'http://www.ansa.it/canale_terraegusto/notizie/terraegusto_rss.xml'
                    ],
                    [
                        'label' => 'Salute e Benessere',
                        'description' =>   '',
                        'slug' =>  'ansa-salute-and-benessere',
                        'url' =>  'http://www.ansa.it/canale_saluteebenessere/notizie/saluteebenessere_rss.xml'
                    ],
                    [
                        'label' => 'Scienza e Tecnica',
                        'description' =>   '',
                        'slug' =>  'ansa-scienza-and-tecnica',
                        'url' =>  'http://www.ansa.it/canale_scienza_tecnica/notizie/scienzaetecnica_rss.xml'
                    ],
                    [
                        'label' => 'Europa',
                        'description' =>   '',
                        'slug' =>  'ansa-europa',
                        'url' =>  'http://www.ansa.it/europa/notizie/rss.xml'
                    ],
                    [
                        'label' => 'Nuova Europa (IT)',
                        'description' =>   '',
                        'slug' =>  'ansa-nuova-europa-it',
                        'url' =>  'http://www.ansa.it/nuova_europa/it/rss.xml'
                    ],
                    [
                        'label' => 'Nuova Europa (EN)',
                        'description' =>   '',
                        'slug' =>  'ansa-nuova-europa-en',
                        'url' =>  'http://www.ansa.it/nuova_europa/en/rss.xml'
                    ],
                    [
                        'label' => 'Viaggiart',
                        'description' =>   '',
                        'slug' =>  'ansa-viaggiart',
                        'url' =>  'http://www.ansa.it/canale_viaggiart/it/notizie/viaggiart_rss.xml'
                    ],
                ]
            ],
            [
                'label' => 'Various',
                'slug' => 'various',
                // 'nosorting' => true,
                'feeds' => [
                    //  [
                    //     'label'       => '',
                    //     'slug'        => '',
                    //     'url'         => '',
                    //     'description' => '',
                    //     'website'     => '',
                    //     'facebook'    => '',
                    //     'twitter'     => '',
                    //     'linkedin'    => '',
                    //     'youtube'     => '',
                    //     'github'      => '',
                    //     'keywords'    => '',
                    // ],
                    [
                        'label' => 'New York times',
                        'slug' => 'new-york-times',
                        'url' => 'https://rss.nytimes.com/services/xml/rss/nyt/HomePage.xml',
                        'description' => '',
                        'website' => 'https://www.nytimes.com/',
                        'facebook' => '',
                        'twitter' => '',
                        'linkedin' => '',
                        'youtube' => '',
                        'github' => '',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Il fatto Quotidiano (italian)',
                        'slug' => 'il-fatto-quotidiano',
                        'url' => 'https://www.ilfattoquotidiano.it/feed/',
                        'description' => '',
                        'website' => 'https://www.ilfattoquotidiano.it/',
                        'facebook' => '',
                        'twitter' => '',
                        'linkedin' => '',
                        'youtube' => '',
                        'github' => '',
                        'keywords' => '',
                    ],
                ]
            ],
        ];
    }
}
