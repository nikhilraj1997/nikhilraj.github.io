<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Poker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="site.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body onload="myFunction()">
	<div id="loader"><img src="img/poker-chip.svg" alt="Loading...."></div>

	<div style="display:none;" id="myDiv" class="animate-bottom">
		<div class="row" id="playerHandDiv" style="margin-left: auto; margin-right: auto;">
			<div class="centerize">
				<img class="cardStyle" id="playerCard1" src="img/back.png" class="cardBacks">
		        <img class="cardStyle" id="playerCard2" src="img/back.png" class="cardBacks">
		        <img class="cardStyle" id="playerCard3" src="img/back.png" class="cardBacks">
				<img class="cardStyle" id="playerCard4" src="img/back.png" class="cardBacks">
		        <img class="cardStyle" id="playerCard5" src="img/back.png" class="cardBacks">
	    	</div>
		</div>

		<div class="row betBank">
	        <div class="row text-center">
		        <div class="col-md-2 col-sm-12 col-xs-12">
	                <h4>Credits: ₹<span id="playerBankSpan"> 1000</span></h4>
				</div>
				
				<div class="col-md-4 col-sm-12 col-xs-12 text-center">
		            <h1 style="margin-top: 0px"><span id="showHandName">Table will come here</span></h1>
		        </div>
				
				<div class="col-md-2 col-sm-12 col-xs-12 text-center" style="padding-bottom: 10px">
					<a class="btn btn-primary" data-toggle="modal" href='#ptab'>Prize Table</a>
				</div>

		        <div id="betInput" class="col-md-4 col-sm-12 col-xs-12 betBank">
		            <div id="playerAccount" class="col-md-6 col-sm-6 col-xs-6 betBank">
		            	<h4>Place a bet to start</h4>
		        	</div>

		            <div id="playerAccount" class="col-md-6 col-sm-6 col-xs-6 betBank">
			            <form>
			                <div class="input-group">
			                    <span class="input-group-addon">₹</span>
			                    <input id="playerBetInput" type="number" class="form-control" value="0">
			                </div>
			            </form>
		        	</div>
		        </div>
	        </div>
			
			<div class="row text-center">
	            <button id="deal" disabled class="btn btn-warning btn-new">Deal</button>
	            <button id="hit" class="btn btn-warning btn-new hidden">Hit</button>
	            <button id="playAgain" class="btn btn-warning btn-new hidden">Play Again</button>
	        </div>
		</div>

		<div class="modal fade" id="ptab">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Prize Table</h4>
					</div>
					<div class="modal-body">
						<div class="table-responsive">
			                <table id="tblMarquee" class="table table-condensed table-striped prize-tbl" cellpadding="1" cellspacing="0">
			                    <thead>
			                        <tr style="background-color: #040;">
			                            <td style="background-color: transparent; border-bottom: none; text-align: left;"></td>
			                            <td>
			                                <img alt="Bet 1" src="img/chips/1.png" />
			                            </td>
			                            <td>
			                                <img alt="Bet 2" src="img/chips/2.png" />
			                            </td>
			                            <td>
			                                <img alt="Bet 3" src="img/chips/3.png" />
			                            </td>
			                            <td>
			                                <img alt="Bet 4" src="img/chips/4.png" />
			                            </td>
			                            <td>
			                                <img alt="Bet 5" src="img/chips/5.png" />
			                            </td>
			                        </tr>
			                    </thead>
			                    <tbody>
			                        <tr id="row9">
			                            <td class="PRIZE">
			                                Royal Flush
			                            </td>
			                            <td>
			                                250
			                            </td>
			                            <td>
			                                500
			                            </td>
			                            <td>
			                                750
			                            </td>
			                            <td>
			                                1000
			                            </td>
			                            <td>
			                                4000
			                            </td>
			                        </tr>
			                        <tr id="row8">
			                            <td class="PRIZE">
			                                Straight Flush
			                            </td>
			                            <td>
			                                50
			                            </td>
			                            <td>
			                                100
			                            </td>
			                            <td>
			                                150
			                            </td>
			                            <td>
			                                200
			                            </td>
			                            <td>
			                                250
			                            </td>
			                        </tr>
			                        <tr id="row7">
			                            <td class="PRIZE">
			                                4 of a Kind
			                            </td>
			                            <td>
			                                25
			                            </td>
			                            <td>
			                                50
			                            </td>
			                            <td>
			                                75
			                            </td>
			                            <td>
			                                100
			                            </td>
			                            <td>
			                                125
			                            </td>
			                        </tr>
			                        <tr id="row6">
			                            <td class="PRIZE">
			                                Full House
			                            </td>
			                            <td>
			                                9
			                            </td>
			                            <td>
			                                18
			                            </td>
			                            <td>
			                                27
			                            </td>
			                            <td>
			                                36
			                            </td>
			                            <td>
			                                45
			                            </td>
			                        </tr>
			                        <tr id="row5">
			                            <td class="PRIZE">
			                                Flush
			                            </td>
			                            <td>
			                                6
			                            </td>
			                            <td>
			                                12
			                            </td>
			                            <td>
			                                18
			                            </td>
			                            <td>
			                                24
			                            </td>
			                            <td>
			                                30
			                            </td>
			                        </tr>
			                        <tr id="row4">
			                            <td class="PRIZE">
			                                Straight
			                            </td>
			                            <td>
			                                4
			                            </td>
			                            <td>
			                                8
			                            </td>
			                            <td>
			                                12
			                            </td>
			                            <td>
			                                16
			                            </td>
			                            <td>
			                                20
			                            </td>
			                        </tr>
			                        <tr id="row3">
			                            <td class="PRIZE">
			                                3 of a Kind
			                            </td>
			                            <td>
			                                3
			                            </td>
			                            <td>
			                                6
			                            </td>
			                            <td>
			                                9
			                            </td>
			                            <td>
			                                12
			                            </td>
			                            <td>
			                                15
			                            </td>
			                        </tr>
			                        <tr id="row2">
			                            <td class="PRIZE">
			                                2 Pair
			                            </td>
			                            <td>
			                                2
			                            </td>
			                            <td>
			                                4
			                            </td>
			                            <td>
			                                6
			                            </td>
			                            <td>
			                                8
			                            </td>
			                            <td>
			                                10
			                            </td>
			                        </tr>
			                        <tr id="row1">
			                            <td class="PRIZE">
			                                Jacks or Better
			                            </td>
			                            <td>
			                                1
			                            </td>
			                            <td>
			                                2
			                            </td>
			                            <td>
			                                3
			                            </td>
			                            <td>
			                                4
			                            </td>
			                            <td>
			                                5
			                            </td>
			                        </tr>
			                    </tbody>
			                </table>
			            </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
	</div>

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