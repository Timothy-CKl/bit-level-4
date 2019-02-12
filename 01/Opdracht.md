## Opdracht 01: Superglobal

### In te leveren bestanden
1) `superglobal.php`

### Opdracht
In PHP kun je variabelen vanuit een URL ophalen. Zorg ervoor dat alle variabelen die meegegeven worden als parameters worden geprint.

### Nieuwe Technieken
- Superglobal Variables
- Associative Array

### Output
```bash
$ curl 'localhost:8080/superglobal.php?email=info@bit-academy.nl'
> email: info@bit-academy.nl
$ curl 'localhost:8080/superglobal.php?address=Rosmolen_17&postal_code=3961LH'
> address: Rosmolen 17
> postal_code 3961LH
```

### Notities
Zorg ervoor dat parameters dynamisch worden opgehaald en teruggegeven. Schrijf dus geen code die `email` `address` en `postal_code` ophaalt, maar zorg ervoor dat je elk veld zelf kan meegeven.