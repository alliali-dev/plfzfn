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

  'accepted' => 'The :attribute must be accepted.',
  'accepted_if' => 'The :attribute must be accepted when :other is :value.',
  'active_url' => 'The :attribute is not a valid URL.',
  'after' => 'The :attribute must be a date after :date.',
  'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
  'alpha' => 'The :attribute must only contain letters.',
  'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
  'alpha_num' => 'The :attribute must only contain letters and numbers.',
  'array' => 'The :attribute must be an array.',
  'before' => 'The :attribute must be a date before :date.',
  'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
  'between' => [
    'numeric' => 'Compris entre :min & :max.',
    'file' => 'Compris entre :min & :max kilobytes.',
    'string' => 'Compris entre :min et :max caracteres.',
    'array' => 'The :attribute must have between :min and :max items.',
  ],
  'boolean' => 'The :attribute field must be true or false.',
  'confirmed' => 'The :attribute confirmation does not match.',
  'current_password' => 'The password is incorrect.',
  'date' => 'The :attribute is not a valid date.',
  'date_equals' => 'The :attribute must be a date equal to :date.',
  'date_format' => 'The :attribute does not match the format :format.',
  'declined' => 'The :attribute must be declined.',
  'declined_if' => 'The :attribute must be declined when :other is :value.',
  'different' => 'The :attribute and :other must be different.',
  'digits' => 'The :attribute must be :digits digits.',
  'digits_between' => 'Compris entre :min & :max digits.',
  'dimensions' => 'dimensions de l\'image invalide  .',
  'distinct' => 'The :attribute field has a duplicate value.',
  'email' => 'The :attribute must be a valid email address.',
  'ends_with' => 'The :attribute must end with one of the following: :values.',
  'enum' => 'The selected :attribute is invalid.',
  'exists' => 'The selected :attribute is invalid.',
  'file' => 'The :attribute must be a file.',
  'filled' => 'The :attribute field must have a value.',
  'gt' => [
    'numeric' => 'The :attribute must be greater than :value.',
    'file' => 'The :attribute must be greater than :value kilobytes.',
    'string' => 'Superieur a :value caracteres.',
    'array' => 'The :attribute must have more than :value items.',
  ],
  'gte' => [
    'numeric' => 'Supérieur ou egal à :value.',
    'file' => 'Supérieur ou egal à :value kilobytes.',
    'string' => 'Supérieur ou egal à :value caractères.',
    'array' => 'The :attribute must have :value items or more.',
  ],
  'image' => 'Ce champs doit etre image.',
  'in' => 'The selected :attribute is invalid.',
  'in_array' => 'The :attribute field does not exist in :other.',
  'integer' => 'Ce champs est entier.',
  'ip' => 'The :attribute must be a valid IP address.',
  'ipv4' => 'The :attribute must be a valid IPv4 address.',
  'ipv6' => 'The :attribute must be a valid IPv6 address.',
  'json' => 'The :attribute must be a valid JSON string.',
  'lt' => [
    'numeric' => 'Moins de :value.',
    'file' => 'Moins de :value kilobytes.',
    'string' => 'Moins de :value characters.',
    'array' => 'The :attribute must have less than :value items.',
  ],
  'lte' => [
    'numeric' => 'Petit ou égal à :value.',
    'file' => 'Petit ou égal à :value kilobytes.',
    'string' => 'Petit ou égal à :value characters.',
    'array' => 'The :attribute must not have more than :value items.',
  ],
  'mac_address' => 'The :attribute must be a valid MAC address.',
  'max' => [
    'numeric' => 'The :attribute must not be greater than :max.',
    'file' => 'The :attribute must not be greater than :max kilobytes.',
    'string' => 'The :attribute must not be greater than :max characters.',
    'array' => 'The :attribute must not have more than :max items.',
  ],
  'mimes' => 'Le fichier doit etre de type: :values.',
  'mimetypes' => 'Le fichier doit etre de type: :values.',
  'min' => [
    'numeric' => 'Ce champs doit etre un nombre de caractere minimum :min.',
    'file' => 'The :attribute must be at least :min kilobytes.',
    'string' => 'The :attribute must be at least :min characters.',
    'array' => 'The :attribute must have at least :min items.',
  ],
  'multiple_of' => 'The :attribute must be a multiple of :value.',
  'not_in' => 'The selected :attribute is invalid.',
  'not_regex' => 'The :attribute format is invalid.',
  'numeric' => 'Ce champs doit etre un nombre.',
  'password' => 'Verifiez le mot de passe.',
  'present' => 'The :attribute field must be present.',
  'prohibited' => 'The :attribute field is prohibited.',
  'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
  'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
  'prohibits' => 'The :attribute field prohibits :other from being present.',
  'regex' => 'Le format est invalide.',
  'required' => 'Ce  champs est requis.',
  'required_array_keys' => 'The :attribute field must contain entries for: :values.',
  'required_if' => 'The :attribute field is required when :other is :value.',
  'required_unless' => 'The :attribute field is required unless :other is in :values.',
  'required_with' => 'The :attribute field is required when :values is present.',
  'required_with_all' => 'The :attribute field is required when :values are present.',
  'required_without' => 'The :attribute field is required when :values is not present.',
  'required_without_all' => 'The :attribute field is required when none of :values are present.',
  'same' => 'The :attribute and :other must match.',
  'size' => [
    'numeric' => 'Ce champs doit etre un nombre de taille :size.',
    'file' => 'Ce champs doit etre un fichier de taille :size kilobytes.',
    'string' => 'The :attribute must be :size characters.',
    'array' => 'Ce tableau doit contenir :size items.',
  ],
  'starts_with' => 'The :attribute must start with one of the following: :values.',
  'string' => 'Une chaine de caractères.',
  'timezone' => 'The :attribute must be a valid timezone.',
  'unique' => 'Saisie invalide.',
  'uploaded' => 'Téléchargement échoué.',
  'url' => 'The :attribute must be a valid URL.',
  'uuid' => 'The :attribute must be a valid UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

  'attributes' => [],

];
