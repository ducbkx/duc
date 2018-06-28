<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=egde">
    <title></title>
    <link rel="stylesheet" href="getbootstrap.com/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="col-xs-8 col-xs-offset-2" style="">
        <form class="form-horizontal form-row-seperated"action="{{URL::action('CustomerController@store')}}" method="post">
            <input type="hidden" name="_token" value="{{crsf_token()}}">
            <div class="form-group">
                <label for="username">UserName</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
                
</body>
</html>