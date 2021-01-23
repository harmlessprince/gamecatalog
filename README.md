## About Game Catalog

The API for a game catalog. The game has players who play it very frequently. The games come in versions so players can own a game in one or more versions of the game.
The system contains game play record per player per game. Their are basically two forms of game play, we havethe single and multiplayer. The players  can be involved in any type. When it is a single player, only one player is assigned to a game play otherwise, other players are added to the game play based on number of players required by the system. The system records who started the game as the host and those invited to join as the guest.

All players has been assigned all game versions in the system, so they are able to take part in all games in the system.

### Note

- Each of game only allows a maximum of 4 players
- Players can only play together if they have the same game versions.

## How to use

You can use AJAX to call the Game Catalog API and will receive a data in return depending on the endpoint you you are calling. If you are using jQuery, you can use the $.ajax() function in the code snippet below to get started.

```
$.ajax({
  url: https://gamecatalog.herokuapp.com/api/players',
  dataType: 'json',
  success: function(data) {
    console.log(data);
  }
});
      
```

## Endpoints

### Get All Players

Returns json data of all players, their games and their gameplays (overall and for each game).

- URL

    /players/

- Method:

    GET

- URL Params
    none

- Data Params
    None

- Success Response:

    Code: 200

    Content:

    ```
       "data": [
        {
            "player_id": 1,
            "player_name": "Hannah Walter PhD",
            "player_email": "strosin.kennith@example.com",
            "last_login": "2021-01-23 18:53:14",
            "login_ip": "195.50.130.198",
            "games": [
                {
                    "version_id": 1,
                    "version_name": "Black Ops III",
                    "game_name": "Call of Duty",
                    "created_at": "January 2, 2015"
                },
                {
                    "version_id": 2,
                    "version_name": " Modern Warfare Remastered",
                    "game_name": "Call of Duty",
                    "created_at": "January 2, 2016"
                },
                
            ],
            "gameplays": [
                {
                    "gameplay_id": 16,
                    "no_players": 3,
                    "game_type": "multiplayer",
                    "version": {
                        "version_id": 24,
                        "version_name": "Wild Frontier",
                        "game_name": "Apex Legend",
                        "created_at": "January 2, 2014"
                    },
                    "players": [
                        {
                            "player_id": 1,
                            "player_name": "Hannah Walter PhD",
                            "player_email": "strosin.kennith@example.com",
                            "last_login": "2021-01-23 18:53:14",
                            "login_ip": "195.50.130.198",
                            "role": "guest"
                        },
                        {
                            "player_id": 17,
                            "player_name": "Sarina Schroeder",
                            "player_email": "urban.kemmer@example.com",
                            "last_login": "2021-01-23 18:53:14",
                            "login_ip": "160.231.10.124",
                            "role": "guest"
                        },
                        {
                            "player_id": 20,
                            "player_name": "Rachel Fahey",
                            "player_email": "haylie28@example.net",
                            "last_login": "2021-01-23 18:53:14",
                            "login_ip": "33.106.50.7",
                            "role": "host"
                        }
                    ],
                    "created_at": "March 2, 2014, 12:00 pm"
                },
                {
                "gameplay_id": 137,
                "no_players": 2,
                "game_type": "multiplayer",
                    "version": {
                        "version_id": 24,
                        "version_name": "Wild Frontier",
                        "game_name": "Apex Legend",
                        "created_at": "January 2, 2014"
                    },
                    "players": [
                        {
                            "player_id": 20,
                            "player_name": "Rachel Fahey",
                            "player_email": "haylie28@example.net",
                            "last_login": "2021-01-23 18:53:14",
                            "login_ip": "33.106.50.7",
                            "role": "host"
                        },
                        {
                            "player_id": 1,
                            "player_name": "Hannah Walter PhD",
                            "player_email": "strosin.kennith@example.com",
                            "last_login": "2021-01-23 18:53:14",
                            "login_ip": "195.50.130.198",
                            "role": "guest"
                        }
                    ],
                    "created_at": "March 2, 2014, 12:00 pm"
                },
               }  
        ]
    }
    ```

