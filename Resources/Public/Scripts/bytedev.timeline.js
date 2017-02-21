"use strict";
class Timeline {
    constructor(containerId) {
        this.container = $(containerId).first();
        this.dates = this.container.find(".timeline__dates").first();
        this.description = this.container.find(".timeline__description").first();
        this.controls = $(".timeline__controls").first();
        this.prevButton = this.controls.find(".timeline__prev").first();
        this.nextButton = this.controls.find(".timeline__next").first();

        this.autoplay = false;
        this.amountElements = {
            0: 1, /* from 0px to 449px */
            450: 2, /* from 450px to 719px */
            720: 3, /* from 720px to 939px */
            940: 4, /* from 940px to 1139px */
            1140: 6 /* from 1140px to infty */
        };
    }

    init() {
        var self = this;

        var debouncer;
        $(window).resize(function () {
            clearTimeout(debouncer);
            debouncer = setTimeout(function () {
                self.updateWidth();
            }, 500);
        });

        self.updateWidth();

        this.dates.children("li").click(function () {
            self.selectAction($(this).index());
        });

        this.prevButton.click(function () {
            self.prevAction();
        });

        this.nextButton.click(function () {
            self.nextAction();
        });

        self.selectAction(0);
    }

    /**
     * Returns the numbers of elements in the timeline
     *
     * @returns {int}
     */
    getNrOfElements() {
        return this.dates.children("li").length;
    }

    /**
     * Returns the active element
     *
     * @returns {*}
     */
    getActiveElement() {
        return this.dates.children("li.active").first();
    }

    /**
     * Returns the element at the given position
     *
     * @param index
     * @returns {*}
     */
    getElement(index) {
        if (index < this.getNrOfElements() && index >= 0) {
            return this.dates.children("li").eq(index);
        } else {
            return null;
        }
    }

    /**
     * Selects the element before the current active element
     */
    prevAction() {
        var prevId = Math.max(this.getActiveElement().index() - 1, 0);

        this.getActiveElement().removeClass("active");
        this.getElement(prevId).addClass("active");

        this.centerElement(prevId);
    }

    /**
     * Selects the element after the current active element
     */
    nextAction() {
        var nextId = Math.min(this.getActiveElement().index() + 1, this.getNrOfElements() - 1);

        this.getActiveElement().removeClass("active");
        this.getElement(nextId).addClass("active");

        this.centerElement(nextId);
    }

    /**
     * Selects the element at the given index
     * @param index
     */
    selectAction(index) {

        if (index >= 0 && index < this.getNrOfElements()) {
            this.getActiveElement().removeClass("active");

            this.getElement(index).addClass("active");

            this.centerElement(index);
        }
    }

    /**
     * Returns the number of elements, which are shown at the current container
     *
     * @returns {number}
     */
    getNrOfVisibleElements() {
        var self = this;
        var containerWidth = this.container.width();
        var nrOfElements = 1;

        $.each(self.amountElements, function (key, value) {
            if (containerWidth >= key) {
                nrOfElements = value;
            }
        });

        return nrOfElements;
    }

    /**
     * Returns the width of a single element at the current container
     *
     * @returns {number}
     */
    getElementWidth() {
        var containerWidth = this.container.width();
        var nrOfVisibleElements = this.getNrOfVisibleElements();
        return containerWidth / nrOfVisibleElements;
    }


    updateWidth() {
        var self = this;
        var curElementWidth = this.getElementWidth();

        this.dates.children("li").each(function () {
            $(this).css("width", curElementWidth + "px");
        });
        this.description.children("li").each(function () {
            $(this).css("width", self.container.width() + "px");
        });

        this.dates.css("width", curElementWidth * this.dates.children("li").length);
        this.description.css("width", self.container.width() * this.dates.children("li").length);

        this.centerElement(this.getActiveElement().index());
    }

    centerElement(index) {
        var nrOfVisibleElements = this.getNrOfVisibleElements();
        var visiblePos = Math.floor(nrOfVisibleElements / 2);

        var nrOfLeftshifts = Math.max(index - visiblePos, 0);
        var shiftWidth = this.getElementWidth() * nrOfLeftshifts;

        this.dates.animate({
            left: "-" + shiftWidth + "px"
        }, 1000);

        var shiftWidthDescription = index * this.container.width();

        this.description.animate({
            left: "-" + shiftWidthDescription + "px"
        }, 1000);
    }
}


var timeline = new Timeline(".timeline");
timeline.init();
