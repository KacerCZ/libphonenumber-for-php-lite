<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return array(
  'generalDesc' =>
  array(
    'NationalNumberPattern' => '(?:[58]\\d\\d|649|900)\\d{7}',
    'PossibleLength' =>
    array(
      0 => 10,
    ),
    'PossibleLengthLocalOnly' =>
    array(
      0 => 7,
    ),
  ),
  'fixedLine' =>
  array(
    'NationalNumberPattern' => '649(?:266|712|9(?:4\\d|50))\\d{4}',
    'ExampleNumber' => '6497121234',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
      0 => 7,
    ),
  ),
  'mobile' =>
  array(
    'NationalNumberPattern' => '649(?:2(?:3[129]|4[1-79])|3\\d\\d|4[34][1-3])\\d{4}',
    'ExampleNumber' => '6492311234',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
      0 => 7,
    ),
  ),
  'tollFree' =>
  array(
    'NationalNumberPattern' => '8(?:00|33|44|55|66|77|88)[2-9]\\d{6}',
    'ExampleNumber' => '8002345678',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'premiumRate' =>
  array(
    'NationalNumberPattern' => '900[2-9]\\d{6}',
    'ExampleNumber' => '9002345678',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'sharedCost' =>
  array(
    'PossibleLength' =>
    array(
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'personalNumber' =>
  array(
    'NationalNumberPattern' => '52(?:3(?:[2-46-9][02-9]\\d|5(?:[02-46-9]\\d|5[0-46-9]))|4(?:[2-478][02-9]\\d|5(?:[034]\\d|2[024-9]|5[0-46-9])|6(?:0[1-9]|[2-9]\\d)|9(?:[05-9]\\d|2[0-5]|49)))\\d{4}|52[34][2-9]1[02-9]\\d{4}|5(?:00|2[125-7]|33|44|66|77|88)[2-9]\\d{6}',
    'ExampleNumber' => '5002345678',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'voip' =>
  array(
    'NationalNumberPattern' => '649(?:71[01]|966)\\d{4}',
    'ExampleNumber' => '6497101234',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
      0 => 7,
    ),
  ),
  'pager' =>
  array(
    'PossibleLength' =>
    array(
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'uan' =>
  array(
    'PossibleLength' =>
    array(
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'voicemail' =>
  array(
    'PossibleLength' =>
    array(
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'noInternationalDialling' =>
  array(
    'PossibleLength' =>
    array(
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'id' => 'TC',
  'countryCode' => 1,
  'internationalPrefix' => '011',
  'nationalPrefix' => '1',
  'nationalPrefixForParsing' => '1|([2-479]\\d{6})$',
  'nationalPrefixTransformRule' => '649$1',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array(
  ),
  'intlNumberFormat' =>
  array(
  ),
  'mainCountryForCode' => false,
  'leadingDigits' => '649',
  'mobileNumberPortableRegion' => true,
);