- Sample Call:

    ```
    $.ajax({
        url: "gamecatalog.herokuapp.com/api/players/",
        dataType: "json",
        type : "GET",
        success : function(r) {
        console.log(r);
        }
    });

    ```

### Get  Player

Returns json data of a player, its games and gameplays (overall and for each game).

- URL

    /players/:player

- Method:

    GET

- URL Params

   Required:

   players=[integer]


- Data Params
    None

- Success Response:

    Code: 200

    Content:

    ```
      {
  {
   "data":{
      "player_id":14,
      "player_name":"Ms. Patricia Trantow",
      "player_email":"paris.kuhlman@example.net",
      "last_login":"2021-01-23 18:53:14",
      "login_ip":"133.161.215.88",
      "games":[
        
         {
            "version_id":13,
            "version_name":"FIFA 15",
            "game_name":"FIFA",
            "created_at":"January 2, 2015"
         },
         {
            "version_id":14,
            "version_name":"FIFA 16",
            "game_name":"FIFA",
            "created_at":"January 2, 2016"
         },
         {
            "version_id":15,
            "version_name":"FIFA 17",
            "game_name":"FIFA",
            "created_at":"January 2, 2017"
         },
         {
            "version_id":16,
            "version_name":"FIFA 18",
            "game_name":"FIFA",
            "created_at":"January 2, 2018"
         },
         {
            "version_id":17,
            "version_name":"FIFA 19",
            "game_name":"FIFA",
            "created_at":"January 2, 2019"
         },
         {
            "version_id":18,
            "version_name":"FIFA 20",
            "game_name":"FIFA",
            "created_at":"January 2, 2020"
         },
         {
            "version_id":19,
            "version_name":"Just Cause 1",
            "game_name":"Just Cause",
            "created_at":"January 2, 2016"
         },
         {
            "version_id":20,
            "version_name":"Just Cause 2",
            "game_name":"Just Cause",
            "created_at":"January 2, 2017"
         },
         {
            "version_id":21,
            "version_name":"Just Cause 3",
            "game_name":"Just Cause",
            "created_at":"January 2, 2018"
         },
         {
            "version_id":22,
            "version_name":"Just Cause 4",
            "game_name":"Just Cause",
            "created_at":"January 2, 2019"
         },
         {
            "version_id":23,
            "version_name":"Just Cause 5",
            "game_name":"Just Cause",
            "created_at":"January 2, 2020"
         },
         {
            "version_id":24,
            "version_name":"Wild Frontier",
            "game_name":"Apex Legend",
            "created_at":"January 2, 2014"
         },
         {
            "version_id":25,
            "version_name":"Battle Charge",
            "game_name":"Apex Legend",
            "created_at":"January 2, 2015"
         },
         {
            "version_id":26,
            "version_name":"Meltdown",
            "game_name":"Apex Legend",
            "created_at":"January 2, 2016"
         },
         {
            "version_id":27,
            "version_name":"Assimilation",
            "game_name":"Apex Legend",
            "created_at":"January 2, 2017"
         },
         {
            "version_id":28,
            "version_name":"Fortune's Favour",
            "game_name":"Apex Legend",
            "created_at":"January 2, 2018"
         },
         {
            "version_id":29,
            "version_name":"Boosted",
            "game_name":"Apex Legend",
            "created_at":"January 2, 2019"
         },
         {
            "version_id":30,
            "version_name":"Ascension",
            "game_name":"Apex Legend",
            "created_at":"January 2, 2020"
         }
      ],
      "gameplays":[
         {
            "gameplay_id":19,
            "no_players":1,
            "game_type":"single",
            "version":{
               "version_id":24,
               "version_name":"Wild Frontier",
               "game_name":"Apex Legend",
               "created_at":"January 2, 2014"
            },
            "players":[
               {
                  "player_id":14,
                  "player_name":"Ms. Patricia Trantow",
                  "player_email":"paris.kuhlman@example.net",
                  "last_login":"2021-01-23 18:53:14",
                  "login_ip":"133.161.215.88",
                  "role":"host"
               }
            ],
            "created_at":"March 2, 2014, 12:00 pm"
         }
      ]
   }
}
    ```

