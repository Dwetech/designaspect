<?php include('core.php'); ?>

<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Design Aspect</title>

    <link rel="stylesheet" href="<?php echo CSS.'bootstrap.min.css' ?>"/>
    <link rel="stylesheet" href="<?php echo CSS.'style-2.css' ?>"/>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300" rel="stylesheet"
          type="text/css">
</head>
<body>



<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="popup-content green-light-bg">
            <div class="col-md-5 text-right">
                <div class="leftSide">
                    <img src="<?php echo IMG.'journal.png' ?>" alt=""/>
                </div>
            </div>
            <div class="col-md-7 noPaddingRight">
                <div class="rightSide">
                    <div class="col-md-12 noPaddingRight">
                        <div class="notice">
                            <h1>Sign Up for Our FREE Report:</h1>
                            <img class="" src="<?php echo IMG.'arrow-left.png' ?>" alt=""/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="heading">
                            <h1 class="text-shadow">7 Smart Tips for Your <br> Child’s First Dental Exam</h1>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="question">
                                <div class="col-md-12">
                                    <a class="text-shadow" href="">•    When to take your child to the dentist?</a>
                                    <a class="text-shadow" href="">•    What problems to avoid?</a>
                                    <a class="text-shadow" href="">•    How to choose a pediatric dentist?</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 noPaddingLeft">
                        <div class="download-form">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="first_name" class="col-sm-3 control-label text-shadow">FIRST NAME:</label>
                                    <div class="col-sm-9">
                                        <input name="first_name" type="text" class="form-control" id="first_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label text-shadow">EMAIL:</label>
                                    <div class="col-sm-9">
                                        <input name="email" type="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="form-group relative">
                                    <p class="let_me_into">No thanks, just let me into the site</p>
                                    <div class="col-sm-offset-5 col-sm-5">
                                        <button type="submit" name="submit" class="btn btn-default btn-submit btn-block">DOWNLOAD NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>