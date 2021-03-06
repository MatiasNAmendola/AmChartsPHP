<?php
/**
 * AmChartsPHP
 *
 * @link      http://github.com/neeckeloo/AmChartsPHP
 * @copyright Copyright (c) 2012 Nicolas Eeckeloo
 */
namespace AmCharts\Chart\Axis;

class Value extends AbstractAxis
{
    /**
     * Specifies whether axis displays category axis labels and value axis values.
     *
     * @var boolean
     */
    protected $labelsEnabled;

    /**
     * Sets true if labels are enabled
     *
     * @param boolean $enabled
     * @return Value
     */
    public function setLabelsEnabled($enabled = true)
    {
        $this->labelsEnabled = (bool) $enabled;

        return $this;
    }

    /**
     * Returns true if labels are enabled
     *
     * @return boolean
     */
    public function isLabelsEnabled()
    {
        return $this->labelsEnabled;
    }
}