- Sample Call:

    ```
    $.ajax({
        url: "gamecatalog.herokuapp.com/api/players/14",
        dataType: "json",
        type : "GET",
        success : function(r) {
        console.log(r);
        }
    });

    ```
### Get  All Games Version

Returns json data of all the games version grouped per year and the players that has it.

- URL

    /games/

- Method:

    GET

- URL Params

    None


- Data Params
    started

- Success Response:

    Code: 200

    Content:

    ```
      {
   "data":{
      "02 2, 2014":[
         {
            "id":24,
            "game_id":5,
            "version":"Wild Frontier",
            "year":2014,
            "created_at":"2014-01-02 12:00:00",
            "players":[
               {
                  "id":1,
                  "name":"Ms. Reanna Vandervort",
                  "email":"connelly.curtis@example.org",
                  "nickname":"wmetz",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"182.147.93.141",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":1
                  }
               },
               {
                  "id":2,
                  "name":"Erika Kohler",
                  "email":"brannon93@example.org",
                  "nickname":"pietro.schneider",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"72.3.130.173",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":2
                  }
               },
               {
                  "id":3,
                  "name":"Kirsten Morar I",
                  "email":"htorp@example.net",
                  "nickname":"rosalee.dubuque",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"32.15.153.155",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":3
                  }
               },
               {
                  "id":4,
                  "name":"Shana Howell",
                  "email":"orlando.wiegand@example.net",
                  "nickname":"wnitzsche",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"16.159.203.114",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":4
                  }
               },
               {
                  "id":5,
                  "name":"Cristobal Schneider",
                  "email":"berneice77@example.org",
                  "nickname":"ritchie.rodrigo",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"236.82.58.154",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":5
                  }
               },
               {
                  "id":6,
                  "name":"Shea Strosin",
                  "email":"dtrantow@example.net",
                  "nickname":"alexys25",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"132.197.101.183",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":6
                  }
               },
               {
                  "id":7,
                  "name":"Mr. Alfred Flatley I",
                  "email":"obrekke@example.net",
                  "nickname":"eflatley",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"127.185.168.147",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":7
                  }
               },
               {
                  "id":8,
                  "name":"Kaylee Blanda",
                  "email":"qsmith@example.com",
                  "nickname":"stella13",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"83.102.226.106",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":8
                  }
               },
               {
                  "id":9,
                  "name":"Carley Ritchie",
                  "email":"howell.hillary@example.org",
                  "nickname":"lela53",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"148.128.58.159",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":9
                  }
               },
               {
                  "id":10,
                  "name":"Dr. Ottilie Hilpert III",
                  "email":"ernesto75@example.net",
                  "nickname":"braeden53",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"59.25.89.162",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":10
                  }
               },
               {
                  "id":11,
                  "name":"Dr. Lavern Wisozk",
                  "email":"bonita.king@example.com",
                  "nickname":"caitlyn41",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"74.72.170.41",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":11
                  }
               },
               {
                  "id":12,
                  "name":"Mossie Moore IV",
                  "email":"francesco02@example.org",
                  "nickname":"ocummerata",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"93.240.72.53",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":12
                  }
               },
               {
                  "id":13,
                  "name":"Aylin Boyle",
                  "email":"skyla.trantow@example.org",
                  "nickname":"germaine.harber",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"178.60.211.41",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":13
                  }
               },
               {
                  "id":14,
                  "name":"Miss Zoey Fadel",
                  "email":"summer76@example.com",
                  "nickname":"hyatt.maxine",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"145.229.10.248",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":14
                  }
               },
               {
                  "id":15,
                  "name":"Mr. Ed Kuvalis",
                  "email":"nicolas.maybell@example.org",
                  "nickname":"vidal.jacobs",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"27.78.158.42",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":15
                  }
               },
               {
                  "id":16,
                  "name":"Lina Hessel",
                  "email":"eankunding@example.com",
                  "nickname":"bupton",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"35.101.154.55",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":16
                  }
               },
               {
                  "id":17,
                  "name":"Roslyn Pacocha",
                  "email":"hester24@example.com",
                  "nickname":"gutkowski.bryce",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"57.30.225.46",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":17
                  }
               },
               {
                  "id":18,
                  "name":"Brandt Borer",
                  "email":"cary.krajcik@example.org",
                  "nickname":"efeeney",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"190.239.234.243",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":18
                  }
               },
               {
                  "id":19,
                  "name":"Mrs. Samantha Boyle",
                  "email":"mark44@example.org",
                  "nickname":"oswald74",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"224.35.174.248",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":19
                  }
               },
               {
                  "id":20,
                  "name":"Prof. Rossie Cormier",
                  "email":"mmcdermott@example.com",
                  "nickname":"jarod28",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"171.126.41.27",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":20
                  }
               },
               {
                  "id":21,
                  "name":"Lavern Heaney II",
                  "email":"kihn.bennett@example.com",
                  "nickname":"waters.lon",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"165.34.214.244",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":21
                  }
               },
               {
                  "id":22,
                  "name":"Easter Hagenes",
                  "email":"hattie.hansen@example.org",
                  "nickname":"nestor42",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"249.245.232.237",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":22
                  }
               },
               {
                  "id":23,
                  "name":"Luciano Kilback",
                  "email":"esta07@example.org",
                  "nickname":"rafaela.hermiston",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"83.227.1.131",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":23
                  }
               },
               {
                  "id":24,
                  "name":"Miss Jude Kovacek I",
                  "email":"karli.stroman@example.org",
                  "nickname":"king.lester",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"87.236.66.220",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":24
                  }
               },
               {
                  "id":25,
                  "name":"Peggie Hessel",
                  "email":"nlangworth@example.net",
                  "nickname":"cade53",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"67.136.82.160",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":25
                  }
               },
               {
                  "id":26,
                  "name":"Dorthy Reynolds",
                  "email":"alycia02@example.org",
                  "nickname":"stamm.elliot",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"170.6.217.233",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":26
                  }
               },
               {
                  "id":27,
                  "name":"Mrs. Liana Bahringer",
                  "email":"echristiansen@example.net",
                  "nickname":"nitzsche.brooks",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"104.155.73.30",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":27
                  }
               },
               {
                  "id":28,
                  "name":"Rudy Gorczany Jr.",
                  "email":"caleigh29@example.net",
                  "nickname":"jude86",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"157.0.120.154",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":28
                  }
               },
               {
                  "id":29,
                  "name":"Lenora O'Reilly",
                  "email":"xwalker@example.com",
                  "nickname":"jerod87",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"167.166.49.159",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":29
                  }
               },
               {
                  "id":30,
                  "name":"Ms. Scarlett Macejkovic DVM",
                  "email":"mitchell.wilfredo@example.com",
                  "nickname":"kuvalis.blanca",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"190.138.207.126",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":30
                  }
               },
               {
                  "id":31,
                  "name":"Walker Robel MD",
                  "email":"wkuhic@example.com",
                  "nickname":"annamae16",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"125.58.33.64",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":31
                  }
               },
               {
                  "id":32,
                  "name":"Delores Wolff",
                  "email":"antonietta.bashirian@example.org",
                  "nickname":"qlind",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"178.86.231.81",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":32
                  }
               },
               {
                  "id":33,
                  "name":"Carolina Muller PhD",
                  "email":"perry.lesch@example.org",
                  "nickname":"fred51",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"242.82.168.70",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":33
                  }
               },
               {
                  "id":34,
                  "name":"Eulah Bernhard III",
                  "email":"nova35@example.org",
                  "nickname":"fahey.tomasa",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"26.175.143.37",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":34
                  }
               },
               {
                  "id":35,
                  "name":"Reilly Nicolas",
                  "email":"jeff.wyman@example.org",
                  "nickname":"moises.davis",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"195.205.112.233",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":35
                  }
               },
               {
                  "id":36,
                  "name":"Jada Kling",
                  "email":"uberge@example.com",
                  "nickname":"batz.kayley",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"214.124.42.200",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":36
                  }
               },
               {
                  "id":37,
                  "name":"Allie Conn",
                  "email":"jaylin.okon@example.net",
                  "nickname":"bahringer.carolina",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"92.206.196.108",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":37
                  }
               },
               {
                  "id":38,
                  "name":"Alysa Predovic",
                  "email":"runte.ralph@example.net",
                  "nickname":"akuhn",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"146.181.28.55",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":38
                  }
               },
               {
                  "id":39,
                  "name":"Jedidiah Klein",
                  "email":"pankunding@example.net",
                  "nickname":"mckayla63",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"79.234.57.89",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":39
                  }
               },
               {
                  "id":40,
                  "name":"Ray Yost",
                  "email":"lconsidine@example.com",
                  "nickname":"dalton87",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"124.151.247.190",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":40
                  }
               },
               {
                  "id":41,
                  "name":"Orlando Pouros",
                  "email":"lindgren.eladio@example.com",
                  "nickname":"garret08",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"203.96.120.180",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":41
                  }
               },
               {
                  "id":42,
                  "name":"Maximus Jacobson",
                  "email":"nathaniel12@example.com",
                  "nickname":"pblick",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"217.8.205.23",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":42
                  }
               },
               {
                  "id":43,
                  "name":"Jalon Rutherford",
                  "email":"torrance48@example.net",
                  "nickname":"arvilla84",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"20.220.239.219",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":43
                  }
               },
               {
                  "id":44,
                  "name":"Mr. Sheldon Franecki Jr.",
                  "email":"tillman.luis@example.org",
                  "nickname":"nshanahan",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"26.14.178.15",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":44
                  }
               },
               {
                  "id":45,
                  "name":"Hazel Bernhard Jr.",
                  "email":"wintheiser.demarco@example.org",
                  "nickname":"ullrich.winifred",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"130.56.11.89",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":45
                  }
               },
               {
                  "id":46,
                  "name":"Lynn Barrows",
                  "email":"altenwerth.edythe@example.net",
                  "nickname":"berry87",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"73.24.219.169",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":46
                  }
               },
               {
                  "id":47,
                  "name":"Haskell Lynch DDS",
                  "email":"xkub@example.org",
                  "nickname":"darian.collins",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"58.99.249.50",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":47
                  }
               },
               {
                  "id":48,
                  "name":"Cole Wiza V",
                  "email":"ygerlach@example.com",
                  "nickname":"idurgan",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"164.223.129.207",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":48
                  }
               },
               {
                  "id":49,
                  "name":"Luella Fahey",
                  "email":"mosciski.chasity@example.net",
                  "nickname":"tillman.lola",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"158.9.145.172",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":49
                  }
               },
               {
                  "id":50,
                  "name":"Vada Cronin Sr.",
                  "email":"kstrosin@example.org",
                  "nickname":"heidenreich.jennyfer",
                  "last_login_at":"2021-01-23 17:21:18",
                  "last_login_ip":"124.21.118.108",
                  "created_at":"2021-01-23 17:21:18",
                  "pivot":{
                     "version_id":24,
                     "user_id":50
                  }
               }
            ]
         }
      ]
   }
}
    ```

