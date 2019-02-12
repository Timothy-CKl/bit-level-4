## Opdracht 02: HTTP Authenticatie

### In te leveren bestanden
1) `http_auth.php`

### Opdracht
Maak een pagina waarmee je moet inloggen op het niveai van het HTTP protocol. Zorg dat als je inlogt met de gebruikersnaam `herman` en wachtwoord `mylittlepony` dat je wordt begroet. Als iemand die geen toegang heeft tot de pagina in probeert te breken, weergeef dan een foutmelding.
 
### Nieuwe Technieken
- HTTP Authentication 
 
### Output
```bash
$ curl --user herman:mylittlepony 'localhost:8080/http_auth.php'
<html><body>
Hello Herman<br />
</body></html>
$ curl --user hackerman:welkom01 'localhost:8080/http_auth.php'
<html><body>
Access Denied<br />
</body></html>
```