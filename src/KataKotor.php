<?php

namespace Deogw\KataKotorLaravel;

class KataKotor
{
    /**
     * @var array
     */
    protected $listKataKotor;


    public function __construct()
    {
        $this->listKataKotor = array_map('strtolower', config('kata-kotor'));
    }

    /**
     * Check apakah kata yang di input mengandung kata kotor
     *
     * @param  String  $kata
     *
     * @return boolean
     */
    public function check($kata)
    {
        $kata = explode(' ', $kata);

        foreach ($kata as $word) {
            if (in_array(strtolower($word), $this->listKataKotor)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Mengganti huruf vocal dalam kata atau kalimat dengan karakter masking
     *
     * @param  string  $kata
     *
     * @param  string  $masking  (optional)
     *
     * @return string
     */
    public function masking($kata, $masking = '*')
    {
        $words = explode(' ', $kata);
        $bad_words = $this->listKataKotor;
        $new_words = [];

        foreach ($words as $word) {
            if (in_array(strtolower($word), $bad_words)) {
                $replaceString = str_ireplace(['a', 'i', 'u', 'e', 'o'], $masking, $word);

                if (!strpos($replaceString, $masking)) {
                    $new_words[] = substr_replace($word, $masking, -1);
                } else {
                    $new_words[] = $replaceString;
                }

            } else {
                $new_words[] = $word;
            }
        }
        return implode(' ', $new_words);
    }
}
