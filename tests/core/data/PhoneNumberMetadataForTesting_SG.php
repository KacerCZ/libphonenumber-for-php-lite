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
    'NationalNumberPattern' => '[13689]\\d{7,10}',
    'PossibleLength' =>
    array(
      0 => 8,
      1 => 10,
      2 => 11,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'fixedLine' =>
  array(
    'NationalNumberPattern' => '[36]\\d{7}',
    'ExampleNumber' => '31234567',
    'PossibleLength' =>
    array(
      0 => 8,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'mobile' =>
  array(
    'NationalNumberPattern' => '[89]\\d{7}',
    'ExampleNumber' => '81234567',
    'PossibleLength' =>
    array(
      0 => 8,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'tollFree' =>
  array(
    'NationalNumberPattern' => '1?800\\d{7}',
    'ExampleNumber' => '8001234567',
    'PossibleLength' =>
    array(
      0 => 10,
      1 => 11,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'premiumRate' =>
  array(
    'NationalNumberPattern' => '1900\\d{7}',
    'ExampleNumber' => '19001234567',
    'PossibleLength' =>
    array(
      0 => 11,
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
  'id' => 'SG',
  'countryCode' => 65,
  'internationalPrefix' => '0[0-3][0-9]',
  'nationalPrefixForParsing' => '777777',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array(
    0 =>
    array(
      'pattern' => '(\\d{4})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array(
        0 => '[369]|8[1-9]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 =>
    array(
      'pattern' => '(\\d{4})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array(
        0 => '1[89]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    2 =>
    array(
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array(
        0 => '800',
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
