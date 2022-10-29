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
    'NationalNumberPattern' => '(?:[12]\\d|33|44|902)\\d{7}|8(?:0[0-79]\\d{5,7}|[1-7]\\d{9})|8(?:1[0-489]|[5-79]\\d)\\d{7}|8[1-79]\\d{6,7}|8[0-79]\\d{5}|8\\d{5}',
    'PossibleLength' =>
    array(
      0 => 6,
      1 => 7,
      2 => 8,
      3 => 9,
      4 => 10,
      5 => 11,
    ),
    'PossibleLengthLocalOnly' =>
    array(
      0 => 5,
    ),
  ),
  'fixedLine' =>
  array(
    'NationalNumberPattern' => '(?:1(?:5(?:1[1-5]|[24]\\d|6[2-4]|9[1-7])|6(?:[235]\\d|4[1-7])|7\\d\\d)|2(?:1(?:[246]\\d|3[0-35-9]|5[1-9])|2(?:[235]\\d|4[0-8])|3(?:[26]\\d|3[02-79]|4[024-7]|5[03-7])))\\d{5}',
    'ExampleNumber' => '152450911',
    'PossibleLength' =>
    array(
      0 => 9,
    ),
    'PossibleLengthLocalOnly' =>
    array(
      0 => 5,
      1 => 6,
      2 => 7,
    ),
  ),
  'mobile' =>
  array(
    'NationalNumberPattern' => '(?:2(?:5[5-79]|9[1-9])|(?:33|44)\\d)\\d{6}',
    'ExampleNumber' => '294911911',
    'PossibleLength' =>
    array(
      0 => 9,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'tollFree' =>
  array(
    'NationalNumberPattern' => '800\\d{3,7}|8(?:0[13]|20\\d)\\d{7}',
    'ExampleNumber' => '8011234567',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'premiumRate' =>
  array(
    'NationalNumberPattern' => '(?:810|902)\\d{7}',
    'ExampleNumber' => '9021234567',
    'PossibleLength' =>
    array(
      0 => 10,
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
    'NationalNumberPattern' => '249\\d{6}',
    'ExampleNumber' => '249123456',
    'PossibleLength' =>
    array(
      0 => 9,
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
    'NationalNumberPattern' => '800\\d{3,7}|(?:8(?:0[13]|10|20\\d)|902)\\d{7}',
    'PossibleLength' =>
    array(
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'id' => 'BY',
  'countryCode' => 375,
  'internationalPrefix' => '810',
  'preferredInternationalPrefix' => '8~10',
  'nationalPrefix' => '8',
  'nationalPrefixForParsing' => '0|80?',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array(
    0 =>
    array(
      'pattern' => '(\\d{3})(\\d{3})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array(
        0 => '800',
      ),
      'nationalPrefixFormattingRule' => '8 $1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 =>
    array(
      'pattern' => '(\\d{3})(\\d{2})(\\d{2,4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array(
        0 => '800',
      ),
      'nationalPrefixFormattingRule' => '8 $1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    2 =>
    array(
      'pattern' => '(\\d{4})(\\d{2})(\\d{3})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' =>
      array(
        0 => '1(?:5[169]|6[3-5]|7[179])|2(?:1[35]|2[34]|3[3-5])',
        1 => '1(?:5[169]|6(?:3[1-3]|4|5[125])|7(?:1[3-9]|7[0-24-6]|9[2-7]))|2(?:1[35]|2[34]|3[3-5])',
      ),
      'nationalPrefixFormattingRule' => '8 0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    3 =>
    array(
      'pattern' => '(\\d{3})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2-$3-$4',
      'leadingDigitsPatterns' =>
      array(
        0 => '1(?:[56]|7[467])|2[1-3]',
      ),
      'nationalPrefixFormattingRule' => '8 0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    4 =>
    array(
      'pattern' => '(\\d{2})(\\d{3})(\\d{2})(\\d{2})',
      'format' => '$1 $2-$3-$4',
      'leadingDigitsPatterns' =>
      array(
        0 => '[1-4]',
      ),
      'nationalPrefixFormattingRule' => '8 0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    5 =>
    array(
      'pattern' => '(\\d{3})(\\d{3,4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array(
        0 => '[89]',
      ),
      'nationalPrefixFormattingRule' => '8 $1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
  ),
  'intlNumberFormat' =>
  array(
  ),
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => true,
);
