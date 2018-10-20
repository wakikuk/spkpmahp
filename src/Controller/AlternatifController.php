<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Alternatif Controller
 *
 * @property \App\Model\Table\AlternatifTable $Alternatif
 *
 * @method \App\Model\Entity\Alternatif[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlternatifController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $alternatif = $this->paginate($this->Alternatif);

        $this->set(compact('alternatif'));
    }

    /**
     * View method
     *
     * @param string|null $id Alternatif id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alternatif = $this->Alternatif->get($id, [
            'contain' => []
        ]);

        $this->set('alternatif', $alternatif);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alternatif = $this->Alternatif->newEntity();
        if ($this->request->is('post')) {
            $alternatif = $this->Alternatif->patchEntity($alternatif, $this->request->getData());
            if ($this->Alternatif->save($alternatif)) {
                $this->Flash->success(__('Alternatif Baru berhasil disimpan.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alternatif could not be saved. Please, try again.'));
        }
        $this->set(compact('alternatif'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alternatif id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alternatif = $this->Alternatif->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alternatif = $this->Alternatif->patchEntity($alternatif, $this->request->getData());
            if ($this->Alternatif->save($alternatif)) {
                $this->Flash->success(__('Alternatif Berhasil di Simpan.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alternatif could not be saved. Please, try again.'));
        }
        $this->set(compact('alternatif'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alternatif id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alternatif = $this->Alternatif->get($id);
        if ($this->Alternatif->delete($alternatif)) {
            $this->Flash->success(__('Alternatif Berhasil diHapus.'));
        } else {
            $this->Flash->error(__('The alternatif could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
