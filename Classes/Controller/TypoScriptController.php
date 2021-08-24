<?php

namespace SvenJuergens\Typoscriptce\Controller;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\TypoScript\Parser\TypoScriptParser;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;


class TypoScriptController extends ActionController
{
    /**
     * Index Action
     *
     * @return void
     */
    public function indexAction(): void
    {
        $cObj = $this->configurationManager->getContentObject();
        $obj = $cObj->data['imageborder'] ? 'COA_INT' : 'COA';
        $tsRaw = $cObj->data['bodytext'];

        // parse TS
        $tsParser = GeneralUtility::makeInstance(TypoScriptParser::class);
        $tsParser->parse($tsRaw);
        $result = $tsParser->setup;
        // render output
        $this->view->assign('typoscriptceContent', $cObj->cObjGetSingle($obj, $result));
    }
}
