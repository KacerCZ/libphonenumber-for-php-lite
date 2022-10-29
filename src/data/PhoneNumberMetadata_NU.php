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
    'NationalNumberPattern' => '(?:[47]|888\\d)\\d{3}',
    'PossibleLength' =>
    array(
      0 => 4,
      1 => 7,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'fixedLine' =>
  array(
    'NationalNumberPattern' => '[47]\\d{3}',
    'ExampleNumber' => '7012',
    'PossibleLength' =>
    array(
      0 => 4,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'mobile' =>
  array(
    'NationalNumberPattern' => '888[4-9]\\d{3}',
    'ExampleNumber' => '8884012',
    'PossibleLength' =>
    array(
      0 => 7,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'tollFree' =>
  array(
    'PossibleLength' =>
    array(
      0 => -1,
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
    'PossibleLength' =>
    array(
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'voip' =>
  array(
    'PossibleLength' =>
    array(
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array(
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
  'id' => 'NU',
  'countryCode' => 683,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array(
    0 =>
    array(
      'pattern' => '(\\d{3})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array(
        0 => '8',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
  ),
  'intlNumberFormat' =>
  array(
  ),
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => false,
);
