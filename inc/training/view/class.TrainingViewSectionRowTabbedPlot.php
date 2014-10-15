<?php
/**
 * This file contains class::TrainingViewSectionRowTabbedPlot
 * @package Runalyze\DataObjects\Training\View\Section
 */
/**
 * Row of the training view
 * 
 * @author Hannes Christiansen
 * @package Runalyze\DataObjects\Training\View\Section
 */
abstract class TrainingViewSectionRowTabbedPlot extends TrainingViewSectionRow {
	/**
	 * Right content
	 * @var array
	 */
	protected $RightContent = array();

	/**
	 * Right content title
	 * @var array
	 */
	protected $RightContentTitle = array();

	/**
	 * CSS id
	 * @var string
	 */
	protected $cssID = '';

	/**
	 * Constructor
	 */
	public function __construct(TrainingObject &$Training) {
		$this->Training = $Training;

		$this->setContent();
		$this->setRightContent();
	}

	/**
	 * Set CSS id
	 * @param string $cssID
	 */
	final public function setCSSid($cssID) {
		$this->cssID = $cssID;
	}

	/**
	 * Set plot
	 */
	final protected function setPlot() {}

	/**
	 * Set right content
	 */
	abstract protected function setRightContent();

	/**
	 * Add right content
	 * @param string $key
	 * @param string $title
	 * @param string $content
	 */
	final protected function addRightContent($key, $title, $content) {
		$this->RightContent[$key] = $content;
		$this->RightContentTitle[$key] = $title;
	}

	/**
	 * Get links
	 * @return array
	 */
	final public function getLinks() {
		return $this->RightContentTitle;
	}

	/**
	 * Display plot
	 */
	protected function displayPlot() {

		echo '<div id="training-view-tabbed-'.$this->cssID.'" class="training-row-plot">';

		$num = 0;
        foreach ($this->RightContent as $key => $Content) {
            if ($num == 0) {
                echo '<div id="plot-' . $Content->getKey() . '" class="plot-container" style="visibility:visible">';
                $Content->display();
                echo '</div>';
            } else {
                echo '<div class="change" id="training-view-tabbed-' . $this->cssID . '-' . $key . '"' . ($num > 1 ? ' style="display:none;"' : '') . '>';

                if ($Content instanceof TrainingPlot) {
                    echo '<div id="plot-' . $Content->getKey() . '" class="plot-container">';
                    $Content->display();
                    echo '</div>';
                } else {
                    echo $Content;
                }

                echo '</div>';
            }
            $num++;
        }

        echo '</div>';
        $Table = new TableLapsComputed($this->Training);
        $InfoLink = Ajax::window('<a href="'.$this->Training->Linker()->urlToRoundsInfo().'">'.__('More details about your laps').'</a>', 'normal');

        echo ('<div style=\'width: 300px; float:right; overflow-y:scroll;height: 400px;\'>'. HTML::info( $InfoLink ).$Table->getCode().'</div>');

    }
}