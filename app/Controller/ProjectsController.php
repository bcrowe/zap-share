<?php
App::uses('AppController', 'Controller');
/**
 * Projects Controller
 *
 * @property Project $Project
 */
class ProjectsController extends AppController {

	public function add() {
		$this->Crud->on('beforeRedirect', function ($e) {
			if ($e->subject->success) {
				$e->subject->url = $this->referer();
			}
		});

		return $this->Crud->execute();
	}

}
