---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Méthode pour se connecter


<!-- START_5ef90dd4846f0d2902b89354bf5c42bb -->
## Pour se connecter il faut un login et un mot de passe

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth`


<!-- END_5ef90dd4846f0d2902b89354bf5c42bb -->

#Permet de récupérer les salles réservées


<!-- START_25ad394b19ea7e22b5e91a87863383fb -->
## En fonction de la ligue connectée via son id

> Example request:

```bash
curl -X POST \
    "http://localhost/api/league/resa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/league/resa"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/league/resa`


<!-- END_25ad394b19ea7e22b5e91a87863383fb -->

#Récupération de la ligue en fonction de l'id


<!-- START_22aae0bc6304083b094da7863b0411ae -->
## On récupère le libelle de la ligue

> Example request:

```bash
curl -X POST \
    "http://localhost/api/league" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/league"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/league`


<!-- END_22aae0bc6304083b094da7863b0411ae -->

#Récupération des salles


<!-- START_a5d29eb43d586a64a96cecb815c78a92 -->
## api/halls
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/halls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/halls"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resultCode": "OK",
    "statusCode": "200",
    "body": [
        {
            "id": 1,
            "libelle": "Daum",
            "nbPlaces": 40,
            "digicode": 123456,
            "dimension": 150,
            "description": "Salle de sport rectangulaire et lumineuse. Idéale pour les sports de combat au sol.\n\nMatériel fourni : 10 tables \/ 45 chaises \/ 3 ordinateurs \/ 1 vidéo projecteur \/ 1 kit de son \/ 20 tapis",
            "adresse": "55  rue des Coudriers, 68100 Mulhouse",
            "photo_id": 1,
            "photo": {
                "id": 1,
                "photoSalle": "Images\/Daum.jpg"
            }
        },
        {
            "id": 2,
            "libelle": "Corbin",
            "nbPlaces": 30,
            "digicode": 432567,
            "dimension": 70,
            "description": "Salle de réunion. Equipée d'un vidéo projecteur. Peut également servir de salle de repas lors d'une manifestation sportive.\n\nMatériel fourni : 5 tables \/ 30 chaises \/ 2 bancs",
            "adresse": "55  rue des Coudriers, 44000 Nantes",
            "photo_id": 2,
            "photo": {
                "id": 2,
                "photoSalle": "Images\/Corbin.jpg"
            }
        },
        {
            "id": 3,
            "libelle": "Baccarat",
            "nbPlaces": 50,
            "digicode": 765457,
            "dimension": 100,
            "description": "Salle de réunion. Peut servir de salle de réception cocktail. Salle climatisée.\n\nMatériel fourni : ambiance musicale \/ 20 mini tables \/ 60 chaises",
            "adresse": "118  rue Isambard, 83600 Fréjus",
            "photo_id": 3,
            "photo": {
                "id": 3,
                "photoSalle": "Images\/Baccarat.jpg"
            }
        },
        {
            "id": 4,
            "libelle": "Longwy",
            "nbPlaces": 30,
            "digicode": 123390,
            "dimension": 70,
            "description": "Salle fonctionnelle idéale pour présentation audovisuelle. Salle peu lumineuse.\n\nMatériel fourni : sonorisation \/ 1 vidéo projecteur \/ 40 chaises",
            "adresse": "50  place Stanislas, 54000 Nancy",
            "photo_id": 4,
            "photo": {
                "id": 4,
                "photoSalle": "Images\/Longwy.jpg"
            }
        },
        {
            "id": 5,
            "libelle": "Multimédia",
            "nbPlaces": 20,
            "digicode": 342987,
            "dimension": 50,
            "description": "Salle fonctionnelle idéale pour présentation audovisuelle. Cadre chaleureux.\n\nMatériel fourni : 1 vidéo projecteur \/ 25 chaises \/ 10 tables \/ grand écran tv \/ ordinateur \/ barre de son",
            "adresse": "82  rue Bonneterie, 13140 Miramas",
            "photo_id": 5,
            "photo": {
                "id": 5,
                "photoSalle": "Images\/Multimedia.jpg"
            }
        },
        {
            "id": 6,
            "libelle": "Amphithéâtre",
            "nbPlaces": 150,
            "digicode": 346292,
            "dimension": 300,
            "description": "Salle idéale pour des assemblées générales.\n\nMatériel fourni : ordinateur \/ 1 vidéo projecteur -> écran type cinéma \/ 1 scène",
            "adresse": "124  Rue Roussy, 45000 Orléans",
            "photo_id": 6,
            "photo": {
                "id": 6,
                "photoSalle": "Images\/Amphitheatre.jpg"
            }
        },
        {
            "id": 7,
            "libelle": "Lamour",
            "nbPlaces": 150,
            "digicode": 452099,
            "dimension": 300,
            "description": "Salle de sport idéale pour les sports de raquettes\n\nMatériel fourni : sonorisation \/ 1 vidéo projecteur \/ filet à disposition ainsi que des raquettes",
            "adresse": "19  place de Miremont, 77270 Villeparisis",
            "photo_id": 7,
            "photo": {
                "id": 7,
                "photoSalle": "Images\/Lamour.jpg"
            }
        },
        {
            "id": 8,
            "libelle": "Grüber",
            "nbPlaces": 20,
            "digicode": 654398,
            "dimension": 40,
            "description": "Petite salle de réunion, pour petit comité. Vue agréable sur le parc.\n\nMatériel fourni : 1 ordinateur \/ 20 chaises \/ cuisine aménagée",
            "adresse": "51  rue du Général Ailleret, 97142 Les Abymes",
            "photo_id": 8,
            "photo": {
                "id": 8,
                "photoSalle": "Images\/Gruber.jpg"
            }
        },
        {
            "id": 9,
            "libelle": "Majorelle",
            "nbPlaces": 50,
            "digicode": 873245,
            "dimension": 100,
            "description": "Salle de réunion \/ présentation audiovisuelle fonctionnelle, agréable et lumineuse.\n\nMatériel fourni : sonorisation \/ 1 vidéo projecteur \/ 50 chaises \/ vidéo projecteur",
            "adresse": "117  Rue de Strasbourg, 93390 Clichy-Sous-Bois",
            "photo_id": 9,
            "photo": {
                "id": 9,
                "photoSalle": "Images\/Majorelle.jpg"
            }
        },
        {
            "id": 10,
            "libelle": "Galerie",
            "nbPlaces": 120,
            "digicode": 725372,
            "dimension": 300,
            "description": "Salle des fêtes avec cuisine intégrée.\n\nMatériel fourni : estrade pour animation ou orchestre \/ 130 chaises \/ 30 tables \/ vestiaire",
            "adresse": "67  rue Gontier-Patin, 80100 Abbeville",
            "photo_id": 10,
            "photo": {
                "id": 10,
                "photoSalle": "Images\/Galerie.jpg"
            }
        },
        {
            "id": 11,
            "libelle": "Salle informatique",
            "nbPlaces": 16,
            "digicode": 236567,
            "dimension": 40,
            "description": "Salle de formation.\n\nMatériel fourni : 16 postes de travail \/ imprimante \/ 16 chaises",
            "adresse": "9  rue du Château, 78100 Saint-Germain-En-Laye",
            "photo_id": 11,
            "photo": {
                "id": 11,
                "photoSalle": "Images\/Informatique.jpg"
            }
        },
        {
            "id": 12,
            "libelle": "Salle de restauration",
            "nbPlaces": 40,
            "digicode": 876545,
            "dimension": 70,
            "description": "Salle de réception atypique et chaleureuse.\n\nMatériel fourni : sonorisation \/ estrade \/ ordinateur \/ micro \/ 45 chaises \/ 10 tables",
            "adresse": "9  rue Michel Ange, 97232 Le Lamentin",
            "photo_id": 16,
            "photo": {
                "id": 16,
                "photoSalle": "Images\/Restauration.jpg"
            }
        },
        {
            "id": 13,
            "libelle": "Hall d'accueil",
            "nbPlaces": 100,
            "digicode": 762545,
            "dimension": 200,
            "description": "Salle de réception, idéale pour cocktail dinatoire. Piste de danse.\n\nMatériel fourni : sonorisation \/ 110 chaises \/ 30 tables \/ estrade \/ 5 canapés",
            "adresse": "64  avenue de Provence, 56000 Bretagne",
            "photo_id": 17,
            "photo": {
                "id": 17,
                "photoSalle": "Images\/HallAccueil.jpg"
            }
        },
        {
            "id": 14,
            "libelle": "Gallé",
            "nbPlaces": 12,
            "digicode": 742420,
            "dimension": 30,
            "description": "Salle de réunion pour petit comité.\n\nMatériel fourni : télévision 120 cm \/ paper board \/ 15 chaises \/ 1 grande table",
            "adresse": "139  rue de la République, 69002 Lyon",
            "photo_id": 18,
            "photo": {
                "id": 18,
                "photoSalle": "Images\/Galle.jpg"
            }
        }
    ]
}
```

### HTTP Request
`GET api/halls`


<!-- END_a5d29eb43d586a64a96cecb815c78a92 -->

#Réservations de salles


<!-- START_87c1deb1ba338488dffce9949771bf55 -->
## Pour créer une salle il faut renseigner :

- Une date
- Une salle
- Quelle salle est réservée
- Par quelle ligue la salle est réservée

> Example request:

```bash
curl -X POST \
    "http://localhost/api/makeReservation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/makeReservation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/makeReservation`


<!-- END_87c1deb1ba338488dffce9949771bf55 -->


