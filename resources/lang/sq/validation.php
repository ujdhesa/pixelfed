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

    'accepted'             => ':attribute duhet pranuar.',
    'active_url'           => ':attribute s’është URL e vlefshme.',
    'after'                => ':attribute duhet të jetë një datë pas :date.',
    'after_or_equal'       => ':attribute duhet të jetë një datë pas :date, ose e njëjtë me të.',
    'alpha'                => ':attribute mund të përmbajë vetëm shkronja.',
    'alpha_dash'           => ':attribute mund të përmbajë vetëm shkronja, numra dhe vija ndarëse në mes.',
    'alpha_num'            => ':attribute mund të përmbajë vetëm shkronja dhe numra.',
    'array'                => ':attribute duhet të jetë një matricë.',
    'before'               => ':attribute duhet të jetë një datë para :date.',
    'before_or_equal'      => ':attribute duhet të jetë një datë para :date, ose e njëjtë me të.',
    'between'              => [
        'numeric' => ':attribute duhet të jetë mes :min dhe :max.',
        'file'    => ':attribute duhet të jetë mes :min dhe :max kilobajtesh.',
        'string'  => ':attribute duhet të jetë mes :min dhe :max shenjash.',
        'array'   => ':attribute duhet të jetë mes :min dhe :max elementësh.',
    ],
    'boolean'              => 'Fusha e :attribute duhet të jetë “true”, ose “false”.',
    'confirmed'            => 'Ripohimi për :attribute s’përkon.',
    'date'                 => ':attribute s’është datë e vlefshme.',
    'date_format'          => ':attribute s’përkon me formatin :format.',
    'different'            => ':attribute dhe :other duhet të jenë të ndryshëm.',
    'digits'               => ':attribute duhet të jetë :digits shifra.',
    'digits_between'       => ':attribute duhet të jetë mes :min dhe :max shifrash.',
    'dimensions'           => ':attribute ka përmasa të pavlefshme figure.',
    'distinct'             => 'Fusha :attribute ka një vlerë të përsëdytur.',
    'email'                => ':attribute duhet të jetë një adresë email e vlefshme.',
    'exists'               => ':attribute i përzgjedhur është i pavlefshëm.',
    'file'                 => ':attribute duhet të jetë një kartelë.',
    'filled'               => 'Fusha :attribute duhet të ketë një vlerë.',
    'image'                => ':attribute duhet të jetë një figurë.',
    'in'                   => ':attribute i përzgjedhur është i pavlefshëm.',
    'in_array'             => 'Fusha :attribute s’ekziston te :other.',
    'integer'              => ':attribute duhet të jetë një numër i plotë.',
    'ip'                   => ':attribute duhet të jetë një adresë IP e vlefshme.',
    'ipv4'                 => ':attribute duhet të jetë një adresë IPv4 e vlefshme.',
    'ipv6'                 => ':attribute duhet të jetë një adresë IPv6 e vlefshme.',
    'json'                 => ':attribute duhet të jetë një varg JSON i vlefshëm.',
    'max'                  => [
        'numeric' => ':attribute s’mund të jetë më i madh se :max.',
        'file'    => ':attribute s’mund të jetë më e madhe se :max kilobajte.',
        'string'  => ':attribute s’mund të jetë më e madhe se :max shenja.',
        'array'   => ':attribute s’mund të ketë më shumë se :max elementë.',
    ],
    'mimes'                => ':attribute duhet të jetë një kartelë e llojit: :values.',
    'mimetypes'            => ':attribute duhet të jetë një kartelë e llojit: :values.',
    'min'                  => [
        'numeric' => ':attribute duhet të jetë të paktën :min.',
        'file'    => ':attribute duhet të jetë e pakta :min kilobajte.',
        'string'  => ':attribute duhete të jetë e pakta :min shenja.',
        'array'   => ':attribute duhet të ketë të paktën :min elementë.',
    ],
    'not_in'               => ':attribute i përzgjedhur është i pavlefshëm.',
    'not_regex'            => 'Formati për :attribute është i pavlefshëm.',
    'numeric'              => ':attribute duhet të jetë një numër.',
    'present'              => 'Fusha :attribute duhet të jetë e pranishme.',
    'regex'                => 'Formati :attribute është i pavlefshëm.',
    'required'             => 'Fusha :attribute është e domosdoshme.',
    'required_if'          => 'Fusha :attribute është e domosdoshme, kur :other është :value.',
    'required_unless'      => 'Fusha :attribute është e domosdoshme, veç në u gjendtë :other te :values.',
    'required_with'        => 'Fusha :attribute është e domosdoshme, kur :values është e pranishme.',
    'required_with_all'    => 'Fusha :attribute është e domosdoshme, kur :values është e pranishme.',
    'required_without'     => 'Fusha :attribute është e domosdoshme, kur :values s’është e pranishme.',
    'required_without_all' => 'Fusha :attribute është e domosdoshme, kur s’është e pranishme asnjë prej :values.',
    'same'                 => ':attribute dhe :other duhet të përkojnë.',
    'size'                 => [
        'numeric' => ':attribute duhet të jetë :size.',
        'file'    => ':attribute duhet të jetë :size kilobajte.',
        'string'  => ':attribute duhet të jetë :size shenja.',
        'array'   => ':attribute duhet të përmbajë :size elementë.',
    ],
    'string'               => ':attribute duhet të jetë një varg.',
    'timezone'             => ':attribute duhet të jetë një zonë e vlefshme.',
    'unique'               => ':attribute është marrë tashmë.',
    'uploaded'             => ':attribute s’arriti të ngarkohej.',
    'url'                  => 'Formati për :attribute është i pavlefshëm.',

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
