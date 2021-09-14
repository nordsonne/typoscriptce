<?php
declare(strict_types = 1);
namespace SvenJuergens\Typoscriptce\DataProcessing;

use TYPO3\CMS\Core\TypoScript\Parser\TypoScriptParser;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class TypoScriptProcessor implements DataProcessorInterface
{
    /**
     * @param ContentObjectRenderer $cObj
     * @param array $contentObjectConfiguration
     * @param array $processorConfiguration
     * @param array $processedData
     * @return array
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ): array {
        if (isset($processorConfiguration['if.']) && !$cObj->checkIf($processorConfiguration['if.'])) {
            // leave $processedData unchanged in case there were previous other processors
            return $processedData;
        }
        // parse TS
        $tsParser = GeneralUtility::makeInstance(TypoScriptParser::class);
        $tsParser->parse($cObj->data['bodytext']);
        $result = $tsParser->setup;
        $targetVariableName = $cObj->stdWrapValue('as', $processorConfiguration, 'typoscriptContent');
        $processedData[$targetVariableName] = $cObj->cObjGetSingle(
            $cObj->data['imageborder'] ? 'COA_INT' : 'COA',
            $result
        );
        return $processedData;
    }
}
