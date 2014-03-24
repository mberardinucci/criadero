<?php
App::uses('AppController', 'Controller');
class UsersController extends AppController
{
 /* public function beforeFilter()
  {
    parent::beforeFilter();
    $this->Auth->allow('add','logout', 'add_entidad', 'add_company' , 'login', 'home', 'remember_password');

  }*/

 public function index() {

              $this->User->recursive = 0;
              $this->set('users', $this->paginate());
       }

    
  /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
 
 /*creando persona natural*/
	public function add() {
    //print_r($_POST);
   
		if ($this->request->is('post')) {
		$this->request->data['User']['roles_id']=4;
		$this->request->data['User']['username']= $this->request->data['User']['email']; //esto le pasa el username por defecto el correo
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));



	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
                        $this->request->data['User']['username']= $this->request->data['User']['email']; 
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
 
    public function login()
  {
    //$this->layout = 'start';
    if ($this->request->is('post'))
    {
      # Log in using email
      if( strstr($this->request->data['User']['email'],'@') )
      {
        # Retrieve user username for auth
        $useraux = $this->User->findByEmail($this->request->data['User']['email'],'username');

        # Change the username from data form
        $this->request->data['User']['username'] = $useraux['User']['username'];
      }

      # Try to log in the user
      if ($this->Auth->login())
      {

        # Redirect to home
        $this->redirect('/horses');
       //$this->Session->setFlash(__('Invalid username or password, try again'),'flash_fail');  
      }
      else
      {
        $this->Session->setFlash(__('Invalid username or password, try again'),'flash_fail');
      }
    }
  }

  public function logout()
  {
    # Destroy the Cookie
    $this->Cookie->delete('Auth.User');

    # Destroy the session
    $this->redirect($this->Auth->logout());
  }
   
    public function remember_password()
  {
    if( $this->request->is('post') )
    {
      $user = $this->User->findByEmail( $this->request->data['User']['email'] );

      if( empty($user) )
      {
        $this->Session->setFlash('Este email no existe en la base de datos.','flash_fail');
        $this->redirect(array('action' => 'login'));
      }

      $hash = $this->User->generateHashChangePassword();

      $data = array(
        'User' => array(
          'id' => $user['User']['id'],
          'hash_change_password' => $hash
          )
        );

      $this->User->save($data);

      $email = new CakeEmail();
      $email->template('remember_password', 'default')
      ->config('gmail')
      ->emailFormat('html')
      ->subject(__('Remember password - '.Configure::read('Application.name')))
      ->to( $user['User']['email'] )
      ->from( Configure::read('Application.from_email') )
      ->viewVars(array('hash' => $hash))
      ->send();

      $this->Session->setFlash('Check your e-mail to continue the process of recovering password.','flash_success');

    }
  }

  /**
  * Step 2 to change the password.
  * This step verifies that the hash is valid, if it is, show the form to the user to inform your new password
  */
  public function remember_password_step_2( $hash = null )
  {

    $user = $this->User->findByHashChangePassword( $hash );

    if( $user['User']['hash_change_password'] != $hash || empty($user))
    {
      throw new NotFoundException(__('Link inválido'));
    }

    # Sends the hash to the form to check before changing the password
    $this->set('hash',$hash);

    $this->render('/Users/change_password');

  }

   
   
 /*public function isAuthorized($user) {
           if ($user['roles_id'] == '1') {
               return true;
           }
            
           if (in_array($this->action, array('edit', 'delete'))) {
               if ($user['id'] != $this->request->params['pass'][0]) {
                   return false;
               }
           }
           return true;
       }
 */

}
?>
