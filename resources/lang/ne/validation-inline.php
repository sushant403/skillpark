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

    'accepted'        => 'यो क्षेत्र स्वीकार गर्नु पर्छ।',
    'active_url'      => 'यो मान्य URL होईन।',
    'after'           => 'यो मिति पछाडि मिति हुनुपर्दछ।',
    'after_or_equal'  => 'यो मिति पछाडि वा बराबर मिति हुनुपर्दछ।',
    'alpha'           => 'यो फिल्डमा अक्षरहरू मात्र समावेश हुन सक्छ।',
    'alpha_dash'      => 'यस फाँटमा केवल अक्षरहरू, संख्याहरू, ड्यासहरू र अन्डरस्कोरहरू समावेश हुन सक्छ।',
    'alpha_num'       => 'यो फिल्डमा अक्षर र संख्याहरू मात्र समावेश हुन सक्छ।',
    'array'           => 'यो फिल्ड एरे हुनै पर्छ।',
    'before'          => 'यो मिति भन्दा अघि मिति हुनुपर्दछ।',
    'before_or_equal' => 'उसको मिति भन्दा अघि वा बराबर मिति हुनुपर्दछ।',
    'between'         => [
        'numeric' => 'यो मान बीचमा हुनुपर्दछ: न्यूनतम र: अधिकतम।',
        'file'    => 'यो फाईल बीचमा हुनुपर्दछ: न्यूनतम र: अधिकतम किलोबाइट्स।',
        'string'  => 'यो स्ट्रिङ्ग: बीचमा हुनुपर्दछ: न्यूनतम र: अधिकतम क्यारेक्टरहरू।',
        'array'   => 'यस सामग्रीको बीच: न्यूनतम र: अधिकतम आईटमहरू हुनुपर्दछ।',
    ],
    'boolean'        => 'यो क्षेत्र सहि वा गलत हुन पर्छ।',
    'confirmed'      => 'पुष्टिकरण मेल खाँदैन।',
    'date'           => 'यो मान्य मिति छैन।',
    'date_equals'    => 'यो मिति बराबर मिति हुनुपर्दछ।',
    'date_format'    => 'यो ढाँचासँग मेल खाँदैन: ढाँचा।',
    'different'      => 'यो मान: अन्य भन्दा फरक हुनुपर्छ।',
    'digits'         => 'यो हुनु पर्छ: अंक अंक।',
    'digits_between' => 'यो न्यूनतम र: अधिकतमको बिचमा हुनुपर्दछ।',
    'dimensions'     => 'यस छविसँग अवैध आयामहरू छन्।',
    'distinct'       => 'यस फिल्डको नक्कल मान छ।',
    'email'          => 'यो मान्य ईमेल ठेगाना हुनुपर्दछ।',
    'ends_with'      => 'यो निम्न मध्ये एक संग समाप्त हुनुपर्दछ: मानहरू।',
    'exists'         => 'चयनित मान अवैध छ।',
    'file'           => 'सामग्री फाईल हुनुपर्दछ।',
    'filled'         => 'यस फिल्डको मान हुनुपर्दछ।',
    'gt'             => [
        'numeric' => ' मान: मान भन्दा ठूलो हुनुपर्दछ।।',
        'file'    => ' फाईल साइज ठूलो हुनुपर्दछ: मान किलोबाइट्स।',
        'string'  => ' स्ट्रिङ्ग भन्दा ठूलो हुनुपर्दछ: मान क्यारेक्टरहरू।',
        'array'   => ' सामग्रीसँग भन्दा बढि हुनुपर्दछ: मान आईटमहरू।',
    ],
    'gte' => [
        'numeric' => 'मान ठूलो वा बराबर हुनुपर्छ: मान।',
        'file'    => 'फाईल आकार ठूलो वा बराबर हुनुपर्छ: मान किलोबाइट।',
        'string'  => 'स्ट्रिङ्ग ठूलो वा बराबर हुनुपर्दछ: मान क्यारेक्टरहरू।',
        'array'   => 'सामग्री हुनुपर्दछ: मान आईटमहरू वा बढि।',
    ],
    'image'    => 'यो छवि हुनुपर्दछ।',
    'in'       => 'चयनित मान अवैध छ।',
    'in_array' => 'यो मान यसमा अवस्थित छैन: अन्य।',
    'integer'  => 'यो पूर्णांक हुनुपर्दछ।',
    'ip'       => 'यो मान्य IP ठेगाना हुनुपर्दछ।',
    'ipv4'     => 'यो मान्य IPv4 ठेगाना हुनुपर्दछ',
    'ipv6'     => 'यो मान्य IPv6 ठेगाना हुनुपर्दछ',
    'json'     => 'यो दिइएको मान्य JSON स्ट्रिङ्ग हुनुपर्छ।',
    'lt'       => [
        'numeric' => 'मान ठूलो वा बराबर हुनुपर्छ: मान।',
        'file'    => 'फाईल आकार ठूलो वा बराबर हुनुपर्छ: मान किलोबाइट।',
        'string'  => 'स्ट्रिङ्ग ठूलो वा बराबर हुनुपर्दछ: मान क्यारेक्टरहरू।',
        'array'   => 'सामग्री हुनुपर्दछ: मान आईटमहरू वा बढि।',
    ],
    'lte' => [
        'numeric' => 'मान सानाे वा बराबर हुनुपर्छ: मान।',
        'file'    => 'फाईल आकार सानाे वा बराबर हुनुपर्छ: मान किलोबाइट।',
        'string'  => 'स्ट्रिङ्ग सानाे वा बराबर हुनुपर्दछ: मान क्यारेक्टरहरू।',
        'array'   => 'सामग्री आइटम भन्दा बढी हुनु हुँदैन: मान आईटमहरू।',
    ],
    'max' => [
        'numeric' => 'मान अधिकतम हुन सक्दैन: अधिकतम।',
        'file'    => 'फाईल आकार भन्दा बढी नहुन सक्दछ: अधिकतम किलोबाइट्स।',
        'string'  => 'स्ट्रिङ्ग भन्दा बढी नहुन सक्दछ: अधिकतम क्यारेक्टरहरू।',
        'array'   => 'सामग्रीसँग अधिकतम आईटमहरू हुन सक्दैनन्।',
    ],
    'mimes'     => 'यो प्रकारको: फाइल मानको हुनुपर्दछ।',
    'mimetypes' => 'यो प्रकारको: फाइल मानको हुनुपर्दछ।',
    'min'       => [
        'numeric' => 'मान कम्तिमा हुनुपर्दछ: मिनेट।',
        'file'    => 'फाईल आकार कम्तिमा हुनुपर्दछ: मिनेट किलोबाइट्स।',
        'string'  => 'स्ट्रिङ्ग कम्तिमा हुनुपर्दछ: मिनेट वर्णहरू।',
        'array'   => 'मान कम्तिमा पनि हुनुपर्दछ: मिनेट आईटमहरू।',
    ],
    'not_in'               => 'चयनित मान अवैध छ।',
    'not_regex'            => 'यो ढाँचा अवैध छ।',
    'numeric'              => 'यो संख्या हुनुपर्दछ।',
    'password'             => 'पासवर्ड गलत छ।',
    'present'              => 'यो फिल्ड उपस्थित हुनुपर्दछ।',
    'regex'                => 'यो ढाँचा अवैध छ।',
    'required'             => 'यो फिल्ड आवाश्यक छ।',
    'required_if'          => 'यो फिल्ड आवश्यक हुन्छ जब: अन्य हो: मान।',
    'required_unless'      => 'यस फिल्ड आवाश्यक हुन्छ: अन्यमा मानहरू।',
    'required_with'        => 'यो फिल्ड आवाश्यक हुन्छ जब: मानहरू अवस्थित हुन्छन्।',
    'required_with_all'    => 'यो फिल्ड आवश्यक छ: मानहरू अवस्थित हुँदा।',
    'required_without'     => 'यो फिल्ड आवाश्यक हुन्छ जब: मानहरू अवस्थित हुँदैन।',
    'required_without_all' => 'यो फिल्ड आवश्यक छ जब कुनै पनि: मानहरू अवस्थित हुँदैनन्।',
    'same'                 => 'यस फिल्डको मान एक: अर्कोसँग मिल्नु पर्छ।',
    'size'                 => [
        'numeric' => 'मान हुनुपर्दछ: साइज।',
        'file'    => 'फाईल साइज हुनुपर्दछ: साइज किलोबाइट्स।',
        'string'  => 'स्ट्रिङ्ग हुनुपर्दछ: साइज क्यारेक्टरहरू।',
        'array'   => 'सामग्री सामिल हुनुपर्दछ: साइज आईटमहरू।',
    ],
    'starts_with' => 'यो निम्न मध्ये एकबाट सुरू हुनुपर्दछ: मानहरू।',
    'string'      => 'यो स्ट्रिङ्ग हुनै पर्छ।',
    'timezone'    => 'यो मान्य क्षेत्र हुनुपर्दछ।',
    'unique'      => 'यो पहिले नै लिइसकिएको छ।',
    'uploaded'    => 'यो अपलोड गर्न असफल भयो।',
    'url'         => 'यो ढाँचा अवैध छ।',
    'uuid'        => 'यो वैध UID हुनु पर्छ।',

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

];