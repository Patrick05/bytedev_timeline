<?php
namespace Bytedev\BytedevTimeline\Domain\Model;

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
 * Timeline
 */
class Timeline extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * items
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bytedev\BytedevTimeline\Domain\Model\Date>
     * @cascade remove
     */
    protected $items = null;
    
    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->items = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Adds a Date
     *
     * @param \Bytedev\BytedevTimeline\Domain\Model\Date $item
     * @return void
     */
    public function addItem(\Bytedev\BytedevTimeline\Domain\Model\Date $item)
    {
        $this->items->attach($item);
    }
    
    /**
     * Removes a Date
     *
     * @param \Bytedev\BytedevTimeline\Domain\Model\Date $itemToRemove The Date to be removed
     * @return void
     */
    public function removeItem(\Bytedev\BytedevTimeline\Domain\Model\Date $itemToRemove)
    {
        $this->items->detach($itemToRemove);
    }
    
    /**
     * Returns the items
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bytedev\BytedevTimeline\Domain\Model\Date> $items
     */
    public function getItems()
    {
        return $this->items;
    }
    
    /**
     * Sets the items
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bytedev\BytedevTimeline\Domain\Model\Date> $items
     * @return void
     */
    public function setItems(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $items)
    {
        $this->items = $items;
    }

}