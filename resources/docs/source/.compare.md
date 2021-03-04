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

#general


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

<!-- START_4849c540b3a1e8f7c7bdc140838b91c9 -->
## api/allBookings/{ligueId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/allBookings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/allBookings/1"
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
            "id": 3523,
            "date": "2015-05-08",
            "heureDebut": "17:00:00",
            "heureFin": "19:30:00",
            "salle_id": 12,
            "ligue_id": 1
        },
        {
            "id": 3494,
            "date": "2015-05-04",
            "heureDebut": "09:00:00",
            "heureFin": "10:30:00",
            "salle_id": 4,
            "ligue_id": 1
        },
        {
            "id": 3478,
            "date": "2015-05-02",
            "heureDebut": "10:00:00",
            "heureFin": "12:00:00",
            "salle_id": 7,
            "ligue_id": 1
        },
        {
            "id": 3382,
            "date": "2015-04-21",
            "heureDebut": "16:00:00",
            "heureFin": "20:30:00",
            "salle_id": 14,
            "ligue_id": 1
        },
        {
            "id": 3377,
            "date": "2015-04-20",
            "heureDebut": "16:00:00",
            "heureFin": "16:30:00",
            "salle_id": 10,
            "ligue_id": 1
        },
        {
            "id": 3204,
            "date": "2015-04-04",
            "heureDebut": "09:30:00",
            "heureFin": "20:30:00",
            "salle_id": 6,
            "ligue_id": 1
        },
        {
            "id": 3173,
            "date": "2015-04-02",
            "heureDebut": "11:00:00",
            "heureFin": "18:30:00",
            "salle_id": 8,
            "ligue_id": 1
        },
        {
            "id": 3002,
            "date": "2015-03-19",
            "heureDebut": "21:00:00",
            "heureFin": "21:30:00",
            "salle_id": 10,
            "ligue_id": 1
        },
        {
            "id": 2967,
            "date": "2015-03-16",
            "heureDebut": "10:00:00",
            "heureFin": "17:00:00",
            "salle_id": 9,
            "ligue_id": 1
        },
        {
            "id": 2904,
            "date": "2015-03-12",
            "heureDebut": "18:00:00",
            "heureFin": "20:30:00",
            "salle_id": 4,
            "ligue_id": 1
        },
        {
            "id": 2499,
            "date": "2015-02-15",
            "heureDebut": "11:00:00",
            "heureFin": "13:00:00",
            "salle_id": 13,
            "ligue_id": 1
        },
        {
            "id": 2490,
            "date": "2015-02-15",
            "heureDebut": "18:00:00",
            "heureFin": "20:00:00",
            "salle_id": 10,
            "ligue_id": 1
        },
        {
            "id": 2346,
            "date": "2015-02-07",
            "heureDebut": "20:30:00",
            "heureFin": "21:00:00",
            "salle_id": 1,
            "ligue_id": 1
        },
        {
            "id": 2251,
            "date": "2015-02-02",
            "heureDebut": "17:00:00",
            "heureFin": "18:00:00",
            "salle_id": 7,
            "ligue_id": 1
        },
        {
            "id": 2190,
            "date": "2015-01-30",
            "heureDebut": "20:30:00",
            "heureFin": "21:00:00",
            "salle_id": 1,
            "ligue_id": 1
        },
        {
            "id": 1799,
            "date": "2015-01-11",
            "heureDebut": "16:00:00",
            "heureFin": "20:00:00",
            "salle_id": 12,
            "ligue_id": 1
        },
        {
            "id": 1706,
            "date": "2015-01-06",
            "heureDebut": "17:30:00",
            "heureFin": "18:00:00",
            "salle_id": 10,
            "ligue_id": 1
        },
        {
            "id": 1549,
            "date": "2014-12-30",
            "heureDebut": "13:00:00",
            "heureFin": "14:30:00",
            "salle_id": 12,
            "ligue_id": 1
        },
        {
            "id": 1479,
            "date": "2014-12-28",
            "heureDebut": "18:00:00",
            "heureFin": "19:00:00",
            "salle_id": 1,
            "ligue_id": 1
        },
        {
            "id": 1437,
            "date": "2014-12-26",
            "heureDebut": "12:00:00",
            "heureFin": "18:00:00",
            "salle_id": 10,
            "ligue_id": 1
        },
        {
            "id": 1431,
            "date": "2014-12-26",
            "heureDebut": "14:00:00",
            "heureFin": "21:00:00",
            "salle_id": 2,
            "ligue_id": 1
        },
        {
            "id": 1226,
            "date": "2014-12-17",
            "heureDebut": "21:00:00",
            "heureFin": "21:30:00",
            "salle_id": 11,
            "ligue_id": 1
        },
        {
            "id": 1193,
            "date": "2014-12-15",
            "heureDebut": "20:00:00",
            "heureFin": "20:30:00",
            "salle_id": 9,
            "ligue_id": 1
        },
        {
            "id": 1014,
            "date": "2014-12-08",
            "heureDebut": "13:00:00",
            "heureFin": "14:00:00",
            "salle_id": 4,
            "ligue_id": 1
        },
        {
            "id": 980,
            "date": "2014-12-07",
            "heureDebut": "12:00:00",
            "heureFin": "20:00:00",
            "salle_id": 11,
            "ligue_id": 1
        },
        {
            "id": 531,
            "date": "2014-11-22",
            "heureDebut": "12:30:00",
            "heureFin": "19:30:00",
            "salle_id": 1,
            "ligue_id": 1
        },
        {
            "id": 532,
            "date": "2014-11-22",
            "heureDebut": "16:30:00",
            "heureFin": "18:30:00",
            "salle_id": 8,
            "ligue_id": 1
        },
        {
            "id": 541,
            "date": "2014-11-22",
            "heureDebut": "17:30:00",
            "heureFin": "20:00:00",
            "salle_id": 9,
            "ligue_id": 1
        },
        {
            "id": 491,
            "date": "2014-11-21",
            "heureDebut": "11:00:00",
            "heureFin": "14:00:00",
            "salle_id": 7,
            "ligue_id": 1
        },
        {
            "id": 459,
            "date": "2014-11-19",
            "heureDebut": "09:00:00",
            "heureFin": "09:30:00",
            "salle_id": 9,
            "ligue_id": 1
        },
        {
            "id": 121,
            "date": "2014-11-15",
            "heureDebut": "16:30:00",
            "heureFin": "18:00:00",
            "salle_id": 10,
            "ligue_id": 1
        },
        {
            "id": 108,
            "date": "2014-11-15",
            "heureDebut": "10:00:00",
            "heureFin": "10:30:00",
            "salle_id": 2,
            "ligue_id": 1
        },
        {
            "id": 1,
            "date": "2014-11-14",
            "heureDebut": "19:00:00",
            "heureFin": "21:00:00",
            "salle_id": 8,
            "ligue_id": 1
        }
    ]
}
```

### HTTP Request
`GET api/allBookings/{ligueId}`


<!-- END_4849c540b3a1e8f7c7bdc140838b91c9 -->

<!-- START_5ef90dd4846f0d2902b89354bf5c42bb -->
## api/auth
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

<!-- START_87c1deb1ba338488dffce9949771bf55 -->
## api/makeReservation
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

<!-- START_1a3c1fd84328926806d9739a2c5776ab -->
## api/currentBookingsList
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/currentBookingsList" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/currentBookingsList"
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
    "body": []
}
```

