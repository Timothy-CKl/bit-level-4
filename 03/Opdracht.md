## Opdracht 04: Sessions & Cookies

### In te leveren bestanden
1. `form.php`
2. `profile.php`

### Opdracht
Sommige data die we vanuit de front-end doorgestuurd krijgen willen we langer onthouden en op meerdere pagina's tonen.
Op de website van de roeivereniging zit ook een profielpagina, en daar wil je de ingevulde data natuurlijk wel weer terug kunnen zien.
In deze opdracht wordt de gebruiker na het inloggen naar de profielpagina gestuurd, waar hij zijn gegevens in kan zien.

Maak in `form.php` weer een HTML form met twee invoervelden: `Naam`, `Leeftijd` en `Wachtwoord`

Zorg ervoor dat wanneer je de form submit de waardes worden opgeslagen in een session. Sla de `Naam` van de gebruiker ook op als een cookie.

Wanneer je op `profile.php` terecht komt wordt er eerst gecheckt of de cookie `Naam` is ingesteld.

Wanneer de cookie niet is ingesteld wordt de tekst "Geen ingelogde gebruiker" getoond.
Wanneer de cookie wel is ingesteld, wordt de informatie uit de sessie opgehaald en getoond op de pagina.

### Nieuwe Technieken
- PHP Session Variables
- Cookies
- PHP Redirect
