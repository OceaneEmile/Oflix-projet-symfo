<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Genre;
use App\Entity\Movie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\DataFixtures\Provider\OflixProvider;

class AppFixtures extends Fixture
{
    /**
     * 
     * 
     *
     * @param ObjectManager $manager
     * @return void
     */
    public function load(ObjectManager $manager): void
    {
        // Instanciation de la classe OflixProvider
        $provider = new OflixProvider();

        // Create an array
        $genreList = [];
        // Create 10 genres
        for ($i = 0; $i < 10; $i++) {
            $genre = new Genre();
            $genre->setName($provider->genre_rand());
            $genreList[] = $genre; // Je rajoute l'objet $genre a mon tableau
            $manager->persist($genre);
        }

        // Create 20 movies
        for ($i = 0; $i < 20; $i++) {
            $movie = new Movie();
            // generate a random movie title from provider file
            $movie->setTitle($provider->movie_rand());
            $movie->setDuration(50);
            $movie->setReleaseDate(new DateTime()); 
            $movie->setType('Film');
            $movie->setPoster('https://fr.web.img4.acsta.net/pictures/22/05/18/14/31/5186184.jpg');
            $movie->setRating(4.2);
            $movie->setSummary('1983, à Hawkins dans l\'Indiana. Après la disparition d\'un garçon de 12 ans dans des circonstances mystérieuses, la petite ville du Midwest est témoin d\'étranges phénomènes.');
            $movie->setSynopsis('A Hawkins, en 1983 dans l\'Indiana. Lorsque Will Byers disparaît de son domicile, ses amis se lancent dans une recherche semée d’embûches pour le retrouver. Dans leur quête de réponses, les garçons rencontrent une étrange jeune fille en fuite. Les garçons se lient d\'amitié avec la demoiselle tatouée du chiffre "11" sur son poignet et au crâne rasé et découvrent petit à petit les détails sur son inquiétante situation. Elle est peut-être la clé de tous les mystères qui se cachent dans cette petite ville en apparence tranquille…');
            // 2 genres for each movie
            $movie->addGenre($genreList[rand(0,4)]);
            $movie->addGenre($genreList[rand(5,9)]);
            $manager->persist($movie);
        }
        $manager->flush();
    }
}