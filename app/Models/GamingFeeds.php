<?php

namespace App\Models;

class GamingFeeds implements FeedsListInterface
{
    public function getFeeds()
    {
        return [
            [
                'image' => 'game-informer.gif',
                'label' => 'Game Informer',
                'slug' => 'game-informer',
                'website' => 'https://www.gameinformer.com',
                'wikipedia' => '',
                'facebook' => 'http://facebook.com/officialgameinformer',
                'twitter' => 'http://twitter.com/GameInformer',
                'linkedin' => '',
                'youtube' => 'https://www.youtube.com/gameinformer',
                'feeds' => [
                    [
                        'label' => 'News',
                        'slug' => 'game-informer-news',
                        'url' => 'https://www.gameinformer.com/news.xml',
                        'description' => 'Game Informer is your source for the latest in video game news, reviews, previews, podcasts, and features.',
                        'keywords' => 'gameinformer,news,feeds,games',
                    ],
                    [
                        'label' => 'Videos',
                        'slug' => 'game-informer-videos',
                        'url' => 'https://www.gameinformer.com/videos.xml',
                        'description' => 'Game Informer is your source for the latest in video game news, reviews, previews, podcasts, and features.',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Podcasts',
                        'slug' => 'game-informer-podcast',
                        'url' => 'https://www.gameinformer.com/gishow.xml',
                        'description' => 'Game Informer is your source for the latest in video game news, reviews, previews, podcasts, and features.',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Features',
                        'slug' => 'game-informer-features',
                        'url' => 'https://www.gameinformer.com/features.xml',
                        'description' => 'Game Informer is your source for the latest in video game news, reviews, previews, podcasts, and features.',
                        'keywords' => '',
                    ],
                ]
            ],
            [
                'image' => 'game-spot.gif',
                'label' => 'Game Spot',
                'description' => 'GameSpot is the world\'s leading source for PS4, Xbox One, PS3, Xbox 360, Wii U, PS Vita, Wii, PC, 3DS, and DS video game news, reviews, previews, trailers, walkthroughs, and more.',
                'slug' => 'game-spot',
                'website' => 'https://www.gamespot.com/',
                'wikipedia' => '',
                'facebook' => 'http://facebook.com/gamespot',
                'twitter' => 'http://twitter.com/gamespot',
                'linkedin' => '',
                'youtube' => 'http://youtube.com/gamespot',
                'rss' => 'https://www.gamespot.com/feeds/',
                'feeds' => [
                    [
                        'label' => 'All Content',
                        'slug' => 'gamespot-all-content',
                        'url' => 'https://www.gamespot.com/feeds/mashup',
                        'description' => '',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'All News',
                        'slug' => 'gamespot-all-news',
                        'url' => 'https://www.gamespot.com/feeds/news',
                        'description' => '',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Game News',
                        'slug' => 'gamespot-game-news',
                        'url' => 'https://www.gamespot.com/feeds/game-news',
                        'description' => '',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Reviews',
                        'slug' => 'gamespot-reviews',
                        'url' => 'https://www.gamespot.com/feeds/reviews',
                        'description' => 'Gamespot Reviews RSS',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Galleries',
                        'slug' => 'gamespot-galleries',
                        'url' => 'https://www.gamespot.com/feeds/galleries',
                        'description' => 'Gamespot Galleries RSS',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Video',
                        'slug' => 'gamespot-videos',
                        'url' => 'https://www.gamespot.com/feeds/video',
                        'description' => 'Gamespot Video RSS',
                        'keywords' => '',
                    ],
                ]
            ],
            [
                'image' => 'ign.gif',
                'label' => 'IGN',
                'description' => 'IGN Videogames PC, PS4, Xbox One, Switch, 3DS, PS Vita, Mobile, Cinema and TV',
                'slug' => 'ign',
                'website' => 'http://www.ign.com',
                'wikipedia' => 'https://en.wikipedia.org/wiki/IGN',
                'facebook' => 'https://it-it.facebook.com/ign/',
                'twitter' => 'https://twitter.com/IGN',
                'linkedin' => '',
                'youtube' => 'https://www.youtube.com/channel/UCKy1dAqELo0zrOtPkf0eTMw',
                'rss' => 'https://corp.ign.com/feeds/',
                'feeds' => [
                    [
                        'label' => 'IGN Italy news',
                        'slug' => 'ign-italy-news',
                        'url' => 'https://it.ign.com/feed.xml',
                        'keywords' => 'ign,articles,news,e3',
                    ],
                ]
            ],
            [
                'image' => 'microsoft.gif',
                'label' => 'Microsoft',
                'slug' => 'microsoft',
                'description' => 'Microsoft Games for windows and consoles',
                'website' => 'https://www.microsoftstudios.com/',
                'wikipedia' => 'https://en.wikipedia.org/wiki/Microsoft_Studios',
                'facebook' => '',
                'twitter' => '',
                'linkedin' => '',
                'youtube' => '',
                'feeds' => [
                    [
                        'label' => 'Xbox Wire',
                        'slug' => 'xbox-wire',
                        'url' => 'http://news.xbox.com/feed',
                        'website' => 'http://news.xbox.com/',
                        'facebook' => '',
                        'twitter' => '',
                        'youtube' => '',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Xbox Live\'s Major Nelson',
                        'slug' => 'xbox-live-major-nelson',
                        'url' => 'https://majornelson.com/feed',
                        'website' => 'https://majornelson.com/',
                        'facebook' => '',
                        'twitter' => 'https://twitter.com/majornelson',
                        'youtube' => '',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'VG247',
                        'description' => 'VG247 RSS Feed',
                        'slug' => 'vg247',
                        'website' => 'http://www.vg247.com/',
                        'facebook' => '',
                        'twitter' => '',
                        'youtube' => '',
                        'url' => 'https://www.vg247.com/feed',
                        'keywords' => '',
                    ],
                ]
            ],
            [
                'image' => 'nintendo.gif',
                'label' => 'Nintendo',
                'slug' => 'nintendo',
                'description' => 'The Nintendo Official Website is the home of the Nintendo Switch console, Nintendo 3DS and Nintendo 2DS systems, plus new and classic games for all ages.',
                'website' => 'https://www.nintendo.com/',
                'wikipedia' => '',
                'facebook' => 'http://www.facebook.com/nintendo',
                'twitter' => 'http://twitter.com/NintendoAmerica',
                'linkedin' => '',
                'youtube' => 'http://www.youtube.com/nintendo',
                'feeds' => [
                    [
                        'label' => 'Nintendo Life',
                        'description' => 'Nintendo Life RSS Feed',
                        'slug' => 'nintendo-life',
                        'website' => 'http://www.nintendolife.com/',
                        'facebook' => 'https://www.facebook.com/nintendolife',
                        'twitter' => 'https://twitter.com/nintendolife',
                        'youtube' => 'https://www.youtube.com/nintendolife',
                        'url' => 'http://www.nintendolife.com/feeds/latest',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'GoNintendo',
                        'description' => 'GoNintendo, Nintendo, Switch, 3DS, RawmeatCowboy, Video Games, Mario, Zelda, Smash Brothers, Fire Emblem',
                        'slug' => 'gonintendo',
                        'website' => 'https://www.gonintendo.com/',
                        'facebook' => 'https://facebook.com/gonintendo',
                        'twitter' => 'https://twitter.com/GoNintendoTweet',
                        'youtube' => 'https://www.youtube.com/channel/UCvQPbLRLHSUWy7km3iaN4ng',
                        'url' => 'http://feedpress.me/gonintendo',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'My Nintendo News',
                        'description' => 'My Nintendo News RSS Feed',
                        'slug' => 'my-nintendo-news',
                        'website' => 'https://mynintendonews.com/',
                        'facebook' => '',
                        'twitter' => '',
                        'youtube' => '',
                        'url' => 'https://mynintendonews.com/feed',
                        'keywords' => '',
                    ],
                ]
            ],
            [
                'image' => 'playstation.gif',
                'label' => 'Playstation',
                'slug' => 'playstation',
                'description' => '',
                'website' => '',
                'wikipedia' => '',
                'facebook' => '',
                'twitter' => '',
                'linkedin' => '',
                'youtube' => '',
                'feeds' => [
                    [
                        'label' => 'Playstation blog',
                        'description' => '',
                        'slug' => 'playstation-blog',
                        'website' => '',
                        'facebook' => '',
                        'twitter' => '',
                        'youtube' => '',
                        'url' => 'http://feeds.feedburner.com/psblog',
                        'keywords' => '',
                    ],
                    // [
                    //     'label' => 'Ps4blog',
                    //     'description' => '',
                    //     'slug' => 'playstation-blog',
                    //     'website' => 'https://www.ps4blog.net/',
                    //     'facebook' => '',
                    //     'twitter' => '',
                    //     'youtube' => '',
                    //     'url' => 'https://feeds.feedburner.com/PS4Blognet',
                    //     'keywords' => '',
                    // ],
                    [
                        'label' => 'Psx extreme',
                        'description' => '',
                        'slug' => 'psx-extreme',
                        'website' => 'https://psxextreme.com/',
                        'facebook' => '',
                        'twitter' => '',
                        'youtube' => '',
                        'url' => 'https://psxextreme.com/feed/',
                        'keywords' => '',
                    ],
                ]
            ],
            [
                'image' => 'gaming-websites-news.gif',
                'label' => 'Various',
                'description' => '',
                'slug' => 'gaming-websites',
                'website' => '',
                'wikipedia' => '',
                'facebook' => '',
                'twitter' => '',
                'linkedin' => '',
                'youtube' => '',
                'feeds' => [
                    [
                        'label' => 'Polygon',
                        'slug' => 'polygon',
                        'website' => 'http://www.polygon.com/',
                        'facebook' => 'https://www.facebook.com/polygon',
                        'twitter' => 'https://twitter.com/Polygon',
                        'youtube' => 'https://www.youtube.com/user/polygon',
                        'url' => 'http://www.polygon.com/rss/index.xml',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Eurogamer',
                        'slug' => 'eurogamer',
                        'website' => 'http://www.eurogamer.net/',
                        'facebook' => 'https://www.facebook.com/Eurogamer',
                        'twitter' => 'https://www.twitter.com/eurogamer',
                        'youtube' => '',
                        'url' => 'http://www.eurogamer.net/?format=rss',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Destructoid',
                        'slug' => 'destructoid',
                        'website' => 'https://www.destructoid.com/',
                        'facebook' => 'https://facebook.com/destructoid',
                        'twitter' => 'https://twitter.com/destructoid',
                        'youtube' => 'https://youtube.com/dtoid',
                        'url' => 'https://feeds.feedburner.com/Destructoid-Rss',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Rock, Paper, Shotgun',
                        'slug' => 'rock-paper-shotgun',
                        'website' => 'https://www.rockpapershotgun.com/',
                        'facebook' => 'https://www.facebook.com/rockpapershot',
                        'twitter' => 'https://twitter.com/rockpapershot',
                        'youtube' => '',
                        'url' => 'http://feeds.feedburner.com/RockPaperShotgun',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'PCGamesN',
                        'description' => 'PC gaming, news, features, guides, reviews, and more.',
                        'slug' => 'pc-games-n',
                        'website' => 'https://www.pcgamesn.com/',
                        'facebook' => '',
                        'twitter' => '',
                        'youtube' => '',
                        'url' => 'https://www.pcgamesn.com/rss',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Kotaku',
                        'slug' => 'kotaku',
                        'website' => 'http://kotaku.com/',
                        'facebook' => 'https://facebook.com/kotaku',
                        'twitter' => 'https://twitter.com/kotaku',
                        'youtube' => 'https://www.youtube.com/user/KotakuNYC',
                        'url' => 'https://kotaku.com/rss',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Fextralife',
                        'description' => 'Fextralife RSS feed',
                        'slug' => 'fextralife',
                        'website' => 'http://fextralife.com/',
                        'facebook' => 'https://www.facebook.com/Fextralife',
                        'twitter' => 'https://x.com/Fextralife',
                        'youtube' => 'https://www.youtube.com/channel/UClkUHCETNUph8vM-4gQpwUA',
                        'url' => 'http://fextralife.com/feed',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Game developer.com',
                        'slug' => 'game-developer',
                        'url' => 'https://www.gamedeveloper.com/rss.xml',
                        'website' => 'http://www.gamasutra.com/',
                        'facebook' => 'https://www.facebook.com/GameDeveloperOfficial',
                        'twitter' => 'https://twitter.com/gamedevdotcom/',
                        'youtube' => '',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'PC Gamer',
                        'slug' => 'pc-gamer',
                        'website' => 'https://www.pcgamer.com/',
                        'facebook' => 'https://www.facebook.com/PCGamesNetwork',
                        'twitter' => 'https://twitter.com/pcgamer',
                        'youtube' => 'https://www.youtube.com/user/pcgamer',
                        'url' => 'https://www.pcgamesn.com/mainrss.xml',
                        'keywords' => '',
                    ],
                    [
                        'label' => 'Green Man',
                        'slug' => 'green-man-gaming-posts',
                        'website' => 'https://www.greenmangaming.com/posts/',
                        'facebook' => 'https://www.facebook.com/GreenManGaming',
                        'twitter' => 'https://twitter.com/greenmangaming',
                        'youtube' => 'https://www.youtube.com/channel/UCbONsRevt2_YIN6sLigGIzQ',
                        'url' => 'https://www.greenmangaming.com/posts/feed',
                        'keywords' => '',
                    ],

                    /*
                    [
                        'label'         => '',
                        'description'   => '',
                        'slug'          => '',
                        'website'       => '',
                        'facebook'      => '',
                        'twitter'       => '',
                        'youtube'       => '',
                        'url'           => '',
                        'keywords'      => '',
                    ],
                    */

                    /*
                    {
                title: 'Websites',
                feeds: [
                  // Reddit | Gamers RSS Feed https://www.reddit.com/r/gamers/.rss | https://www.reddit.com/r/gamers/
                  {

                  },
                  {
                      label: 'SKOAR!',
                    title: 'SKOAR! RSS Feed',
                    path: '/videogames/websites/skoar',
                    website: 'http://skoar.digit.in/',
                    facebook: 'https://www.facebook.com/SKOAR',
                    twitter: 'https://twitter.com/skoar',
                    youtube: 'https://www.youtube.com/user/digit',
                    url: 'http://skoar.digit.in/feed'
                  },
                  {
                      label: 'Siliconera',
                    title: 'Siliconera RSS Feed',
                    path: '/videogames/websites/siliconera',
                    website: 'http://www.siliconera.com/',
                    url: 'http://www.siliconera.com/feed/'
                  },
                  {
                      label: 'Gamers Heroes',
                    title: 'Gamers Heroes - Gaming News, Honest Game Reviews, Hot Gaming Cosplay & More RSS Feed',
                    path: '/videogames/websites/gamers-heroes',
                    website: 'http://www.gamersheroes.com/',
                    url: 'http://www.gamersheroes.com/feed'
                  },

                  {
                      label: 'DualShockers',
                    title: 'DualShockers RSS Feed',
                    path: '/videogames/websites/dualshockers',
                    website: 'http://www.dualshockers.com/',
                    isAtom: true,
                    url: 'http://dualshockers.com/feed/atom'
                  },
                  {
                      label: 'Indie DB',
                    title: 'Indie DB RSS Feed',
                    path: '/videogames/websites/indie-db',
                    website: 'http://www.indiedb.com/',
                    facebook: 'https://www.facebook.com/indiedb',
                    url: 'http://rss.indiedb.com/headlines/feed/rss.xml'
                  },
                  {
                      label: 'PlayStation LifeStyle',
                    title: 'PlayStation LifeStyle RSS Feed',
                    path: '/videogames/websites/playstation-lifestyle',
                    website: 'http://www.playstationlifestyle.net/',
                    url: 'http://www.playstationlifestyle.net/feed/'
                  },
                  {
                      label: 'Operation Sports',
                    title: 'Operation Sports RSS Feed',
                    path: '/videogames/websites/',
                    website: 'http://www.operationsports.com/',
                    facebook: 'https://www.facebook.com/OperationSports',
                    twitter: 'https://twitter.com/operationsports',
                    url: 'https://www.operationsports.com/feed/'
                  },
                  {
                      label: 'GamesIndustry International',
                    title: 'GamesIndustry International RSS Feed',
                    path: '/videogames/websites/gameindustry-international',
                    website: 'http://www.gamesindustry.biz/',
                    facebook: 'https://www.facebook.com/gamesindustry',
                    twitter: 'https://twitter.com/gibiz',
                    linkedin: 'https://www.linkedin.com/groups/4338056/profile',
                    url: 'http://www.gamesindustry.biz/rss/gamesindustry_news_feed.rss'
                  },
                  {
                      label: 'TouchArcade',
                    title: 'TouchArcade | iPhone Game Reviews & News RSS Feed',
                    path: '/videogames/websites/toucharcade',
                    website: 'http://toucharcade.com/',
                    facebook: 'https://www.facebook.com/TouchArcade/',
                    twitter: 'https://twitter.com/toucharcade',
                    youtube: 'https://www.youtube.com/user/TouchArcade',
                    url: 'https://toucharcade.com/community/forums/-/index.rss'
                  },
                  {
                      label: 'Push Square',
                    title: 'Push Square RSS Feed',
                    path: '/videogames/websites/push-square',
                    website: 'http://www.pushsquare.com/',
                    facebook: 'https://facebook.com/pushsquare',
                    twitter: 'https://twitter.com/pushsquare',
                    youtube: 'https://youtube.com/pushsquare',
                    url: 'http://www.pushsquare.com/feeds/latest'
                  },
                  {
                      label: 'Massively Overpowered',
                    title: 'Massively Overpowered | MMORPG news and opinions RSS Feed',
                    path: '/videogames/websites/massively-overpowered',
                    website: 'http://massivelyop.com/',
                    facebook: 'https://www.facebook.com/massivelyop',
                    twitter: 'https://twitter.com/MassivelyOP',
                    youtube: 'https://youtube.com/channel/UCvHR952m5NrDyJnKRkxvhtQ',
                    url: 'http://massivelyop.com/feed'
                  },
                  {
                      label: 'ASTRO Gaming Blog',
                    title: 'ASTRO Gaming Blog RSS Feed',
                    path: '/videogames/websites/astrogaming-posts',
                    website: 'http://blog.astrogaming.com/',
                    url: 'http://blog.astrogaming.com/feed'
                  },
                  {
                      label: 'GamingBolt.com RSS Feed',
                    title: 'GamingBolt.com RSS Feed',
                    path: '/videogames/websites/gamingbolt-com',
                    website: 'http://gamingbolt.com/',
                    facebook: 'https://www.facebook.com/GamingBolt-241308979564/',
                    twitter: 'https://twitter.com/GamingBoltTweet',
                    youtube: 'https://www.youtube.com/user/GamingBoltLive',
                    url: 'http://feeds.feedburner.com/gamingbolt'
                  },
                  {
                      label: 'VideoGamer',
                    title: 'VideoGamer RSS Feed',
                    path: '/videogames/websites/videogamer',
                    website: 'https://www.videogamer.com/',
                    facebook: 'https://www.facebook.com/VideoGamerCom',
                    twitter: 'https://twitter.com/intent/user?screen_name=VideoGamerCom',
                    youtube: 'https://www.youtube.com/VideoGamerTV?sub_confirmation=1',
                    url: 'https://www.videogamer.com/rss', // https://www.videogamer.com/rss/allupdates.xml
                    isAtom: true,
                  },
                  {
                      label: 'Pocket Gamer',
                    title: 'Pocket Gamer RSS Feed',
                    path: '/videogames/websites/pocket-gamer',
                    website: 'http://www.pocketgamer.co.uk/',
                    facebook: '',
                    twitter: '',
                    youtube: '',
                    url: 'http://www.pocketgamer.co.uk/rss.asp',
                  },
                  {
                      label: 'Games Finder',
                    title: 'Games Finder - Recommending Games Like Your Favourites RSS Feed',
                    path: '/videogames/websites/games-finder',
                    website: '',
                    facebook: '',
                    twitter: '',
                    youtube: '',
                    url: ''
                  },
                  {
                      label: 'Jay Is Games',
                    title: 'Jay Is Games RSS Feed',
                    path: '/videogames/websites/jay-games',
                    website: 'http://jayisgames.com/',
                    facebook: '',
                    twitter: '',
                    youtube: '',
                    url: 'http://jayisgames.com/index.xml'
                  },
                  {
                      label: 'Alpha Beta Gamer',
                    title: 'Alpha Beta Gamer RSS Feed',
                    path: '/videogames/websites/alpha-beta-gamer',
                    website: 'http://www.alphabetagamer.com/',
                    facebook: 'https://www.facebook.com/Alpha-Beta-Gamer-682425221843256/',
                    twitter: 'https://twitter.com/gameralphabeta',
                    youtube: 'https://www.youtube.com/channel/UCXKNiazqmuUi9CeX_kyDpjw',
                    url: 'http://www.alphabetagamer.com/feed'
                  },
                  {
                      label: 'Unity Blog',
                    title: 'Unity Blog RSS Feed',
                    path: '/videogames/websites/unity-posts',
                    website: 'https://blogs.unity3d.com/',
                    facebook: 'http://www.facebook.com/unity3d',
                    twitter: 'http://www.twitter.com/unity3d',
                    youtube: 'https://www.youtube.com/user/Unity3D',
                    linkedin: 'https://www.linkedin.com/company/unity-technologies',
                    url: 'https://blogs.unity3d.com/feed/'
                  },
                  {
                      label: 'PCInvasion',
                    title: 'PCInvasion RSS Feed',
                    path: '/videogames/websites/pc-invasion',
                    website: 'https://www.pcinvasion.com/',
                    facebook: 'https://www.facebook.com/PCInvasionCom',
                    twitter: 'https://twitter.com/pcinvasion',
                    youtube: 'https://youtube.com/channel/UCwEeGz642neKIXgv7AdWggA',
                    url: 'http://www.pcinvasion.com/feed'
                  },
                  {
                      label: 'The Games Machine',
                    title: 'The Games Machine RSS feed',
                    path: '/videogames/websites/the-games-machine',
                    website: 'https://www.thegamesmachine.it/',
                    url: 'https://www.thegamesmachine.it/feed/'
                  },
                  {
                      label: 'Gamezebo',
                    title: 'Gamezebo RSS Feed',
                    path: '/videogames/websites/gamezebo',
                    website: 'http://www.gamezebo.com/',
                    url: 'http://www.gamezebo.com/feed'
                  },
                  {
                      label: 'VideoGamesBlogger',
                    title: 'VideoGamesBlogger RSS Feed',
                    path: '/videogames/websites/gamezebo',
                    website: 'http://www.videogamesblogger.com/',
                    url: 'http://www.videogamesblogger.com/feed'
                  },
                  {
                      label: 'GamingOnLinux',
                    title: 'GamingOnLinux | Linux & SteamOS Gaming News RSS Feed',
                    path: '/videogames/websites/gaming-on-linux',
                    website: 'https://www.gamingonlinux.com/',
                    facebook: 'https://www.facebook.com/gamingonlinux',
                    twitter: 'https://www.twitter.com/gamingonlinux',
                    youtube: 'https://www.youtube.com/user/GamingOnLinuxcom',
                    url: 'https://www.gamingonlinux.com/article_rss.php'
                    // https://www.gamingonlinux.com/article_rss.php
                    // https://www.gamingonlinux.com/article_rss.php?mini
                    // https://www.gamingonlinux.com/forum_rss.php
                  },
                  {
                      label: 'Adventure Gamers',
                    title: 'Adventure Gamers RSS Feed',
                    path: '/videogames/websites/adventure-gamers',
                    website: 'http://www.adventuregamers.com/',
                    url: 'http://www.adventuregamers.com/rss/'
                  },
                  {
                      label: 'TechRaptor - Gaming',
                    title: 'TechRaptor - Gaming RSS Feed',
                    path: '/videogames/websites/',
                    website: 'https://techraptor.net/content/category/gaming',
                    facebook: 'https://www.facebook.com/TechRaptor/',
                    twitter: 'https://twitter.com/techraptr',
                    youtube: 'https://www.youtube.com/user/TechRaptorVideo',
                    url: 'https://techraptor.net/content/category/gaming/feed'
                  },
                  {
                      label: 'The Game Fanatics',
                    title: 'The Game Fanatics RSS Feed',
                    path: '/videogames/websites/the-game-fanatics',
                    website: 'http://thegamefanatics.com/',
                    facebook: 'https://www.facebook.com/thegamefanatics',
                    twitter: 'https://twitter.com/thegamefanatics',
                    youtube: 'https://www.youtube.com/subscription_center?add_user=thegamefanaticstv',
                    url: 'http://thegamefanatics.com/feed'
                  },
                  {
                      label: 'TheSixthAxis',
                    title: 'TheSixthAxis RSS Feed',
                    path: '/videogames/websites/',
                    website: 'http://www.thesixthaxis.com/',
                    url: 'http://www.thesixthaxis.com/feed/'
                  },
                  {
                      label: 'GameSpew',
                    title: 'GameSpew RSS Feed',
                    path: '/videogames/websites/',
                    website: 'http://www.gamespew.com/',
                    url: 'http://www.gamespew.com/feed'
                  },

                ]
              },


                    */

                    // The Games Machine (Italian)
//            [
//                'group' => 'The Games Machine',
//                'website' => 'https://www.thegamesmachine.it',
//                'facebook' => 'https://www.facebook.com/TheGamesMachine/',
//                'items' =>  [
//                    [
//                        'label'         => 'The Games Machine (Italian)',
//                        'slug'          => 'the-games-machine-news',
//                        'url'           => 'https://www.thegamesmachine.it/rss',
//                        'description'   => 'The latest news, previews, features, press conferences and videos from E3, the largest show dedicated to video games',
//                        'keywords'      => 'ign,articles,news,e3',
//                    ],
//                ]
//            ],
                ]
            ]
        ];
    }
}