### HTTP Request
`GET api/currentBookingsList`


<!-- END_1a3c1fd84328926806d9739a2c5776ab -->

<!-- START_de2af77f385d9f5ecebd891f5dbc2175 -->
## api/currentBookingsList/{ligueId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/currentBookingsList/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/currentBookingsList/1"
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
    "body": []
}
```

### HTTP Request
`GET api/currentBookingsList/{ligueId}`


<!-- END_de2af77f385d9f5ecebd891f5dbc2175 -->

<!-- START_7a60c3e79b05037fb1259893b01ea7a6 -->
## api/allAccounts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/allAccounts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/allAccounts"
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
            "login": "multimedia",
            "libelle": "MULTIMEDIA",
            "nbEmployes": 5,
            "nbMembres": 44,
            "activation": 1,
            "token": "Qe8ozW3OAMvmpAm09oZHx3TjdEmxiCCwRmIJ4YfgFnNr8ptJtAWpo4a6jVCSFHNp",
            "role_id": 2
        },
        {
            "id": 2,
            "login": "sports de glace",
            "libelle": "SPORTS DE GLACE",
            "nbEmployes": 3,
            "nbMembres": 57,
            "activation": 0,
            "token": "1JYXowjdSaaTf56AyFhNjFIp7UyXiN43sImFF576T8kXGt822rcwWtjPofmPBB4h",
            "role_id": 2
        },
        {
            "id": 3,
            "login": "handisport",
            "libelle": "HANDISPORT",
            "nbEmployes": 8,
            "nbMembres": 86,
            "activation": 1,
            "token": "f7Vw20x3JnGYIFofV1KgTavYliHmoZYpLQUYpiCmPpayZSB7zFuMIVjhxQ8XOqeB",
            "role_id": 2
        },
        {
            "id": 4,
            "login": "vol libre",
            "libelle": "VOL LIBRE",
            "nbEmployes": 7,
            "nbMembres": 22,
            "activation": 0,
            "token": "8fo157pLZsoUPq8WM2vWpMGBN2DCd23RDPSkSAQB6eUvKaGWvBFCpQA9t4de5ABO",
            "role_id": 1
        },
        {
            "id": 5,
            "login": "ugsel",
            "libelle": "UGSEL",
            "nbEmployes": 2,
            "nbMembres": 40,
            "activation": 1,
            "token": "EwSkjxiHtMz7hX88PkpfGy3Itc9DRRSTiiP3nrlCvBF8F4JMcZihImOjPSwdGClu",
            "role_id": 3
        },
        {
            "id": 6,
            "login": "handball",
            "libelle": "HANDBALL",
            "nbEmployes": 3,
            "nbMembres": 127,
            "activation": 1,
            "token": "IPNHCwR9FGF1gcdaTjKRmAtgi5e109iuHMZku1yTr03qIgFi7Vcy8Xp5bKbJ1AGi",
            "role_id": 1
        },
        {
            "id": 7,
            "login": "montagne escalade",
            "libelle": "MONTAGNE ESCALADE",
            "nbEmployes": 3,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 8,
            "login": "fspf",
            "libelle": "FSPF",
            "nbEmployes": 4,
            "nbMembres": 39,
            "activation": 0,
            "token": "Rg7iQlRTEsBUPrDL2pBK2hh2hSRwAc5dxOSnZJ2EHZKBS6yciI8FMnJ1aYhUdvvE",
            "role_id": 1
        },
        {
            "id": 9,
            "login": "cresl",
            "libelle": "CRESL",
            "nbEmployes": 9,
            "nbMembres": 54,
            "activation": 1,
            "token": "7Y6AstExqCUUC04SFhczvZbhRYG44zMy5ryz5yBNJgm6Wryyoc79nLGjav1cpqk2",
            "role_id": 2
        },
        {
            "id": 10,
            "login": "kick boxing",
            "libelle": "KICK BOXING",
            "nbEmployes": 1,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 11,
            "login": "echecs",
            "libelle": "ECHECS",
            "nbEmployes": 2,
            "nbMembres": 72,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 12,
            "login": "cyclotourisme",
            "libelle": "CYCLOTOURISME",
            "nbEmployes": 9,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 13,
            "login": "fsgt",
            "libelle": "FSGT",
            "nbEmployes": 2,
            "nbMembres": 45,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 14,
            "login": "crosl",
            "libelle": "CROSL",
            "nbEmployes": 8,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 15,
            "login": "motonautique",
            "libelle": "MOTONAUTIQUE",
            "nbEmployes": 7,
            "nbMembres": 53,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 16,
            "login": "randonnee pedestre",
            "libelle": "RANDONNEE PEDESTRE",
            "nbEmployes": 4,
            "nbMembres": 30,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 17,
            "login": "voile",
            "libelle": "VOILE",
            "nbEmployes": 8,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 18,
            "login": "equitation",
            "libelle": "EQUITATION",
            "nbEmployes": 3,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 19,
            "login": "base- ball softball",
            "libelle": "BASE- BALL SOFTBALL",
            "nbEmployes": 8,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 20,
            "login": "sport en milieu rural",
            "libelle": "SPORT EN MILIEU RURAL",
            "nbEmployes": 5,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 21,
            "login": "drass",
            "libelle": "DRASS",
            "nbEmployes": 5,
            "nbMembres": 18,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 22,
            "login": "aïkido ab",
            "libelle": "AÏKIDO AB",
            "nbEmployes": 2,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 23,
            "login": "triathlon",
            "libelle": "TRIATHLON",
            "nbEmployes": 1,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 24,
            "login": "aeromodelisme",
            "libelle": "AEROMODELISME",
            "nbEmployes": 9,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 25,
            "login": "squash",
            "libelle": "SQUASH",
            "nbEmployes": 2,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 26,
            "login": "gymnastique volontaire",
            "libelle": "GYMNASTIQUE VOLONTAIRE",
            "nbEmployes": 0,
            "nbMembres": 23,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 27,
            "login": "judo",
            "libelle": "JUDO",
            "nbEmployes": 0,
            "nbMembres": 51,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 28,
            "login": "football americain",
            "libelle": "FOOTBALL AMERICAIN",
            "nbEmployes": 8,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 29,
            "login": "boxe anglaise",
            "libelle": "BOXE ANGLAISE",
            "nbEmployes": 2,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 30,
            "login": "fscf",
            "libelle": "FSCF",
            "nbEmployes": 0,
            "nbMembres": 62,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 31,
            "login": "divers",
            "libelle": "DIVERS",
            "nbEmployes": 3,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 32,
            "login": "usep",
            "libelle": "USEP",
            "nbEmployes": 0,
            "nbMembres": 84,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 33,
            "login": "natation",
            "libelle": "NATATION",
            "nbEmployes": 0,
            "nbMembres": 100,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 34,
            "login": "cdos",
            "libelle": "CDOS",
            "nbEmployes": 0,
            "nbMembres": 71,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 35,
            "login": "crt lorraine",
            "libelle": "CRT LORRAINE",
            "nbEmployes": 0,
            "nbMembres": 77,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 36,
            "login": "cyclisme",
            "libelle": "CYCLISME",
            "nbEmployes": 9,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 37,
            "login": "canoë kayak",
            "libelle": "CANOË KAYAK",
            "nbEmployes": 9,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 38,
            "login": "boules lyonnaises",
            "libelle": "BOULES LYONNAISES",
            "nbEmployes": 0,
            "nbMembres": 59,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 39,
            "login": "course d'orientation",
            "libelle": "COURSE D'ORIENTATION",
            "nbEmployes": 0,
            "nbMembres": 44,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 40,
            "login": "ball-trap",
            "libelle": "BALL-TRAP",
            "nbEmployes": 2,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 41,
            "login": "twirling baton",
            "libelle": "TWIRLING BATON",
            "nbEmployes": 2,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 42,
            "login": "tir",
            "libelle": "TIR",
            "nbEmployes": 0,
            "nbMembres": 51,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 43,
            "login": "tir a l'arc",
            "libelle": "TIR A L'ARC",
            "nbEmployes": 0,
            "nbMembres": 80,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 44,
            "login": "scapa",
            "libelle": "SCAPA",
            "nbEmployes": 8,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 45,
            "login": "muaythaï",
            "libelle": "MUAYTHAÏ",
            "nbEmployes": 3,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 46,
            "login": "gymnastique",
            "libelle": "GYMNASTIQUE",
            "nbEmployes": 0,
            "nbMembres": 94,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 47,
            "login": "ulm",
            "libelle": "ULM",
            "nbEmployes": 4,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 48,
            "login": "sports de quilles et bowling",
            "libelle": "SPORTS DE QUILLES ET BOWLING",
            "nbEmployes": 2,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 49,
            "login": "drjscs",
            "libelle": "DRJSCS",
            "nbEmployes": 0,
            "nbMembres": 96,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 50,
            "login": "boxe francaise",
            "libelle": "BOXE FRANCAISE",
            "nbEmployes": 0,
            "nbMembres": 33,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 51,
            "login": "medailles jeunesse et sports",
            "libelle": "MEDAILLES JEUNESSE ET SPORTS",
            "nbEmployes": 1,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 52,
            "login": "volley- ball",
            "libelle": "VOLLEY- BALL",
            "nbEmployes": 8,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 53,
            "login": "football",
            "libelle": "FOOTBALL",
            "nbEmployes": 8,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 54,
            "login": "fnmns",
            "libelle": "FNMNS",
            "nbEmployes": 3,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 55,
            "login": "halterophilie",
            "libelle": "HALTEROPHILIE",
            "nbEmployes": 9,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 56,
            "login": "sport automobile",
            "libelle": "SPORT AUTOMOBILE",
            "nbEmployes": 0,
            "nbMembres": 32,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 57,
            "login": "roller skating",
            "libelle": "ROLLER SKATING",
            "nbEmployes": 2,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 58,
            "login": "tennis",
            "libelle": "TENNIS",
            "nbEmployes": 3,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 59,
            "login": "crsu",
            "libelle": "CRSU",
            "nbEmployes": 0,
            "nbMembres": 82,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 60,
            "login": "tennis de table",
            "libelle": "TENNIS DE TABLE",
            "nbEmployes": 0,
            "nbMembres": 49,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 61,
            "login": "epmm",
            "libelle": "EPMM",
            "nbEmployes": 0,
            "nbMembres": 65,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 62,
            "login": "presse",
            "libelle": "PRESSE",
            "nbEmployes": 0,
            "nbMembres": 95,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 63,
            "login": "aeronautique\/ vol a moteur",
            "libelle": "AERONAUTIQUE\/ VOL A MOTEUR",
            "nbEmployes": 0,
            "nbMembres": 80,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 64,
            "login": "ufolep",
            "libelle": "UFOLEP",
            "nbEmployes": 0,
            "nbMembres": 84,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 65,
            "login": "badminton",
            "libelle": "BADMINTON",
            "nbEmployes": 0,
            "nbMembres": 25,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 66,
            "login": "sports sous- marins",
            "libelle": "SPORTS SOUS- MARINS",
            "nbEmployes": 0,
            "nbMembres": 12,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 67,
            "login": "c.r.e.p.s.",
            "libelle": "C.R.E.P.S.",
            "nbEmployes": 9,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 68,
            "login": "danse",
            "libelle": "DANSE",
            "nbEmployes": 0,
            "nbMembres": 61,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 69,
            "login": "sport adapte",
            "libelle": "SPORT ADAPTE",
            "nbEmployes": 2,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 70,
            "login": "crij",
            "libelle": "CRIJ",
            "nbEmployes": 9,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 71,
            "login": "rugby",
            "libelle": "RUGBY",
            "nbEmployes": 2,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 72,
            "login": "conseils generaux",
            "libelle": "CONSEILS GENERAUX",
            "nbEmployes": 0,
            "nbMembres": 31,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 73,
            "login": "aïkido aaa",
            "libelle": "AÏKIDO AAA",
            "nbEmployes": 0,
            "nbMembres": 28,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 74,
            "login": "ski",
            "libelle": "SKI",
            "nbEmployes": 0,
            "nbMembres": 48,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 75,
            "login": "aviron",
            "libelle": "AVIRON",
            "nbEmployes": 0,
            "nbMembres": 32,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 76,
            "login": "basket- ball",
            "libelle": "BASKET- BALL",
            "nbEmployes": 9,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 77,
            "login": "fcsad",
            "libelle": "FCSAD",
            "nbEmployes": 5,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 78,
            "login": "escrime",
            "libelle": "ESCRIME",
            "nbEmployes": 0,
            "nbMembres": 66,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 79,
            "login": "club alpin francais",
            "libelle": "CLUB ALPIN FRANCAIS",
            "nbEmployes": 0,
            "nbMembres": 21,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 80,
            "login": "motocyclisme",
            "libelle": "MOTOCYCLISME",
            "nbEmployes": 0,
            "nbMembres": 94,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 81,
            "login": "sports de contact",
            "libelle": "SPORTS DE CONTACT",
            "nbEmployes": 2,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 82,
            "login": "unss",
            "libelle": "UNSS",
            "nbEmployes": 0,
            "nbMembres": 27,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 83,
            "login": "vol a voile",
            "libelle": "VOL A VOILE",
            "nbEmployes": 5,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 84,
            "login": "petanque",
            "libelle": "PETANQUE",
            "nbEmployes": 0,
            "nbMembres": 54,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 85,
            "login": "frmjc",
            "libelle": "FRMJC",
            "nbEmployes": 4,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 86,
            "login": "lutte",
            "libelle": "LUTTE",
            "nbEmployes": 6,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 87,
            "login": "athletisme",
            "libelle": "ATHLETISME",
            "nbEmployes": 9,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 88,
            "login": "karate",
            "libelle": "KARATE",
            "nbEmployes": 0,
            "nbMembres": 21,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 89,
            "login": "ffst",
            "libelle": "FFST",
            "nbEmployes": 6,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 90,
            "login": "golf",
            "libelle": "GOLF",
            "nbEmployes": 0,
            "nbMembres": 52,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 91,
            "login": "parachutisme",
            "libelle": "PARACHUTISME",
            "nbEmployes": 2,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 92,
            "login": "taekwondo",
            "libelle": "TAEKWONDO",
            "nbEmployes": 0,
            "nbMembres": 34,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 93,
            "login": "peche au coup",
            "libelle": "PECHE AU COUP",
            "nbEmployes": 0,
            "nbMembres": 57,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 94,
            "login": "leo lagrange",
            "libelle": "LEO LAGRANGE",
            "nbEmployes": 3,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 95,
            "login": "speleologie",
            "libelle": "SPELEOLOGIE",
            "nbEmployes": 0,
            "nbMembres": 10,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 96,
            "login": "pecheurs sportifs a la mouche",
            "libelle": "PECHEURS SPORTIFS A LA MOUCHE",
            "nbEmployes": 0,
            "nbMembres": 49,
            "activation": 0,
            "token": null,
            "role_id": 3
        },
        {
            "id": 97,
            "login": "billard",
            "libelle": "BILLARD",
            "nbEmployes": 6,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 2
        },
        {
            "id": 98,
            "login": "ski nautique",
            "libelle": "SKI NAUTIQUE",
            "nbEmployes": 3,
            "nbMembres": 100,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 99,
            "login": "cdos moselle",
            "libelle": "CDOS Moselle",
            "nbEmployes": 0,
            "nbMembres": 68,
            "activation": 0,
            "token": null,
            "role_id": 1
        },
        {
            "id": 100,
            "login": "sourds de l'est",
            "libelle": "SOURDS DE L'EST",
            "nbEmployes": 10,
            "nbMembres": 127,
            "activation": 0,
            "token": null,
            "role_id": 1
        }
    ]
}
```

