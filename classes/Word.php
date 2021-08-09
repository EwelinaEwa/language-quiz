<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    public string $frenchWord;
    public string $translation;
//    public string $frenchWord = $words[array_rand($words, 1)];
//    public string $translation = isset($_POST('translation'));

    public function __construct($frenchWord, $translation)
    {
        $this->frenchWord = $frenchWord;
        $this->translation = $translation;
    }

    public function verify(string $answer)
    {
        // TODO: use this function to verify if the provided answer by the user matches the correct one
//        if ($answer == $this->translation) {
//           $result = "Your answer is correct";
//        } else {
//            $result = "Your answer is incorrect. <br> The correct answer is: {$this->translation}." ;
//        }
//        return $result;

        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}