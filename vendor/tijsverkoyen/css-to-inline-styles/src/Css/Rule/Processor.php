<?php

namespace TijsVerkoyen\CssToInlineStyles\Css\Rule;

use Symfony\Component\CssSelector\Node\Specificity;
use \TijsVerkoyen\CssToInlineStyles\Css\Property\Processor as PropertyProcessor;

class Processor
{
    /**
     * Split a string into seperate rules
     *
     * @param string $rulesString
     * @return array
     */
    public function splitIntoSeparateRules($rulesString)
    {
        $rulesString = $this->cleanup($rulesString);

        return (array) explode('}', $rulesString);
    }

    /**
     * @param string $string
     * @return string
     */
    private function cleanup($string)
    {
        $string = str_replace(array("\r", "\n"), '', $string);
        $string = str_replace(array("\t"), ' ', $string);
        $string = str_replace('"', '\'', $string);
        $string = preg_replace('|/\*.*?\*/|', '', $string);
        $string = preg_replace('/\s\s+/', ' ', $string);

        $string = trim($string);
        $string = rtrim($string, '}');

        return $string;
    }

    /**
     * Convert a rule-string into an object
     *
     * @param string $rule
     * @param int    $originalOrder
     * @return array
     */
    public function convertToObjects($rule, $originalOrder)
    {
        $rule = $this->cleanup($rule);

        $chunks = explode('{', $rule);
        if (!isset($chunks[1])) {
            return array();
        }
        $propertiesProcessor = new PropertyProcessor();
        $rules = array();
        $selectors = (array) explode(',', trim($chunks[0]));
        $properties = $propertiesProcessor->splitIntoSeparateProperties($chunks[1]);

        foreach ($selectors as $selector) {
            $selector = trim($selector);
            $specificity = $this->calculateSpecificityBasedOnASelector($selector);

            $rules[] = new Rule(
                $selector,
                $propertiesProcessor->convertArrayToObjects($properties, $specificity),
                $specificity,
                $originalOrder
            );
        }

        return $rules;
    }

    /**
     * Calculate the specificity based on a CSS Selector string,
     * Based on the patterns from premailer/css_parser by Alex Dunae
     *
     * @see https://github.com/premailer/css_parser/blob/master/lib/css_parser/regexps.rb
     * @param string $selector
     * @return Specificity
     */
    public function calculateSpecificityBasedOnASelector($selector)
    {
        $idSelectorsPattern = "  \#";
        $classAttributesPseudoClassesSelectorsPattern = "  (\.[\w]+)                     # classes
                        |
                        \[(\w+)                       # attributes
                        |
                        (\:(                          # pseudo classes
                          link|visited|active
                          |hover|focus
                          |lang
                          |target
                          |enabled|disabled|checked|indeterminate
                          |root
                          |nth-child|nth-last-child|nth-of-type|nth-last-of-type
                          |first-child|last-child|first-of-type|last-of-type
                          |only-child|only-of-type
                          |empty|contains
                        ))";

        $typePseudoElementsSelectorPattern = "  ((^|[\s\+\>\~]+)[\w]+       # elements
                        |
                        \:{1,2}(                    # pseudo-elements
                          after|before
                          |first-letter|first-line
                          |selection
                        )
                      )";

        return new Specificity(
            preg_match_all("/{$idSelectorsPattern}/ix", $selector, $matches),
            preg_match_all("/{$classAttributesPseudoClassesSelectorsPattern}/ix", $selector, $matches),
            preg_match_all("/{$typePseudoElementsSelectorPattern}/ix", $selector, $matches)
        );
    }

    /**
     * @param array $rules
     * @return Rule[]
     */
    public function convertArrayToObjects(array $rules, array $obj��H���v���H��H���;��H��H�\$0H�� _��H�\$H�L$WH��0H�d$ H��H��u�����    ��������H�\$HH��0_��;����C�����   H���l  Lc�A�HI��L��� ��v"I��H��I�ȃ�?H��I��L��H��� �
H��� L��A�y9 u%A�@��vH��H����?H��I��H���A=t+�g����    �8���H�   H�L$ �g�  ������@���H���   ��H����:�����'�����������H��(H��H��u�����    ����������iy	H��(��  H��H��H���H��(���;]  �����  ���H�T$�L$UH��H��@�D  H�EH�E�L�M(H�EH�E�L�E�   H�U�H�M �E(�E��  H��@]�H�\$H�t$ UWAUAVAWH��H��@H�A3�H��H�0H�D�0H��uA������L���   L��H�D$ ���E3�H�M8���  ���  ��"�  H�M8�   ��*  3�H��H��u �Y+  3�L�\$@I�[@I�sHI��A_A^A]_]�L�E8L��H�L$ �H����  ��t����  ��"��  H���H��A���w���H��L����*  M��t��4  L��M��E3�3�H���   H�M�H���   H�E�H�e0 H�M�H�M0H�D$(H�d$  �l�  ��t���K  ��"�B  �<���H�M0H���[  H��H���#���L�E0L�xH�E�M��H�D$(I��H�L$ �3���  ��t����   ��"��   H�������H�H�]