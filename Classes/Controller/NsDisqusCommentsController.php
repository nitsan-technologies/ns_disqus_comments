<?php
namespace Ns\NsDisqusComments\Controller;

use TYPO3\CMS\Core\Page\PageRenderer;

/***
 *
 * This file is part of the "[NITSAN] Disqus Comment" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * NsDisqusCommentsController
 */
class NsDisqusCommentsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action new
     *
     * @return void
     */
    public function disqusCommentsAction()
    {
        $disqus_shortname = $this->settings['ShortName'];
        if (empty($disqus_shortname)) {
            $this->addFlashMessage('Please insert your DISQUS shortname in the Extension config.', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        } else {
            $pageRenderer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(PageRenderer::class);
            $pageRenderer->addFooterData('
				<script type="text/javascript">
					var disqus_shortname = "' . $disqus_shortname . '";
					
					(function() {
						var dsq = document.createElement("script"); dsq.type = "text/javascript"; dsq.async = true;
						dsq.src = "//" + disqus_shortname + ".disqus.com/embed.js";
						(document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(dsq);
					})();
				</script>
			');
        }
    }
}
