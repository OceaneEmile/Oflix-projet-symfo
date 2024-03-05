<?php

namespace App\DataFixtures;

use DateTime;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Genre;
use App\Entity\Movie;
use App\Entity\Person;
use App\Entity\Season;
use App\Entity\Casting;
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
        $faker = Factory::create('fr_FR');
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
        // Create 100 personnes (acteurs)
        for ($i = 0; $i < 100; $i++) {
         $person = new Person();
        $person->setFirstname($faker->firstName()); // Je définis un prenom fake grace a faker
        $person->setLastname($faker->lastName()); // Je définis un nom fake grace a faker
        $personList[] = $person; // Je rajoute l'objet $person a mon tableau (je sauvegarde tous les acteurs car j'en aurai besoin plus tard)
        $manager->persist($person); // Enregistre l'objet $person
                }

        // Create 20 movies
        for ($i = 0; $i < 20; $i++) {
            $movie = new Movie();
            // generate a random movie title from provider file
            $movie->setTitle($provider->movie_rand());
            $movie->setDuration(50);
            $movie->setReleaseDate(new DateTime()); 
            $movie->setType($faker->randomElement(['Film', 'Série']));
            $movie->setPoster('https://fr.web.img4.acsta.net/pictures/22/05/18/14/31/5186184.jpg');
            $movie->setRating($faker->randomFloat(1, 0, 5));
            $movie->setSummary($faker->realText(200)); // Genere un text de 200 caracteres
            $movie->setSynopsis($faker->realText(500)); // Genere un text de 500 caracteres
            // On associe 2 genres au film
            $movie->addGenre($genreList[rand(0,4)]);
            $movie->addGenre($genreList[rand(5,9)]);
            // On va associer une saison à $movie SEULEMENT SI $movie est une série
            if ($movie->getType() === "Série") {
                $season = new Season(); // Je créer une instance de Season
                $season->setNumber(rand(0, 5)); // Je définis un numero de saison
                $season->setEpisodesNumber(rand(5,12)); // Je définis un nombre d'épisodes
                $season->setMovie($movie); // J'associe $season à $movie
                $manager->persist($season); // On enregistre $season
            }
            // On va ajouter des castings au film (on va ajouter des roles interpetés par des acteurs dans ce film)
            // Je veux ajouter 10 role a mon film
            for ($c = 0; $c <= 10; $c++) {
                $casting = new Casting(); // Je créer une instance de l'entité Casting
                $casting->setRole($faker->name()); // Je définis un role interprété
                $casting->setCreditOrder($c + 1); // Je définis le creditOrder (l'ordre d'importance d'un personnage dans un film)
                $casting->setMovie($movie); // J'associe le film $movie au casting
                // Fonctionne aussi comme ca
                //$movie->addCasting($casting);// J'associe le $casting au $movie
                $casting->setPerson($personList[rand(0,99)]); // J'associe le casting a un acteur au hasard
                $manager->persist($casting); // On enregistre $casting
            }
            $manager->persist($movie);
        }

            $user = new User(); // On créer l'user
            $user->setEmail("admin@admin.fr"); // On lui donne un email
            $user->setRoles(['ROLE_ADMIN']); // On donne le role admin a cet user
            $user->setPassword(password_hash("okokok",PASSWORD_BCRYPT));
            $manager->persist($user); // On persis
            // 2eme : utilisateur manager
            $user = new User(); // On créer l'user
            $user->setEmail("manager@manager.fr"); // On lui donne un email
            $user->setRoles(['ROLE_MANAGER']); // On donne le role manager a cet user
            $user->setPassword(password_hash("okokok",PASSWORD_BCRYPT));
            $manager->persist($user); // On persis
            // 3eme : utilisateur user (classique)
            $user = new User(); // On créer l'user
            $user->setEmail("user@user.fr"); // On lui donne un email
            $user->setRoles(['ROLE_USER']); // On donne le role user a cet user
            $user->setPassword(password_hash("okokok",PASSWORD_BCRYPT));
            $manager->persist($user); // On persis
            $manager->flush(); // On envoie tout en base de données

    }
}