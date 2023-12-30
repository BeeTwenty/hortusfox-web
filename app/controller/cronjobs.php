<?php

/**
 * Cronjobs controller
 */
class CronjobsController extends BaseController {
    /**
	 * Perform base initialization
	 * 
	 * @return void
	 */
    public function __construct()
    {
        if (env('APP_CRONPW') === null) {
            http_response_code(500);
            exit('Please set APP_CRONPW to a proper authentication token');
        }

        if ((!isset($_GET['cronpw'])) || ($_GET['cronpw'] !== env('APP_CRONPW'))) {
            http_response_code(403);
            exit();
        }
    }

    /**
	 * Handles URL: /cronjob/tasks/overdue
	 * 
	 * @param Asatru\Controller\ControllerArg $request
	 * @return Asatru\View\JsonHandler
	 */
    public function overdue_tasks($request)
    {
        try {
            TasksModel::cronjobOverdue();

            return json(['code' => 200]);
        } catch (\Exception $e) {
            return json([
                'code' => 500,
                'msg' => $e->getMessage()
            ]);
        }
    }

    /**
	 * Handles URL: /cronjob/tasks/tomorrow
	 * 
	 * @param Asatru\Controller\ControllerArg $request
	 * @return Asatru\View\JsonHandler
	 */
    public function tomorrow_tasks($request)
    {
        try {
            TasksModel::cronjobTomorrow();

            return json(['code' => 200]);
        } catch (\Exception $e) {
            return json([
                'code' => 500,
                'msg' => $e->getMessage()
            ]);
        }
    }
}