- Sample Call:

    ```
    $.ajax({
        url: "gamecatalog.herokuapp.com/api/games",
        dataType: "json",
        type : "GET",
        success : function(data) {
        console.log(data);
        }
    });

    ```
### Get Game

Returns json data of a game  and the versions

- URL

    /games/:games

- Method:

    GET

- URL Params

    games[interger]


- Data Params
    None

- Success Response:

    Code: 200

    Content:

    ```
{
    "data": {
        "game_id": 3,
        "game_name": "FIFA",
        "created_at": "January 1, 2015",
        "versions": [
            {
                "version_id": 13,
                "version_name": "FIFA 15",
                "game_name": "FIFA",
                "created_at": "January 2, 2015"
            },
            {
                "version_id": 14,
                "version_name": "FIFA 16",
                "game_name": "FIFA",
                "created_at": "January 2, 2016"
            },
            {
                "version_id": 15,
                "version_name": "FIFA 17",
                "game_name": "FIFA",
                "created_at": "January 2, 2017"
            },
            {
                "version_id": 16,
                "version_name": "FIFA 18",
                "game_name": "FIFA",
                "created_at": "January 2, 2018"
            },
            {
                "version_id": 17,
                "version_name": "FIFA 19",
                "game_name": "FIFA",
                "created_at": "January 2, 2019"
            },
            {
                "version_id": 18,
                "version_name": "FIFA 20",
                "game_name": "FIFA",
                "created_at": "January 2, 2020"
            }
        ]
    }
}
    ```

