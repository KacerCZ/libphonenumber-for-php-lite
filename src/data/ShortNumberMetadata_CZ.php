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
    'NationalNumberPattern' => '1\\d{2,5}',
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
    'NationalNumberPattern' => '1(?:1(?:2|6(?:00[06]|1(?:11|23)))|5[0568])',
    'ExampleNumber' => '112',
    'PossibleLength' =>
    array(
      0 => 3,
      1 => 6,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'premiumRate' =>
  array(
    'PossibleLength' =>
    array(
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'emergency' =>
  array(
    'NationalNumberPattern' => '1(?:12|5[0568])',
    'ExampleNumber' => '112',
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
    'NationalNumberPattern' => '1(?:1(?:2|8\\d)|(?:2|3\\d)\\d{2,3}|5[0568]|99)|1(?:16|4)\\d{3}',
    'ExampleNumber' => '112',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'standardRate' =>
  array(
    'PossibleLength' =>
    array(
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'carrierSpecific' =>
  array(
    'PossibleLength' =>
    array(
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'smsServices' =>
  array(
    'PossibleLength' =>
    array(
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'id' => 'CZ',
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
