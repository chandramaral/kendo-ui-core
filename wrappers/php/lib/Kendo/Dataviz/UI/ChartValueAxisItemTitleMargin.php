<?php

namespace Kendo\Dataviz\UI;

class ChartValueAxisItemTitleMargin extends \kendo\SerializableObject {
//>> Properties

    /**
    * The bottom margin of the title.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemTitleMargin
    */
    public function bottom($value) {
        return $this->setProperty('bottom', $value);
    }

    /**
    * The left margin of the title.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemTitleMargin
    */
    public function left($value) {
        return $this->setProperty('left', $value);
    }

    /**
    * The right margin of the title.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemTitleMargin
    */
    public function right($value) {
        return $this->setProperty('right', $value);
    }

    /**
    * The top margin of the title.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartValueAxisItemTitleMargin
    */
    public function top($value) {
        return $this->setProperty('top', $value);
    }

//<< Properties
}

?>
