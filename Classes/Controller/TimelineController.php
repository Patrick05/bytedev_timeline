<?php
namespace Bytedev\BytedevTimeline\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Patrick Kawczynski <info@bytedev.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * TimelineController
 */
class TimelineController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var \Bytedev\BytedevTimeline\Domain\Repository\TimelineRepository
     * @inject
     */
    protected $timelineRepository = null;
    
    /**
     * action render
     *
     * @return void
     */
    public function renderAction()
    {
        $timelineId = $this->settings['timeline'];
        $timeline = $this->timelineRepository->findByUid($timelineId);
        $this->view->assign('timeline', $timeline);
    }

}