- Sample Call:

    ```
    $.ajax({
        url: "gamecatalog.herokuapp.com/api/games/3",
        dataType: "json",
        type : "GET",
        success : function(data) {
        console.log(data);
        }
    });

    ```

### Get Game

Returns json data of all games within a date range


- URL

    /games/range/

- Method:

    GET

- URL Params


- Data Params
    - start_date
    - end_date

- Success Response:

    Code: 200

    Content:

    ```
{
   {
   "data":[
      {
         "id":24,
         "game_id":5,
         "version":"Wild Frontier",
         "year":2014,
         "created_at":"2014-01-02 12:00:00",
         "players":[
            {
               "id":1,
               "name":"Ms. Reanna Vandervort",
               "email":"connelly.curtis@example.org",
               "nickname":"wmetz",
               "last_login_at":"2021-01-23 17:21:18",
               "last_login_ip":"182.147.93.141",
               "created_at":"2021-01-23 17:21:18",
               "pivot":{
                  "version_id":24,
                  "user_id":1
               }
            },
            {
               "id":2,
               "name":"Erika Kohler",
               "email":"brannon93@example.org",
               "nickname":"pietro.schneider",
               "last_login_at":"2021-01-23 17:21:18",
               "last_login_ip":"72.3.130.173",
               "created_at":"2021-01-23 17:21:18",
               "pivot":{
                  "version_id":24,
                  "user_id":2
               }
            },
            {
               "id":3,
               "name":"Kirsten Morar I",
               "email":"htorp@example.net",
               "nickname":"rosalee.dubuque",
               "last_login_at":"2021-01-23 17:21:18",
               "last_login_ip":"32.15.153.155",
               "created_at":"2021-01-23 17:21:18",
               "pivot":{
                  "version_id":24,
                  "user_id":3
               }
            },
            {
               "id":4,
               "name":"Shana Howell",
               "email":"orlando.wiegand@example.net",
               "nickname":"wnitzsche",
               "last_login_at":"2021-01-23 17:21:18",
               "last_login_ip":"16.159.203.114",
               "created_at":"2021-01-23 17:21:18",
               "pivot":{
                  "version_id":24,
                  "user_id":4
               }
            },
            {
               "id":5,
               "name":"Cristobal Schneider",
               "email":"berneice77@example.org",
               "nickname":"ritchie.rodrigo",
               "last_login_at":"2021-01-23 17:21:18",
               "last_login_ip":"236.82.58.154",
               "created_at":"2021-01-23 17:21:18",
               "pivot":{
                  "version_id":24,
                  "user_id":5
               }
            }
         ]
      }
   ],
   "links":{
      "first":"http://127.0.0.1:8000/api/games/range?page=1",
      "last":"http://127.0.0.1:8000/api/games/range?page=1",
      "prev":null,
      "next":null
   },
   "meta":{
      "current_page":1,
      "from":1,
      "last_page":1,
      "links":[
         {
            "url":null,
            "label":"&laquo; Previous",
            "active":false
         },
         {
            "url":"http://127.0.0.1:8000/api/games/range?page=1",
            "label":1,
            "active":true
         },
         {
            "url":null,
            "label":"Next &raquo;",
            "active":false
         }
      ],
      "path":"http://127.0.0.1:8000/api/games/range",
      "per_page":10,
      "to":1,
      "total":1
   }
}
    ```

- Sample Call:

    ```
    $.ajax({
        url: "gamecatalog.herokuapp.com/api/games/3",
        dataType: "json",
        type : "GET",
        success : function(data) {
        console.log(data);
        }
    });

    ```
