<?php

namespace RezaAr\Highcharts\Classes\Presenters;

class InitJsPresenter
{
    public $generate;
    public $highchart;
    public $seriesLabel;
    public $exporting;
    public $exportData;

    public $heatmap;
    public $map;
    public $worldmap;

    public $init = true;

    public function __construct()
    {
        $this->generate = null;
    }

    public function init_js()
    {
        $init = '';

        if ($this->highchart == true) {
            $this->highchart = '<script src="//code.highcharts.com/highcharts.js"></script>';
        }

        if ($this->seriesLabel == true) {
            $this->seriesLabel = '<script src="//code.highcharts.com/modules/series-label.js"></script>';
        }

        if ($this->exporting == true) {
            $this->exporting = '<script src="https://code.highcharts.com/modules/exporting.js"></script>';
        }

        if ($this->exportData == true) {
            $this->exportData = '<script src="https://code.highcharts.com/modules/export-data.js"></script>';
        }

        //Custom
        if ($this->heatmap == true) {
            $this->heatmap = '<script src="https://code.highcharts.com/modules/heatmap.js"></script>';
        }
        if ($this->map == true) {
            $this->map = '<script src="https://code.highcharts.com/maps/modules/map.js"></script>';
        }
        if ($this->worldmap == true) {
            $this->worldmap = '<script src="https://code.highcharts.com/mapdata/custom/world.js"></script>';
        }

        if ($this->init !== false) {
            $init = $this->highchart.
                $this->seriesLabel.
                $this->exporting.
                $this->exportData.
                $this->heatmap.
                $this->map.
                $this->worldmap;
        }

        return $init;
    }

    public function generate()
    {
        $generate = $this->init_js();
        $this->generate = null;

        return $generate;
    }
}
