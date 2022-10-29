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
    'NationalNumberPattern' => '(?:[124-7]\\d\\d|3(?:[02-9]\\d|1[0-8]))\\d{6}|8\\d{6,9}|9\\d{6,10}|1\\d{4,5}',
    'PossibleLength' =>
    array(
      0 => 5,
      1 => 6,
      2 => 7,
      3 => 8,
      4 => 9,
      5 => 10,
      6 => 11,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'fixedLine' =>
  array(
    'NationalNumberPattern' => '(?:1(?:[035]\\d|1[13-578]|6[124-8]|7[24]|8[0-467])|2(?:[0346]\\d|2[2-46-9]|5[125]|9[479])|3(?:[03568]\\d|1[3-8]|2[01]|4[1-8])|4(?:[0356]\\d|1[1-368]|7[58]|8[15-8]|9[23579])|5(?:[0358]\\d|[19][1-9]|2[1-57-9]|4[13-8]|6[126]|7[0-3578])|7\\d\\d)\\d{6}',
    'ExampleNumber' => '101234567',
    'PossibleLength' =>
    array(
      0 => 9,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'mobile' =>
  array(
    'NationalNumberPattern' => '(?:6[1-58]|970\\d)\\d{7}',
    'ExampleNumber' => '612345678',
    'PossibleLength' =>
    array(
      0 => 9,
      1 => 11,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'tollFree' =>
  array(
    'NationalNumberPattern' => '800\\d{4,7}',
    'ExampleNumber' => '8001234',
    'PossibleLength' =>
    array(
      0 => 7,
      1 => 8,
      2 => 9,
      3 => 10,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'premiumRate' =>
  array(
    'NationalNumberPattern' => '90[069]\\d{4,7}',
    'ExampleNumber' => '9061234',
    'PossibleLength' =>
    array(
      0 => 7,
      1 => 8,
      2 => 9,
      3 => 10,
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
    'NationalNumberPattern' => '(?:85|91)\\d{7}',
    'ExampleNumber' => '851234567',
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
    'NationalNumberPattern' => '66\\d{7}',
    'ExampleNumber' => '662345678',
    'PossibleLength' =>
    array(
      0 => 9,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'uan' =>
  array(
    'NationalNumberPattern' => '140(?:1[035]|2[0346]|3[03568]|4[0356]|5[0358]|8[458])|(?:140(?:1[16-8]|2[259]|3[124]|4[17-9]|5[124679]|7)|8[478]\\d{6})\\d',
    'ExampleNumber' => '14020',
    'PossibleLength' =>
    array(
      0 => 5,
      1 => 6,
      2 => 9,
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
    'NationalNumberPattern' => '140(?:1[035]|2[0346]|3[03568]|4[0356]|5[0358]|8[458])|140(?:1[16-8]|2[259]|3[124]|4[17-9]|5[124679]|7)\\d',
    'PossibleLength' =>
    array(
      0 => 5,
      1 => 6,
    ),
    'PossibleLengthLocalOnly' =>
    array(
    ),
  ),
  'id' => 'NL',
  'countryCode' => 31,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array(
    0 =>
    array(
      'pattern' => '(\\d{4})',
      'format' => '$1',
      'leadingDigitsPatterns' =>
      array(
        0 => '1[238]|[34]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 =>
    array(
      'pattern' => '(\\d{2})(\\d{3,4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array(
        0 => '14',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    2 =>
    array(
      'pattern' => '(\\d{6})',
      'format' => '$1',
      'leadingDigitsPatterns' =>
      array(
        0 => '1',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    3 =>
    array(
      'pattern' => '(\\d{3})(\\d{4,7})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array(
        0 => '[89]0',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    4 =>
    array(
      'pattern' => '(\\d{2})(\\d{7})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array(
        0 => '66',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    5 =>
    array(
      'pattern' => '(\\d)(\\d{8})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array(
        0 => '6',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    6 =>
    array(
      'pattern' => '(\\d{3})(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array(
        0 => '1[16-8]|2[259]|3[124]|4[17-9]|5[124679]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    7 =>
    array(
      'pattern' => '(\\d{2})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array(
        0 => '[1-578]|91',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    8 =>
    array(
      'pattern' => '(\\d{3})(\\d{3})(\\d{5})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array(
        0 => '9',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
  ),
  'intlNumberFormat' =>
  array(
    0 =>
    array(
      'pattern' => '(\\d{3})(\\d{4,7})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array(
        0 => '[89]0',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 =>
    array(
      'pattern' => '(\\d{2})(\\d{7})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array(
        0 => '66',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    2 =>
    array(
      'pattern' => '(\\d)(\\d{8})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array(
        0 => '6',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    3 =>
    array(
      'pattern' => '(\\d{3})(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array(
        0 => '1[16-8]|2[259]|3[124]|4[17-9]|5[124679]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    4 =>
    array(
      'pattern' => '(\\d{2})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array(
        0 => '[1-578]|91',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    5 =>
    array(
      'pattern' => '(\\d{3})(\\d{3})(\\d{5})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array(
        0 => '9',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
  ),
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => true,
);
