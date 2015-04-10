<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>AOE2 Dashboard</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="bootstrap-multiselect.css" type="text/css"/>

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>


<section class="ui-layout-center main">
    <div class="container-fluid">
        <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs row" role="tablist">
                <li role="presentation" class="active">
                    <a href="#random-map" aria-controls="random-map" role="tab" data-toggle="tab">Random Map <small>110</small></a>
                </li>
                <li role="presentation">
                    <a href="#death-match" aria-controls="death-match" role="tab" data-toggle="tab">Death Match <small>30</small></a>
                </li>
                <li role="presentation">
                    <a href="#custom-senario" aria-controls="custom-senario" role="tab" data-toggle="tab">Custom Senario <small>30</small></a>
                </li>
            </ul>

            <div class="toolbar well row clearfix">
                <div class="toolbar-li toolbar-li-games">
                    <label>Map:</label>
                    <select id="example-getting-started" multiple="multiple">
                        <option value="Arabia" selected>Arabia</option>
                        <option value="Arena" selected>Arena</option>
                        <option value="Blackforest" selected>Blackforest</option>
                        <option value="Megarandom" selected>Megarandom</option>
                        <option value="Islands" selected>Islands</option>
                        <option value="Nomad" selected>Nomad</option>
                    </select>
                </div>
                <div class="toolbar-li">
                    <div class="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </span>
                        </div><!-- /input-group -->
                    </div>
                </div>
                <div class="toolbar-li">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Show Forgotten
                        </label>
                    </div>
                </div>
                <div class="toolbar-li">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Hide Full
                        </label>
                    </div>
                </div>
                <div class="toolbar-li">
                    <div class="rating-limiter">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="0">
                            <span class="input-group-addon">-</span>
                            <input type="text" class="form-control" placeholder="10000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="random-map">
                    <ol class="games-list list-unstyled row">
                        <li class="col-lg-2 col-md-3 col-sm-4">
                            <a href="#" class="center-block well" data-toggle="modal" data-target="#myModal">
                                <div class="number"><span class="sr-only">Game </span>1</div>
                                <h2 class="title">Blackforest 2v2</h2>
                                <h3 class="location">Blackforest</h3>
                                <div class="host">BrysonWF</div>
                                <div class="occupancy">3/8</div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4">
                            <a href="#" class="center-block well" data-toggle="modal" data-target="#myModal">
                                <div class="number"><span class="sr-only">Game </span>2</div>
                                <h2 class="title">Blackforest 2v2</h2>
                                <h3 class="location">Blackforest</h3>
                                <div class="host">OtherUser</div>
                                <div class="occupancy">3/8</div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4">
                            <a href="#" class="center-block well" data-toggle="modal" data-target="#myModal">
                                <div class="number"><span class="sr-only">Game </span>3</div>
                                <h2 class="title">Blackforest 2v2</h2>
                                <h3 class="location">Blackforest</h3>
                                <div class="host">OtherUser</div>
                                <div class="occupancy">3/8</div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-3 col-sm-4">
                            <a href="#" class="center-block well" data-toggle="modal" data-target="#myModal">
                                <div class="number"><span class="sr-only">Game </span>4</div>
                                <h2 class="title">Blackforest 2v2</h2>
                                <h3 class="location">Blackforest</h3>
                                <div class="host">OtherUser</div>
                                <div class="occupancy">3/8</div>
                            </a>
                        </li>
                    </ol>

                </div>
                <div role="tabpanel" class="tab-pane" id="death-match">...</div>
                <div role="tabpanel" class="tab-pane" id="custom-senario">...</div>
            </div>

        </div>

    </div>
</section>


<section class="ui-layout-east users">
    <div class="account">
        <!-- Single button -->
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <button type="button" class="btn btn-info btn-block dropdown-toggle text-left" data-toggle="dropdown" aria-expanded="false">
                    <img src="profile.jpg" />
                    <span class="username">BrysonWF (1650)</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Profile and History</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h4>Friends</h4>
        <ul class="list-group user-list friends-list">
            <li class="list-group-item">
                <span class="badge rating">1850</span>
                <span class="username">AnotherGuy</span>
            </li>
            <li class="list-group-item">
                <span class="badge rating">1650</span>
                <span class="username">BrysonWF</span>
            </li>
            <li class="list-group-item">
                <span class="badge rating">1250</span>
                <span class="username">Other User</span>
            </li>
        </ul>
        <h4>Everyone <small><a href="#">Leaderboard</a></small></h4>
        <ul class="list-group user-list everyone-list">
            <li class="list-group-item">
                <span class="badge rating">1850</span>
                <span class="username">AnotherGuy</span>
            </li>
            <li class="list-group-item">
                <span class="badge rating">1650</span>
                <span class="username">BrysonWF</span>
            </li>
            <li class="list-group-item">
                <span class="badge rating">1250</span>
                <span class="username">Other User</span>
            </li>
        </ul>
    </div>
</section>


<section class="ui-layout-south chat">
    <div class="container-fluid">
        <ul class="list-unstyled">
            <li>
                <span class="user">BrysonWF</span>
                <span class="colon">:</span>
                <span class="message">!!!!!!!!!!!!!!!!!!!!!!!!!&*&*&2v2 Blackforest game 1!!!!!!!!!!!!!!!!!!!!!!!!!&*&*&</span>
            </li>
            <li>
                <span class="user">OtherGuy</span>
                <span class="colon">:</span>
                <span class="message">woot chat</span>
            </li>
        </ul>
        <form class="row">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Hi, welcome to AOE2! Send Chat Messages here.">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Send</button>
                </span>
            </div><!-- /input-group -->
        </form>
    </div>
</section>

<?php include '_modal-game.php'; ?>


<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="jquery.layout.js"></script>
<script type="text/javascript" src="bootstrap-multiselect.js"></script>

<!-- Custom JavaScript -->
<script src="script.js"></script>

</body>
</html>
