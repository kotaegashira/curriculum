<?php 
namespace App\controller;

class UsersController extends AppController {

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, please try again'));
        }
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('User saved successfully.'));
 
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to save user. Please try again.'));
        }
        $this->set(compact('user'));
    }

    public function view()
    {
        $user = $this->Users->find('all');
        $this->set(compact('user'));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'view']);
            }
            $this->Flash->error(__('Unable to save user. Please try again.'));
        }
        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('Failed to delete user. Please try again.'));
        }

        return $this->redirect(['action' => 'view']);
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }
}