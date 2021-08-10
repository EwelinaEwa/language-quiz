<?php


class LanguageGame
{
    private array $words = [];
    public Word $chosenWord;
    public string $message = '';



    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array
            $word = new Word($frenchTranslation, $englishTranslation);
            array_push($this->words, $word);
        }
    }



    public function run()
    {
        if (!$_SESSION) {
            $_SESSION['score'] = 0;
        }

        // TODO: check for option A or B
        $guessSubmitted = isset($_POST["submit"]) && !empty($_POST["translation"]);
        if (!$guessSubmitted) {
            $this->gameSetup();
        } else {
            $this->guessWasSubmitted();
        }
    }

    private function gameSetup()
    {
        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate
        $this->chosenWord = $this->words[array_rand($this->words, 1)];
        $_SESSION['translation'] = serialize($this->chosenWord);

    }

    private function guessWasSubmitted()
    {
        // Option B: user has just submitted an answer
        $this->chosenWord = unserialize($_SESSION['translation']);
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        $userGuess = $_POST["translation"];

        // TODO: generate a message for the user that can be shown
        if ($this->chosenWord->verify($userGuess) === true) {
            $this->message = "Your answer <b>\"{$userGuess}\"</b> is <b>correct</b>.";
            $_SESSION['score'] += 1;
        } else {
            $this->message = "Your answer <b>\"{$userGuess}\"</b> is <b>not correct</b>. <br> The correct translation is: <b>{$this->chosenWord->translation}</b>.";
            $_SESSION['score'] -= 1;
        }
    }
}