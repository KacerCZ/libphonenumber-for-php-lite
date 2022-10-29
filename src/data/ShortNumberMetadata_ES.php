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
    'NationalNumberPattern' => '[0-379]\\d{2,5}',
    'PossibleLength' =>
    array(
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 6,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'tollFree' =>
  array(
    'NationalNumberPattern' => '0(?:16|6[57]|8[58])|1(?:006|12|[3-7]\\d\\d)|(?:116|20\\d)\\d{3}',
    'ExampleNumber' => '016',
    'PossibleLength' =>
    array(
      0 => 3,
      1 => 4,
      2 => 6,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'premiumRate' =>
  array(
    'NationalNumberPattern' => '[12]2\\d{1,4}|90(?:5\\d|7)|(?:118|2(?:[357]\\d|80)|3[357]\\d)\\d\\d|[79]9[57]\\d{3}',
    'ExampleNumber' => '120',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'emergency' =>
  array(
    'NationalNumberPattern' => '08[58]|112',
    'ExampleNumber' => '085',
    'PossibleLength' =>
    array(
      0 => 3,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'shortCode' =>
  array(
    'NationalNumberPattern' => '0(?:1[0-26]|6[0-257]|8[058]|9[12])|1(?:0[03-57]\\d{1,3}|1(?:2|6(?:000|111)|8\\d\\d)|2\\d{1,4}|[3-9]\\d\\d)|2(?:2\\d{1,4}|80\\d\\d)|90(?:5[124578]|7)|1(?:3[34]|77)|(?:2[01]\\d|[79]9[57])\\d{3}|[23][357]\\d{3}',
    'ExampleNumber' => '010',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'standardRate' =>
  array(
    'NationalNumberPattern' => '0(?:[16][0-2]|80|9[12])|21\\d{4}',
    'ExampleNumber' => '010',
    'PossibleLength' =>
    array(
      0 => 3,
      1 => 6,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'carrierSpecific' =>
  array(
    'NationalNumberPattern' => '1(?:3[34]|77)|[12]2\\d{1,4}',
    'ExampleNumber' => '120',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'smsServices' =>
  array(
    'NationalNumberPattern' => '(?:2[0-2]\\d|3[357]|[79]9[57])\\d{3}|2(?:[2357]\\d|80)\\d\\d',
    'ExampleNumber' => '22000',
    'PossibleLength' =>
    array(
      0 => 5,
      1 => 6,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'id' => 'ES',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array(
  ),
  'intlNumberFormat' =>
  array(
  ),
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
);
