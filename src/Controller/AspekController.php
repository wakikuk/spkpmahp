<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aspek Controller
 *
 * @property \App\Model\Table\AspekTable $Aspek
 *
 * @method \App\Model\Entity\Aspek[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AspekController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $aspek = $this->paginate($this->Aspek);

        $this->set(compact('aspek'));
    }

    /**
     * View method
     *
     * @param string|null $id Aspek id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aspek = $this->Aspek->get($id, [
            'contain' => []
        ]);

        $this->set('aspek', $aspek);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aspek = $this->Aspek->newEntity();
        if ($this->request->is('post')) {
            $aspek = $this->Aspek->patchEntity($aspek, $this->request->getData());
            if ($this->Aspek->save($aspek)) {
                $this->Flash->success(__('The aspek has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aspek could not be saved. Please, try again.'));
        }
        $this->set(compact('aspek'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aspek id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aspek = $this->Aspek->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aspek = $this->Aspek->patchEntity($aspek, $this->request->getData());
            if ($this->Aspek->save($aspek)) {
                $this->Flash->success(__('The aspek has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aspek could not be saved. Please, try again.'));
        }
        $this->set(compact('aspek'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aspek id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aspek = $this->Aspek->get($id);
        if ($this->Aspek->delete($aspek)) {
            $this->Flash->success(__('The aspek has been deleted.'));
        } else {
            $this->Flash->error(__('The aspek could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
