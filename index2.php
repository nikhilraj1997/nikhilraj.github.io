<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <link rel="stylesheet" href="site.css">

    <title>Video Poker</title>
</head>

<body class="img-responsive width:100%">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>Video Poker</h1>
            </div>
            <div class="row text-center betBank">
                <div class="col-md-1"></div>
                <div id="playerAccount" class="col-md-3 betBank">
                    <h4>Player Bank Balance</h4>
                </div>

                <div id="playerBankDiv" class="col-md-1 betBank">
                    <h4>  Rs <span id="playerBankSpan"> 1000</span></h4>
                </div>

                <div id="betInput" class="col-md-3 betBank">
                    <h4>Place A Bet To Start Playing</h4>
                </div>

                <div id="betInput" class="col-md-3 betBank">
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon">₹</span>
                            <input id="playerBetInput" type="number" class="form-control" value="0">
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="row">
                    <div class="col-md-12 text-center">
                            <h1>
                                <span id="showHandName">Table will come here</span>
                            </h1>
                
                        </div>
                <br>
                <div class="col-md-12" id="playerHandDiv">
                    <span><img id="playerCard1" src="img/back.png" class="cardBacks"></span>
                    <span><img id="playerCard2" src="img/back.png" class="cardBacks"></span>
                    <span><img id="playerCard3" src="img/back.png" class="cardBacks"></span>
                    <span><img id="playerCard4" src="img/back.png" class="cardBacks"></span>
                    <span><img id="playerCard5" src="img/back.png" class="cardBacks"></span>
                </div>
                <div class="col-md-12 text-center">
                        <button id="deal" disabled class="btn btn-warning btn-new">
                            <h2>Deal</h2>
                        </button>
                        <button id="hit" class="btn btn-warning btn-new hidden">Hit</button>
                        <button id="playAgain" class="btn btn-warning btn-new hidden">Play Again</button>
                    </div>

            </div>

          

        </div>
       


    </div>
    <!--
    End Container Div
-->
    <script>

//a messy way of removing the disabled attribute from the deal button 


    </script>
    <script src="card.js"></script>
    <script src="hand.js"></script>
    <script src="deck.js"></script>
    <script src="player.js"></script>
    <script src="game.js"></script>
    <script>

        var game = new Game();
        game.play();
        //console.log(game);

    </script>
</body>

</html>