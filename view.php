<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Game</title>
</head>
<body>
	<!-- TODO: add a form for the user to play the game -->

<!--    <form>-->
<!--        <div class="form-group row">-->
<!--            <label for="name" class="col-sm-2 col-form-label">Name</label>-->
<!--            <input class="form-control col-sm-3" type="text" name="name" placeholder="Enter your name">-->
<!--            <button type="submit" class="btn btn-primary col-sm-1 ml-2">Submit</button>-->
<!--        </div>-->
<!--    </form>-->
    <br>
    <br>
    <br>
    <br>
    <p class="randomWord">Word to be translated: <?= $game->chosenWord->frenchWord ?></p>
    <form method="post">
        <div class="form-group row">
            <label for="wordTranslation" class="col-sm-2 col-form-label">Translation</label>
            <input class="form-control col-sm-3" type="text" name="translation" placeholder="Translate the word">
            <button type="submit" name="submit" class="btn btn-primary col-sm-1 ml-2">Submit</button>
        </div>
    </form>
    <p class="answerCheck"><?= $game->message ?></p>
<!--    <p class="score">Your current score is:</p>-->

</body>
</html>