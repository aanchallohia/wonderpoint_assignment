<?php

use Phalcon\Mvc\Controller;

class AdduserController extends Controller
{

	public function indexAction()
	{

	}

	public function registerAction()
	{

		$user = new Users();
        
		// Store and check for errors
		$success = $user->save(
			$this->request->getPost(),
			array('firstname', 'lastname','email','gender','education','skills')
		);

		if ($success) {
			echo "Thanks for registering!";
            
		} else {
			echo "Sorry, the following problems were generated: ";
			foreach ($user->getMessages() as $message) {
				echo $message->getMessage(), "<br/>";
			}
		}
        echo $this->tag->linkTo("listusers", "List Users");

		$this->view->disable();
	}

}
