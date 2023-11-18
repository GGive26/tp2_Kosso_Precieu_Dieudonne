<?php

function streetIsValid(string $street): array
{
    $result = [
        'isValid' => true,
        'msg' => ''

    ];

    $userInDB = getUserByName($street);

    var_dump($userInDB);

    echo '<br><br>';
    echo strlen($street);
    if (strlen($street) < 5) {
        $result = [
            'isValid' => false,
            'msg' => 'Le nom utilisé est trop court'

        ];
    } elseif (strlen($street) > 25) {
        echo '<br><br> Dans mon if strlen >20';
        echo strlen($street);
        $result = [
            'isValid' => false,
            'msg' => 'Le nom utilisé est trop long'

        ];
    } elseif ($userInDB) {

        echo '<br><br>';
        var_dump($userInDB);

        $result = [
            'isValid' => false,
            'msg' => 'Le nom est déjà utilisé'

        ];
    }
    return $result;
}

function streetNbIsValid(int $streetNb): array
{

    $isValid = true;
    if ($streetNb < 1) {
        return [
            'isValid' => false,
            'msg' => 'le numero de rue est trop court'
        ];
    } elseif ($streetNb > 5000) {
        $isValid = false;
        return [
            'isValid' => $isValid,
            'msg' => 'votre numero de rue de rue est superieur a ceux indiquer'
        ];
    } else {
        $isValid = true;
        return [
            'isValid' => $isValid,
            'msg' => ''
        ];
    }
}

function zipcodeIsValid(string $zipcode): array
{

    $isValid = true;
    if ($zipcode < 6 || $zipcode > 6) {
        return [
            'isValid' => false,
            'msg' => 'zipcode incorrect'
        ];
    } else {
        $isValid = true;
        return [
            'isValid' => $isValid,
            'msg' => ''
        ];
    }
}
