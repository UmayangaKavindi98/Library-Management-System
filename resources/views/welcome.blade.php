<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!--<link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}"/>-->
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.css')}}"/>
    <!--<link rel="stylesheet" href="{{URL::asset('css/style.css')}}"/>-->



</head>
<body>
    <!--header section-->
    @include('header')

    <!--content section-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12 pt-4 mb-4 border-bottom">
                    <h4 class="header-line">ADMIN DASHBOARD</h4>
                </div>
            </div>
            <!--1st Row----------------------------------------------------------------------------------------------------------------->
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="#" style="text-decoration: none;">
                        <div class="card text-black bg-light mb-3 text-center" style="max-width: 18rem;">
                            <div class="card-body">
                                <img src="/icons/1.png" class="img" alt="book listed" style="width: 100px;"/>
                                <!--Get count here-->
                                <h3>8000</h3><!--display count here-->
                                Book Listed
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="#" style="text-decoration: none;">
                        <div class="card text-black bg-light mb-3 text-center" style="max-width: 18rem;">
                            <div class="card-body">
                                <img src="/icons/book-return.png" class="img" alt="book listed" style="width: 100px;"/>
                                <!--Get count here-->
                                <h3>10</h3><!--display count here-->
                                Books Not Return Yet
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="#" style="text-decoration: none;">
                        <div class="card text-black bg-light mb-3 text-center" style="max-width: 18rem;">
                            <div class="card-body">
                                <img src="/icons/user.png" class="img" alt="book listed" style="width: 100px;"/>
                                <!--Get count here-->
                                <h3>2000</h3><!--display count here-->
                                Regitered Users
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="#" style="text-decoration: none;">
                        <div class="card text-black bg-light mb-3 text-center" style="max-width: 18rem;">
                            <div class="card-body">
                                <img src="/icons/author.png" class="img" alt="book listed" style="width: 100px;"/>
                                <!--Get listed count here-->
                                <h3>30</h3><!--display count here-->
                                Author Listed
                            </div>
                        </div>
                    </a>
                </div>

            <!--2nd Row----------------------------------------------------------------------------------------------------------------->
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="#" style="text-decoration: none;">
                        <div class="card text-black bg-light mb-3 text-center" style="max-width: 18rem;">
                            <div class="card-body">
                                <img src="/icons/category.png" class="img" alt="book listed" style="width: 100px;"/>
                                <!--Get count here-->
                                <h3>50</h3><!--display count here-->
                                Category Listed
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery-1.10.2.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>