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