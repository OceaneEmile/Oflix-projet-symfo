<?php

namespace App\DataFixtures\Provider;

class OflixProvider
{
    // Tableau de 300 films
    private $movies = [
        // 0
        'Detachment',
        // 1
        'Horrible Bosses 2',
        // 2
        'Death of a Salesman',
        'Intermission',
        'October Sky',
        'Blackfish',
        'Hotel Transylvania',
        'Moon',
        'Les Choristes',
        'Interstellar',
        'The Strangers',
        'The Godfather',
        'Pulp Fiction',
        'The Fault in Our Stars (2014)',
        'Ferris Bueller\'s Day Off',
        'Primal Fear',
        'American Beauty',
        'Crash',
        'Chronicle',
        'The Spiderwick Chronicles',
        'Andre',
        'Edge of Tomorrow (2014)',
        'Hours',
        'Dawn of the Planet of the Apes',
        'Nurse Betty',
        'Bridget Jones\'s Diary',
        'Turbo',
        'Ocean\'s Eleven',
        'Sliding Doors',
        'Pleasantville',
        'Jurassic Park',
        'The Mummy',
        'The Fantastic Four',
        'Spider-Man',
        'Spider-Man 2',
        'The Day After Tomorrow',
        'I, Robot',
        'Mr. & Mrs. Smith',
        'Iron Man',
        'Spider-Man 3',
        'Changeling',
        '2012',
        'Scent of a Woman',
        'Lucy',
        'Argo',
        'Step Up',
        'A Million Ways to Die in the West (2014)',
        'Ted',
        'My Girl',
        'Maleficent',
        'Jump Street (2014)',
        'Boyhood',
        'Little Miss Sunshine',
        'Billy Elliot',
        'In the Name of the Father',
        'The Purge',
        'The Spectacular Now',
        'The Aviator',
        'Pretty in Pink',
        'Road to Perdition',
        'Hancock',
        'Jeff, Who Lives at Home',
        'The Usual Suspects',
        'The Family (2013)',
        'The Departed',
        'Bad Neighbours',
        'The Silence of the Lambs',
        'Calamity Jane',
        'Saving Mr. Banks',
        'The Inbetweeners 2',
        'My Dog Skip',
        'The Cabin in the Woods',
        'Paranormal Activity',
        'Monster-in-Law',
        'She\'s the Man',
        'John Tucker Must Die',
        'Valentine\'s Day',
        'The House Bunny',
        'Bride Wars',
        'Confessions of a Shopaholic',
        'Dresses',
        'The Talented Mr. Ripley',
        'Ripley\'s Game',
        'Equilibrium',
        'One Hour Photo',
        'No Country for Old Men',
        'Labour Pains',
        'The Switch',
        'War Horse',
        'Good Will Hunting',
        'Frozen',
        'Bad Boys',
        'Frozen (2010)',
        'Minutes or Less',
        'The Cider House Rules (1999)',
        'Dallas Buyers Club',
        'Blue Is the Warmest Color',
        'When Harry Met Sally...',
        'Sixteen Candles',
        'Family Guy Presents Stewie Griffin: The Untold Story',
        'Silver Linings Playbook',
        'Philadelphia',
        'Big',
        'Mr. Bean\'s Holiday',
        'Beauty and the Beast - Beauty and the Beast',
        'Peter Pan',
        'Hook',
        'Mrs. Doubtfire',
        'Mrs.Brown\'s Boys D\'Movie',
        'The Little Rascals',
        'The Little Mermaid',
        'Richie Rich',
        'The Hunchback of Notre Dame',
        'Bean',
        'Doctor Dolittle',
        'The Parent Trap',
        'The Princess Diaries',
        'The Princess Diaries 2: Royal Engagement',
        'Daddy Day Care',
        'Ella Enchanted',
        'Garfield',
        'Garfield 2',
        'The Pacifier',
        'Enchanted',
        'Marley & Me',
        'Diary of a Wimpy Kid',
        'The Social Network',
        'Diary of a Wimpy Kid: Rodrick Rules',
        'The Naked Gun: From the Files of Police Squad!',
        'Aquamarine',
        'Epic Movie',
        'The Hunger Games: Mockingjay - Part 1',
        'The Hobbit: An Unexpected Journey',
        'Maze Runner',
        'Fury (2014)',
        'Guardians of the Galaxy',
        'Gone Girl',
        'The Imitation Game',
        'Step Up 2: The Streets',
        'St. Trinian\'s',
        'Wild Child',
        'Last Vegas',
        'The Green Mile',
        'Sleepless in Seattle',
        'The Wolf of Wall Street',
        'The Grey',
        'Cloudy with a Chance of Meatballs 2',
        'Robot & Frank',
        'Good Morning, Vietnam',
        'Dead Poets Society',
        'Robots',
        'What Dreams May Come',
        'The Lego Movie',
        'I Am Legend',
        'Seven Pounds',
        'I Am Number Four',
        'Cloverfield',
        'What Women Want',
        'The Cable Guy',
        'Penelope',
        'The Invention of Lying',
        'My Sisters Keeper',
        'The Inbetweeners Movie',
        'Twilight',
        'X-Men',
        'The Twilight Saga: Breaking Dawn - Part 2',
        'The Twilight Saga: Breaking Dawn - Part 1',
        'The Twilight Saga: New Moon',
        'The Twilight Saga: Eclipse',
        'Ondine',
        'Snow White and the Huntsman',
        'Brave',
        'The Lovely Bones',
        'The Grand Budapest Hotel (2014)',
        'The Best Exotic Marigold Hotel',
        'The Dictator',
        'Borat: Cultural Learnings of America for Make Benefit Glorious Nation of Kazakhstan',
        'Crazy, Stupid, Love.',
        'The Year Old Virgin',
        'The Prestige',
        'Shark Tale',
        'Cloud Atlas',
        'Philomena',
        'Waynes World',
        'Austin Powers: International Man of Mystery',
        'Shrek',
        'The Love Guru',
        'You\'ve Got Mail',
        'Back to the Future',
        'Scrooged',
        'Honey, I Shrunk the Kids',
        'A Christmas Carol',
        'Drop Dead Fred',
        'Honey, I Blew Up the Kid',
        'The Santa Clause',
        'The Santa Clause 2',
        'Fred Claus',
        'Christmas with the Kranks',
        'Matilda',
        'The Borrowers',
        'Chicken Run',
        'Chicken Little',
        'Small Soldiers',
        'Gremlins',
        'Stuart Little',
        'Spy Kids',
        'Agent Cody Banks',
        'Shallow Hal',
        'Cars',
        'Cars 2',
        'Freaky Friday',
        'Pirates of the Caribbean: Dead Man\'s Chest',
        'The Notebook',
        'Charlie and the Chocolate Factory',
        'Ratatouille',
        'Monster House',
        'Click',
        'Meet the Fockers',
        'Meet the Robinsons',
        'Meet the Parents',
        'Toy Story',
        'Toy Story 2',
        'Toy Story 3',
        'Nanny McPhee',
        'nims island',
        'Charlotte\'s Web',
        'Babe',
        'Barnyard',
        'Get Smart',
        'The Tooth Fairy',
        'Schindler\'s List',
        'Forrest Gump',
        'Mean Girls',
        'Stand by Me',
        'The Breakfast Club',
        'Hotel Rwanda',
        'Pitch Perfect (2012)',
        'Planet of the Apes',
        'The Kings of Summer',
        'Almost Famous',
        'Jackass: The Movie',
        'Along Came Polly',
        'The Jungle Book',
        'Into the Wild',
        'Zoolander',
        'Days Later',
        'Shutter Island',
        'Captain Philips',
        'First Dates',
        '50/50',
        'The Lion King',
        'les miserables',
        'Tangled',
        'Zombieland',
        'We\'re the Millers',
        'Monsters, Inc.',
        'Monsters University',
        'Easy A',
        'The Help',
        'Gravity',
        'Cast Away',
        'Wreck It Ralph',
        'The Heat',
        'The Shawshank Redemption',
        'Jump Street',
        'The Goonies',
        'The Curse of the Were-Rabbit',
        'How to Train Your Dragon (2010)',
        'Taken',
        'Accepted',
        'The Curious Case of Benjamin Button',
        'The Time Traveler\'s Wife',
        'The Boy in the Striped Pyjamas',
        'A Bronx Tale',
        'Big Daddy',
        'Madagascar',
        'Bee Movie',
        'Catch Me If You Can',
        'E.T. the Extra-Terrestrial',
        'Chocolat',
        'Airplane!',
        'The Beach',
        'The Simpsons Movie',
        'James and the Giant Peach',
        'Romeo + Juliet',
        'Blades of Glory',
        'To Kill a Mockingbird',
        'Saving Private Ryan',
        'Dumb & Dumber',
        'Titanic',
        'Men in Black',
        'Men in Black II',
        'A Bug\'s Life',
        'Punch-Drunk Love',
        'Bruce Almighty',
        'Anchorman: TheName Legend of Ron Burgundy (2004)',
        'V for Vendetta',
        'Superbad',
        'Gattaca',
        'Gone Baby Gone',
        'The Vow',
        'The Pursuit of Happyness',
        'Edward Scissorhands',
        'Theres Something about Mary',
        'I Now Pronounce You Chuck & Larry',
        'Over the Hedge',
        'Bolt',
        'Flushed Away',
        'A.I. Artificial Intelligence',
        'Employee of the Month',
        'Love Stinks',
        'Step Brothers',
        'American Hustle',
        'Fargo',
        'Gran Torino',
        'Home Alone',
        'The Dark Knight',
        'Shrek 2',
        'Tropic Thunder',
        'About Time',
        'Me, Myself & Irene',
        'Just Friends',
        'The Benchwarmers',
        'Drillbit Taylor',
        'Due Date',
        'Seeking a Friend for the End of the World',
        '& Over',
        'Safe Haven',
        'The Truman Show',
        'The Adjustment Bureau',
        'Youth in Revolt',
        '21',
        '300',
        'Yes Man',
        'My Best Friend\'s Girl',
        'Arthur Christmas',
        'Bridesmaids',
        'Warrior',
        'Kung Fu Panda',
        'Night at the Museum',
        'You, Me and Dupree',
        'Cyberbully',
        'Hot Rod',
        'In Time',
        'WALL·E',
        'I Love You, Man',
        'How the Grinch Stole Christmas',
        'Avatar',
        'Man on a Ledge',
        'Never Been Kissed',
        'Paul',
        'Divergent',
    ];

