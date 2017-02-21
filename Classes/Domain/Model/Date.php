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
 * Date
 */
class Date extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * date
     *
     * @var int
     */
    protected $date = 0;
    
    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * highlight
     *
     * @var bool
     */
    protected $highlight = false;
    
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * Returns the date
     *
     * @return int $date
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * Sets the date
     *
     * @param int $date
     * @return void
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    
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
     * Returns the highlight
     *
     * @return bool $highlight
     */
    public function getHighlight()
    {
        return $this->highlight;
    }
    
    /**
     * Sets the highlight
     *
     * @param bool $highlight
     * @return void
     */
    public function setHighlight($highlight)
    {
        $this->highlight = $highlight;
    }
    
    /**
     * Returns the boolean state of highlight
     *
     * @return bool
     */
    public function isHighlight()
    {
        return $this->highlight;
    }
    
    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}