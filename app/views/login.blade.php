<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    
    <!-- {{HTML::image('assets/img/favicon.png')}} -->
    
    

    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    {{HTML::style('assets/css/bootstrap.min.css')}}
    {{HTML::style('assets/css/bootstrap-reset.css')}}
    {{HTML::style('font-awesome/css/font-awesome.css')}}
    {{HTML::style('assets/css/style.css?1')}}
    {{HTML::style('assets/css/style-responsive.css')}}

    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="lock-screen">

    <div class="lock-wrapper">
        <div id="time">Login</div>

        <div class="lock-box text-center">

            <form role="form" class="form-inline" action="{{URL::to('login_check')}}" method="post" >
                <input name="user_name" type="text" placeholder="Name" id="username" class="form-control lock-name">
                {{HTML::image('assets/img/DU_Logo.jpg','lock avatar')}}
                
                <div class="lock-pwd">
                    <div class="form-group">
                        <input name="password" type="password" placeholder="Password" id="password" class="form-control lock-input">
                        <button class="btn btn-lock" type="submit">
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