    // Tableau de 80 genres
    private $genres = [
        'Americana',
        'Art vidéo',
        'Buddy movie',
        'Chanbara',
        'Chronique',
        'Cinéma amateur',
        'Cinéma d\'auteur',
        'Cinéma de montagne',
        'Cinéma expérimental',
        'Cinéma abstrait',
        'Cinéma structurel',
        'Cinéma underground',
        'Found footage',
        'Comédie',
        'Burlesque',
        'Comédie de mœurs',
        'Comédie dramatique',
        'Comédie policière',
        'Comédie romantique',
        'Parodie',
        'Screwball comedy',
        'Documentaire',
        'Cinéma ethnographique',
        'Cinéma d\'observation',
        'Cinéma vérité',
        'Cinéma direct',
        'Docufiction',
        'Ethnofiction',
        'Essai cinématographique',
        'Film d\'archives',
        'Journal filmé',
        'Portrait',
        'Cinéma surréaliste',
        'Drame',
        'Mélodrame',
        'Docudrama',
        'Film à sketches',
        'Film à suspense',
        'Film d\'action',
        'Film d\'aventures',
        'Film de cape et d\'épée',
        'Film catastrophe',
        'Film érotique',
        'Film d\'espionnage',
        'Film d\'exploitation',
        'Film fantastique',
        'Film de vampires',
        'Film de zombies',
        'Film de guerre',
        'Film de guérilla',
        'Film historique',
        'Film biographique',
        'Film autobiographique',
        'Film institutionnel',
        'Film de mariage',
        'Film publicitaire',
        'Film d\'entreprise',
        'Film de propagande',
        'Film d\'horreur',
        'Slasher',
        'Film de super-héros',
        'Film musical',
        'Film policier',
        'Film de gangsters',
        'Film noir',
        'Film d\'opéra',
        'Film pornographique',
        'Teen movie',
        'Ken Geki',
        'Masala',
        'Road movie',
        'Film d\'amour',
        'Péplum',
        'Science-fiction',
        'Sérial',
        'Thriller',
        'Troma',
        'Western',
    ];

    /**
     * Retourne un film au hasard
     *
     * @return void
     */
    public function movie_rand()
    {
        // Genere un nombre au hasard entre 0 et et 299 (car 300 films)
        $rand = rand(0, 299);
        // Retourne le film qui a pour index la valeur random
        return $this->movies[$rand];
    }

    /**
     * Retourne un genre au hasard
     *
     * @return void
     */
    public function genre_rand()
    {
        // Genere un nombre au hasard entre 0 et et 79 (car 80 genres)
        $rand = rand(0, 79);
        // Retourne le film qui a pour index la valeur random
        return $this->genres[$rand];
    }
}