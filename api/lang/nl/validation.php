<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Taalregels voor Validatie
    |--------------------------------------------------------------------------
    |
    | De volgende taalregels bevatten de standaardfoutmeldingen die worden gebruikt door
    | de validatieklasse. Sommige van deze regels hebben meerdere versies, zoals
    | de regels voor grootte. Voel je vrij om elk van deze berichten hier aan te passen.
    |
    */

    'accepted' => 'Het veld :attribute moet worden geaccepteerd.',
    'accepted_if' => 'Het veld :attribute moet worden geaccepteerd als :other :value is.',
    'active_url' => 'Het veld :attribute moet een geldige URL zijn.',
    'after' => 'Het veld :attribute moet een datum zijn na :date.',
    'after_or_equal' => 'Het veld :attribute moet een datum zijn na of gelijk aan :date.',
    'alpha' => 'Het veld :attribute mag alleen letters bevatten.',
    'alpha_dash' => 'Het veld :attribute mag alleen letters, cijfers, streepjes en underscores bevatten.',
    'alpha_num' => 'Het veld :attribute mag alleen letters en cijfers bevatten.',
    'array' => 'Het veld :attribute moet een array zijn.',
    'ascii' => 'Het veld :attribute mag alleen enkelbyte alfanumerieke tekens en symbolen bevatten.',
    'before' => 'Het veld :attribute moet een datum zijn voor :date.',
    'before_or_equal' => 'Het veld :attribute moet een datum zijn voor of gelijk aan :date.',
    'between' => [
        'array' => 'Het veld :attribute moet tussen :min en :max items bevatten.',
        'file' => 'Het veld :attribute moet tussen :min en :max kilobytes zijn.',
        'numeric' => 'Het veld :attribute moet tussen :min en :max zijn.',
        'string' => 'Het veld :attribute moet tussen :min en :max tekens zijn.',
    ],
    'boolean' => 'Het veld :attribute moet waar of onwaar zijn.',
    'can' => 'Het veld :attribute bevat een ongeautoriseerde waarde.',
    'confirmed' => 'De bevestiging van het :attribute veld komt niet overeen.',
    'current_password' => 'Het wachtwoord is onjuist.',
    'date' => 'Het veld :attribute moet een geldige datum zijn.',
    'date_equals' => 'Het veld :attribute moet een datum zijn gelijk aan :date.',
    'date_format' => 'Het veld :attribute moet overeenkomen met het formaat :format.',
    'decimal' => 'Het veld :attribute moet :decimal decimalen bevatten.',
    'declined' => 'Het veld :attribute moet worden geweigerd.',
    'declined_if' => 'Het veld :attribute moet worden geweigerd als :other :value is.',
    'different' => 'Het veld :attribute en :other moeten verschillend zijn.',
    'digits' => 'Het veld :attribute moet :digits cijfers bevatten.',
    'digits_between' => 'Het veld :attribute moet tussen :min en :max cijfers bevatten.',
    'dimensions' => 'Het veld :attribute heeft ongeldige afbeeldingsafmetingen.',
    'distinct' => 'Het veld :attribute heeft een dubbele waarde.',
    'doesnt_end_with' => 'Het veld :attribute mag niet eindigen met een van de volgende: :values.',
    'doesnt_start_with' => 'Het veld :attribute mag niet beginnen met een van de volgende: :values.',
    'email' => 'Het veld :attribute moet een geldig e-mailadres zijn.',
    'ends_with' => 'Het veld :attribute moet eindigen met een van de volgende: :values.',
    'enum' => 'Het geselecteerde :attribute is ongeldig.',
    'exists' => 'Het geselecteerde :attribute is ongeldig.',
    'extensions' => 'Het veld :attribute moet een van de volgende extensies hebben: :values.',
    'file' => 'Het veld :attribute moet een bestand zijn.',
    'filled' => 'Het veld :attribute moet een waarde hebben.',
    'gt' => [
        'array' => 'Het veld :attribute moet meer dan :value items bevatten.',
        'file' => 'Het veld :attribute moet groter zijn dan :value kilobytes.',
        'numeric' => 'Het veld :attribute moet groter zijn dan :value.',
        'string' => 'Het veld :attribute moet groter zijn dan :value tekens.',
    ],
    'gte' => [
        'array' => 'Het veld :attribute moet :value items of meer bevatten.',
        'file' => 'Het veld :attribute moet groter zijn dan of gelijk zijn aan :value kilobytes.',
        'numeric' => 'Het veld :attribute moet groter zijn dan of gelijk zijn aan :value.',
        'string' => 'Het veld :attribute moet groter zijn dan of gelijk zijn aan :value tekens.',
    ],
    'hex_color' => 'Het veld :attribute moet een geldige hexadecimale kleur zijn.',
    'image' => 'Het veld :attribute moet een afbeelding zijn.',
    'in' => 'Het geselecteerde :attribute is ongeldig.',
    'in_array' => 'Het veld :attribute moet bestaan in :other.',
    'integer' => 'Het veld :attribute moet een geheel getal zijn.',
    'ip' => 'Het veld :attribute moet een geldig IP-adres zijn.',
    'ipv4' => 'Het veld :attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => 'Het veld :attribute moet een geldig IPv6-adres zijn.',
    'json' => 'Het veld :attribute moet een geldige JSON-string zijn.',
    'lowercase' => 'Het veld :attribute moet in kleine letters zijn.',
    'lt' => [
        'array' => 'Het veld :attribute moet minder dan :value items bevatten.',
        'file' => 'Het veld :attribute moet kleiner zijn dan :value kilobytes.',
        'numeric' => 'Het veld :attribute moet kleiner zijn dan :value.',
        'string' => 'Het veld :attribute moet kleiner zijn dan :value tekens.',
    ],
    'lte' => [
        'array' => 'Het veld :attribute mag niet meer dan :value items bevatten.',
        'file' => 'Het veld :attribute moet kleiner zijn dan of gelijk zijn aan :value kilobytes.',
        'numeric' => 'Het veld :attribute moet kleiner zijn dan of gelijk zijn aan :value.',
        'string' => 'Het veld :attribute moet kleiner zijn dan of gelijk zijn aan :value tekens.',
    ],
    'mac_address' => 'Het veld :attribute moet een geldig MAC-adres zijn.',
    'max' => [
        'array' => 'Het veld :attribute mag niet meer dan :max items bevatten.',
        'file' => 'Het veld :attribute mag niet groter zijn dan :max kilobytes.',
        'numeric' => 'Het veld :attribute mag niet groter zijn dan :max.',
        'string' => 'Het veld :attribute mag niet groter zijn dan :max tekens.',
    ],
    'max_digits' => 'Het veld :attribute mag niet meer dan :max cijfers bevatten.',
    'mimes' => 'Het veld :attribute moet een bestand zijn van het type: :values.',
    'mimetypes' => 'Het veld :attribute moet een bestand zijn van het type: :values.',
    'min' => [
        'array' => 'Het veld :attribute moet ten minste :min items bevatten.',
        'file' => 'Het veld :attribute moet minimaal :min kilobytes zijn.',
        'numeric' => 'Het veld :attribute moet minimaal :min zijn.',
        'string' => 'Het veld :attribute moet minimaal :min tekens zijn.',
    ],
    'min_digits' => 'Het veld :attribute moet minimaal :min cijfers bevatten.',
    'missing' => 'Het veld :attribute moet ontbreken.',
    'missing_if' => 'Het veld :attribute moet ontbreken als :other :value is.',
    'missing_unless' => 'Het veld :attribute moet ontbreken tenzij :other :value is.',
    'missing_with' => 'Het veld :attribute moet ontbreken als :values aanwezig is.',
    'missing_with_all' => 'Het veld :attribute moet ontbreken als :values aanwezig zijn.',
    'multiple_of' => 'Het veld :attribute moet een veelvoud van :value zijn.',
    'not_in' => 'Het geselecteerde :attribute is ongeldig.',
    'not_regex' => 'Het formaat van het veld :attribute is ongeldig.',
    'numeric' => 'Het veld :attribute moet een nummer zijn.',
    'password' => [
        'letters' => 'Het veld :attribute moet ten minste één letter bevatten.',
        'mixed' => 'Het veld :attribute moet ten minste één hoofdletter en één kleine letter bevatten.',
        'numbers' => 'Het veld :attribute moet ten minste één nummer bevatten.',
        'symbols' => 'Het veld :attribute moet ten minste één symbool bevatten.',
        'uncompromised' => 'Het opgegeven :attribute is verschenen in een datalek. Kies alstublieft een ander :attribute.',
    ],
    'present' => 'Het veld :attribute moet aanwezig zijn.',
    'present_if' => 'Het veld :attribute moet aanwezig zijn als :other :value is.',
    'present_unless' => 'Het veld :attribute moet aanwezig zijn tenzij :other :value is.',
    'present_with' => 'Het veld :attribute moet aanwezig zijn als :values aanwezig is.',
    'present_with_all' => 'Het veld :attribute moet aanwezig zijn als :values aanwezig zijn.',
    'prohibited' => 'Het veld :attribute is verboden.',
    'prohibited_if' => 'Het veld :attribute is verboden als :other :value is.',
    'prohibited_unless' => 'Het veld :attribute is verboden tenzij :other :values is.',
    'prohibits' => 'Het veld :attribute verbiedt dat :other aanwezig is.',
    'regex' => 'Het formaat van het veld :attribute is ongeldig.',
    'required' => 'Het veld :attribute is verplicht.',
    'required_array_keys' => 'Het veld :attribute moet invoeren bevatten voor: :values.',
    'required_if' => 'Het veld :attribute is verplicht als :other :value is.',
    'required_if_accepted' => 'Het veld :attribute is verplicht als :other is geaccepteerd.',
    'required_unless' => 'Het veld :attribute is verplicht tenzij :other in :values is.',
    'required_with' => 'Het veld :attribute is verplicht als :values aanwezig is.',
    'required_with_all' => 'Het veld :attribute is verplicht als :values aanwezig zijn.',
    'required_without' => 'Het veld :attribute is verplicht als :values niet aanwezig is.',
    'required_without_all' => 'Het veld :attribute is verplicht als geen van :values aanwezig is.',
    'same' => 'Het veld :attribute en :other moeten overeenkomen.',
    'size' => [
        'array' => 'Het veld :attribute moet :size items bevatten.',
        'file' => 'Het veld :attribute moet :size kilobytes zijn.',
        'numeric' => 'Het veld :attribute moet :size zijn.',
        'string' => 'Het veld :attribute moet :size tekens zijn.',
    ],
    'starts_with' => 'Het veld :attribute moet beginnen met een van de volgende: :values.',
    'string' => 'Het veld :attribute moet een string zijn.',
    'timezone' => 'Het veld :attribute moet een geldige tijdzone zijn.',
    'unique' => 'Het :attribute is al in gebruik.',
    'uploaded' => 'Het :attribute uploaden is mislukt.',
    'uppercase' => 'Het veld :attribute moet hoofdletters bevatten.',
    'url' => 'Het veld :attribute moet een geldige URL zijn.',
    'ulid' => 'Het veld :attribute moet een geldige ULID zijn.',
    'uuid' => 'Het veld :attribute moet een geldige UUID zijn.',

    /*
    |--------------------------------------------------------------------------
    | Aangepaste Validatie Taalregels
    |--------------------------------------------------------------------------
    |
    | Hier kunt u aangepaste validatieberichten voor attributen opgeven met de
    | conventie "attribuut.rule" om de regels te benoemen. Dit maakt het snel
    | specificeren van een specifieke aangepaste taalregel voor een bepaalde attribuutregel.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'aangepast-bericht',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Aangepaste Attributen voor Validatie
    |--------------------------------------------------------------------------
    |
    | De volgende taalregels worden gebruikt om onze attribuutplaatsaanduiding te vervangen
    | door iets leesbaarders zoals "E-mailadres" in plaats van "email". Dit helpt ons eenvoudig
    | ons bericht expressiever te maken.
    |
    */

    'attributes' => [],

];
