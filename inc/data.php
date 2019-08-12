<?php

// include ("connection.php");


$catalog = [];
// Books
$catalog[101] = [
	"title" => "When the Air Hits Your Brain: Tales of Neurosurgery",
	"img" => "img/media/193749.jpg",
    "genre" => "Science",
    "format" => "Paperback",
    "year" => 1997,
    "category" => "Books",
    "authors" => [
        "Frank T. Vertosick Jr."
    ],
    "publisher" => "Fawcett",
    "isbn" => '9780449227138'
];
$catalog[102] = [
    "title" => "Everyday Sexism",
    "img" => "img/media/21251323.jpg",
    "genre" => "Feminism",
    "format" => "Ebook",
    "year" => 2014,
    "category" => "Books",
    "authors" => [
        "Laura Bates"
    ],
    "publisher" => "Simon & Schuster",
    "isbn" => '1471131572'
];
$catalog[103] = [
    "title" => "Clock of the Long Now: Time and Responsibility: The Ideas Behind the World's Slowest Computer",
    "img" => "img/media/33279.jpg",
    "genre" => "Non-Fiction",
    "format" => "Paperback",
    "year" => 2000,
    "category" => "Books",
    "authors" => [
        "Stewart Brand"
    ],
    "publisher" => "Basic Books",
    "isbn" => '0465007805'
];
$catalog[104] = [
    "title" => "Waking Up: A Guide to Spirituality Without Religion",
    "img" => "img/media/18774981.jpg",
    "genre" => "Non-Fiction",
    "format" => "Audio Book",
    "year" => 2014,
    "category" => "Books",
    "authors" => [
        "Sam Harris"
    ],
    "publisher" => "Simon Schuster",
    "isbn" => '1451636016'
];
//Movies
$catalog[201] = [
    "title" => "2001: A Space Odyssey",
    "img" => "img/media/2001.jpg",
    "genre" => "Science-Fiction",
    "format" => "Digital",
    "year" => 1968,
    "category" => "Movies",
    "director" => "Stanley Kubrick",
    "writers" => [
        "Stanley Kubrick",
        "Arthur C. Clarke"
    ],
    "stars" => [
        "Keir Dullea",
        "Gary Lockwood",
        "William Sylvester"
    ]
];
$catalog[202] = [
    "title" => "The Matrix",
    "img" => "img/media/the_matrix.jpg",
    "genre" => "Action",
    "format" => "DVD",
    "year" => 1999,
    "category" => "Movies",
    "director" => "Mike Judge",
    "writers" => [
        "Lana Wachowski",
        "Lilly Wachowski"
    ],
    "stars" => [
        "Keanu Reeves",
        "Laurence Fishburne",
        "Carrie-Anne Moss"
    ]
];
$catalog[203] = [
    "title" => "The Lord of the Rings: The Fellowship of the Ring",
    "img" => "img/media/lotr.jpg",
    "genre" => "Drama",
    "format" => "Blu-ray",
    "year" => 2001,
    "category" => "Movies",
    "director" => "Peter Jackson",
    "writers" => [
        "J.R.R. Tolkien",
        "Fran Walsh",
        "Philippa Boyens",
        "Peter Jackson"
    ],
    "stars" => [
        "Elijah Woods",
        "Ian McKellan"
    ]
];
$catalog[204] = [
    "title" => "Akira",
    "img" => "img/media/akira.jpg",
    "genre" => "Animation",
    "format" => "VHS",
    "year" => 1988,
    "category" => "Movies",
    "director" => "Katsuhiro Ôtomo",
    "writers" => [
        "Katsuhiro Ôtomo",
        "Izô Hashimoto"
    ],
    "stars" => [
        "Mitsuo Iwata",
        "Nozomu Sasaki",
        "Mami Koyama"
    ]
];
//Music
$catalog[301] = [
    "title" => "Burial",
    "img" => "img/media/burial.jpg",
    "genre" => "Electronic",
    "format" => "CD",
    "year" => 2006,
    "category" => "Music",
    "artist" => "Burial"
];
$catalog[302] = [
    "title" => "Untrue",
    "img" => "img/media/untrue.jpg",
    "genre" => "Electronic",
    "format" => "CD",
    "year" => 2007,
    "category" => "Music",
    "artist" => "Burial"
];
$catalog[303] = [
    "title" => "With U",
    "img" => "img/media/with_u.jpg",
    "genre" => "Electronic",
    "format" => "Vinyl",
    "year" => 2011,
    "category" => "Music",
    "artist" => "Holy Other"
];
$catalog[304] = [
    "title" => "Held",
    "img" => "img/media/held.jpg",
    "genre" => "Electronic",
    "format" => "CD",
    "year" => 2012,
    "category" => "Music",
    "artist" => "Holy Other"
];
$catalog[305] = [
    "title" => "Rival Dealer",
    "img" => "img/media/rival_dealer.jpg",
    "genre" => "Electronic",
    "format" => "CD",
    "year" => 2013,
    "category" => "Music",
    "artist" => "Burial"
];
$catalog[306] = [
    "title" => "Kindred",
    "img" => "img/media/kindred.jpg",
    "genre" => "Electronic",
    "format" => "CD",
    "year" => 2012,
    "category" => "Music",
    "artist" => "Burial"
];
$catalog[307] = [
    "title" => "Street Halo",
    "img" => "img/media/street_halo.jpg",
    "genre" => "Electronic",
    "format" => "CD",
    "year" => 2011,
    "category" => "Music",
    "artist" => "Burial"
];
$catalog[308] = [
    "title" => "Truant/Rough Sleeper",
    "img" => "img/media/truant_rough_sleeper.jpg",
    "genre" => "Electronic",
    "format" => "CD",
    "year" => 2012,
    "category" => "Music",
    "artist" => "Burial"
];
$catalog[309] = [
    "title" => "Tramp",
    "img" => "img/media/tramp.jpg",
    "genre" => "Electronic",
    "format" => "CD",
    "year" => 2011,
    "category" => "Music",
    "artist" => "Volor Flex"
];
$catalog[310] = [
    "title" => "oOoOO",
    "img" => "img/media/ooooo.jpg",
    "genre" => "Electronic",
    "format" => "CD",
    "year" => 2010,
    "category" => "Music",
    "artist" => "oOoOO"
];
$catalog[310] = [
    "title" => "Gold Panda",
    "img" => "img/media/lucky_shiner.jpg",
    "genre" => "Electronic",
    "format" => "CD",
    "year" => 2010,
    "category" => "Music",
    "artist" => "Gold Panda"
];
$catalog[311] = [
    "title" => "Gold Panda",
    "img" => "img/media/companion.jpg",
    "genre" => "Electronic",
    "format" => "CD",
    "year" => 2010,
    "category" => "Music",
    "artist" => "Gold Panda"
];

?>
