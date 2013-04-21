<?php

class StatsController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
        
        public function actionGetlastten(){
            
        }
        
        public function actionGetlastfifty(){
            
        }
        
        public function actionGetallfindings(){
            $request = $_POST;
                $model = Findings::model()->findAll();
                $all = array();
                foreach ($model as $one){
                    $all[$one->id] = array('id'=>$one->id,'user_id'=> $one->user_id, 'designation'=>$one->designation, 'creator'=>$one->creator, 'neo_score'=>$one->neo_score, 'discovery_date'=>$one->discovery_date, 'ra'=>$one->ra, 'declination'=>$one->declination, 'v'=>$one->v, 'date_updated'=>$one->date_updated, 'note'=>$one->note, 'nob'=>$one->nob, 'arc'=>$one->arc, 'h'=>$one->h, 'viewpoint_type'=>$one->viewpoint_type, 'ephemeris_interval'=>$one->ephemeris_interval, 'start_ephemerides'=>$one->start_ephemerides, 'display_positions'=>$one->display_positions, 'display_motions'=>$one->display_motions, 'motion'=>$one->motion, 'output'=>$one->output, 'suppress_output'=>$one->suppress_output);
                }
                echo json_encode($all);
        }

        
}