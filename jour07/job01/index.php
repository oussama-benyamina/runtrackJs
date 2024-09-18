<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site Materialize</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="index.html">Inscription</a></li>
                    <li><a href="index.html">Connexion</a></li>
                    <li><a href="index.html">Rechercher</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <form>
                <div>
                    <label>
                        <input name="civilite" type="radio" value="m" />
                        <span>M.</span>
                    </label>
                    <label>
                        <input name="civilite" type="radio" value="mme" />
                        <span>Mme</span>
                    </label>
                </div>
                <div>
                    <input type="text" placeholder="Prénom" />
                </div>
                <div>
                    <input type="text" placeholder="Nom" />
                </div>
                <div>
                    <input type="text" placeholder="Adresse" />
                </div>
                <div>
                    <input type="email" placeholder="Email" />
                </div>
                <div>
                    <input type="password" placeholder="Mot de passe" />
                </div>
                <div>
                    <input type="password" placeholder="Confirmer le mot de passe" />
                </div>
                <div>
                    <label>
                        <input type="checkbox" />
                        <span>Informatique</span>
                    </label>
                    <label>
                        <input type="checkbox" />
                        <span>Voyages</span>
                    </label>
                    <label>
                        <input type="checkbox" />
                        <span>Sport</span>
                    </label>
                    <label>
                        <input type="checkbox" />
                        <span>Lecture</span>
                    </label>
                </div>
                <button type="submit">Valider</button>
            </form>
        </section>
    </main>

    <footer>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="index.html">Inscription</a></li>
            <li><a href="index.html">Connexion</a></li>
            <li><a href="index.html">Rechercher</a></li>
        </ul>
    </footer>
</body>
</html>