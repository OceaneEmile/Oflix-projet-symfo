# Routes de l'application

| URL | Méthode HTTP | Contrôleur       | Méthode | Titre HTML           | Commentaire    |
| --- | ------------ | ---------------- | ------- | -------------------- | -------------- |
| `/back` | ``        | `MainController` | `home`  | Bienvenue sur O'flix | Page d'accueil |
| `/back/movie` | ``        | `MovieController` | `browse_movie`|  |  Affiche tous les films |
| `show/{id}` | ``        | `MovieController` | `show_movie`  |  | Affiche un film via son id |
| `/create` | ``        | `MovieController` | `home`  | | Crée un film via un formulaire dans le backoffice |
| `edit/{id}` | ``        | `MovieController` | `edit_movie`  | | Modifie un film via son id |
| `/remove/{id}` | ``        | `MovieController` | `edit_movie`  | | Supprime un film via son id dans le formulaire du backoffice |
| `/` | `GET`        | `UserController` | `app_back_user_index`  | | Page d'accueil |
| `/new` | `GET`  , `POST`;      | `UserController` | `app_back_user_new'`  | | Creation utilisateur |
| `/{id}` | `GET` ;      | `UserController` | `back_user_show'`  | | Utilisateur |
| `/{id}/edit` | `GET`  , `POST`;      | `UserController` | `app_back_user_edit`  | | Modification utilisateur |
| `/{id}` | `¨POST` ;      | `UserController` | `app_back_user_delete'`  | | Supprimer Utilisateur |
