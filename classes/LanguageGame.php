<?php


class LanguageGame
{
    private array $words = [];
    public Word $chosenWord;

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
        // TODO: check for option A or B


        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate
        $this->chosenWord = $this->words[array_rand($this->words, 1)];
        $_SESSION['translation'] = $this->chosenWord;

        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        if(isset($_POST["submit"]) && !empty($_POST["translate"])) {
                $answer = $_POST["translate"];
//                var_dump($answer);
                return $answer;

        }

        // TODO: generate a message for the user that can be shown
        if ($this->chosenWord->verify(answer)===true) {
            $result = "correct";
        } else {
            $result = "not correct";
        }
        var_dump($result);
        return $result;


    }
}