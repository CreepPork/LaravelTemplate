<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute ir jāpieņem.',
    'active_url'           => ':attribute nav pareiza saite.',
    'after'                => ':attribute ir jābūt datumam pēc :date.',
    'after_or_equal'       => ':attribute jabūt datumam pēc vai vienādam ar :date.',
    'alpha'                => ':attribute var tikai sastāvēt no burtiem.',
    'alpha_dash'           => ':attribute var tikai sastāvēt no burtiem, cipariem un no domuzīmēm.',
    'alpha_num'            => ':attribute var tikai sastāvēt no burtiem un cipariem.',
    'array'                => ':attribute ir jabūt masīva formātā.',
    'before'               => ':attribute ir jabūt datumam pirms :date.',
    'before_or_equal'      => ':attribute ir jabūt datumam pirms vai vienādam ar :date.',
    'between'              => [
        'numeric' => ':attribute jabūt no :min līdz :max.',
        'file'    => ':attribute jabūt no :min līdz :max kilobaitiem.',
        'string'  => ':attribute jabūt no :min līdz :max rakstzīmēm.',
        'array'   => ':attribute jabūt no :min līdz :max priekšmetiem.',
    ],
    'boolean'              => ':attribute laukam ir jabūt patiesam vai nepatiesam.',
    'confirmed'            => ':attribute apstiprinājums nesakrīt.',
    'date'                 => ':attribute nav pareizi ievadīts datums.',
    'date_format'          => ':attribute nesakrīt ar formātu :format.',
    'different'            => ':attribute un :other jābūt atšķirīgiem.',
    'digits'               => ':attribute ir jabūt :digits cipariem.',
    'digits_between'       => ':attribute jābūt no :min līdz :max cipariem.',
    'dimensions'           => ':attribute ir nepareizi attēla izmēri.',
    'distinct'             => ':attribute laukam ir dublikāts.',
    'email'                => ':attribute jābūt ēpasta formātā.',
    'exists'               => 'Izvēlētais :attribute ir nederīgs.',
    'file'                 => ':attribute jabūt failam.',
    'filled'               => ':attribute laukam ir jābūt vērtībai.',
    'image'                => ':attribute ir jābūt attēlam.',
    'in'                   => 'Izvēlētais :attribute ir nederīgs.',
    'in_array'             => ':attribute lauks neeksistē :other.',
    'integer'              => ':attribute ir jābūt veselam skaitlim.',
    'ip'                   => ':attribute jābūt derīgai IP adresei.',
    'ipv4'                 => ':attribute jābūt derīgai IPv4 adresei.',
    'ipv6'                 => ':attribute jābūt derīgai IPv6 adresei.',
    'json'                 => ':attribute jābūt derīgai JSON virknei.',
    'max'                  => [
        'numeric' => ':attribute nedrīkst būt vairāk par :max.',
        'file'    => ':attribute nedrīkst būt vairāk par :max kilobaitiem.',
        'string'  => ':attribute nedrīkst būt vairāk par :max rakstzīmēm.',
        'array'   => ':attribute may not have more than :max priekšmetiem.',
    ],
    'mimes'                => ':attribute jābūt failam, kas ir :values formātā.',
    'mimetypes'            => ':attribute jābūt failam, kas ir :values formātā.',
    'min'                  => [
        'numeric' => ':attribute jābūt vismaz :min.',
        'file'    => ':attribute jābūt vismaz :min kilobaitiem.',
        'string'  => ':attribute jābūt vismaz :min rakstzīmēm garam.',
        'array'   => ':attribute jābūt vismaz :min priekšmetiem.',
    ],
    'not_in'               => 'Izvēletais :attribute ir nederīgs.',
    'numeric'              => ':attribute ir jābūt skaitlim.',
    'present'              => ':attribute laukam ir jābūt šeit.',
    'regex'                => ':attribute formāts ir nepareizs.',
    'required'             => ':attribute lauks ir obligāts.',
    'required_if'          => ':attribute lauks ir obligāts, ja :other ir :value.',
    'required_unless'      => ':attribute lauks ir obligāts, ja vien :other pieder pie :values.',
    'required_with'        => ':attribute lauks ir obligāts, kad :values ir klāt.',
    'required_with_all'    => ':attribute lauks ir obligāts, kad :values ir klāt.',
    'required_without'     => ':attribute lauks ir obligāts, ja :values nav klāt.',
    'required_without_all' => ':attribute lauks ir obligāts, ja neviena :values ir klāt.',
    'same'                 => ':attribute un :other ir jāsakrīt.',
    'size'                 => [
        'numeric' => ':attribute vajag būt :size.',
        'file'    => ':attribute vajag būt :size kilobaitiem.',
        'string'  => ':attribute vajag būt :size rakstzīmēm garam.',
        'array'   => ':attribute vajag saturēt :size priekšmetus.',
    ],
    'string'               => ':attribute ir jābūt virknei.',
    'timezone'             => ':attribute ir jābūt derīgai laika joslai.',
    'unique'               => ':attribute jau ir aizņemts.',
    'uploaded'             => ':attribute neizdevās augšupielādēt.',
    'url'                  => ':attribute formāts ir nederīgs.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
