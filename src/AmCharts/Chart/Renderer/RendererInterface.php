<?php
/**
 * AmChartsPHP
 * 
 * @link      http://github.com/neeckeloo/AmChartsPHP
 * @copyright Copyright (c) 2012 Nicolas Eeckeloo
 */
namespace AmCharts\Chart\Renderer;

use AmCharts\Chart\AbstractChart;

interface RendererInterface
{
    public function setChart(AbstractChart $chart);

    public function render();
}