### HTTP Request
`GET api/allAccounts`


<!-- END_7a60c3e79b05037fb1259893b01ea7a6 -->

<!-- START_465b1d670d2936d085daf61ca013f141 -->
## api/changeHallFeatureById/{salleId}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/changeHallFeatureById/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/changeHallFeatureById/1"
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
            "photo_id": 1
        }
    ]
}
```

### HTTP Request
`GET api/changeHallFeatureById/{salleId}`


<!-- END_465b1d670d2936d085daf61ca013f141 -->

<!-- START_740a28080b5f5012637b6e2f837dafe7 -->
## api/activation
> Example request:

```bash
curl -X POST \
    "http://localhost/api/activation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/activation"
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
`POST api/activation`


<!-- END_740a28080b5f5012637b6e2f837dafe7 -->

<!-- START_83998c6326efeb3507ef017f38f13484 -->
## api/changeHallFeature
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/changeHallFeature" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/changeHallFeature"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/changeHallFeature`


<!-- END_83998c6326efeb3507ef017f38f13484 -->

<!-- START_93f58cb942cd571771908f904356bc70 -->
## api/changeDigicode
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/changeDigicode" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/changeDigicode"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/changeDigicode`


<!-- END_93f58cb942cd571771908f904356bc70 -->

<!-- START_9824622b9a1d316abc515749c281bd24 -->
## api/settingLeague
> Example request:

```bash
curl -X POST \
    "http://localhost/api/settingLeague" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/settingLeague"
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
`POST api/settingLeague`


<!-- END_9824622b9a1d316abc515749c281bd24 -->


