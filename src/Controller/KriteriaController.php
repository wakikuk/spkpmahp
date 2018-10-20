<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Kriteria Controller
 *
 * @property \App\Model\Table\KriteriaTable $Kriteria
 *
 * @method \App\Model\Entity\Kriterium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KriteriaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $kriteria = $this->paginate($this->Kriteria->find()->contain(['aspek']));

        $this->set(compact('kriteria'));
    }

    /**
     * View method
     *
     * @param string|null $id Kriterium id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kriterium = $this->Kriteria->get($id, [
            'contain' => []
        ]);

        $this->set('kriterium', $kriterium);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kriterium = $this->Kriteria->newEntity();
        $tabelaspek = TableRegistry::get('aspek');
        $aspeks = $tabelaspek->find();
        $pilihanaspek = [];
        foreach ($aspeks as $aspek){
        $pilihanaspek[$aspek->kd_aspek] = $aspek->kd_aspek .' - '. $aspek->nama_aspek;
        }
        
        if ($this->request->is('post')) {
            $kriterium = $this->Kriteria->patchEntity($kriterium, $this->request->getData());
            if ($this->Kriteria->save($kriterium)) {
                $this->Flash->success(__('The kriterium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kriterium could not be saved. Please, try again.'));
        }
        $this->set(compact('kriterium','pilihanaspek'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kriterium id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kriterium = $this->Kriteria->get($id, [
            'contain' => []
        ]);
        $tabelaspek = TableRegistry::get('aspek');
        $aspeks = $tabelaspek->find();
        $pilihanaspek = [];
        foreach ($aspeks as $aspek){
        $pilihanaspek[$aspek->kd_aspek] = $aspek->kd_aspek .' - '. $aspek->nama_aspek;
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kriterium = $this->Kriteria->patchEntity($kriterium, $this->request->getData());
            if ($this->Kriteria->save($kriterium)) {
                $this->Flash->success(__('The kriterium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kriterium could not be saved. Please, try again.'));
        }
        $this->set(compact('kriterium','pilihanaspek'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kriterium id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kriterium = $this->Kriteria->get($id);
        if ($this->Kriteria->delete($kriterium)) {
            $this->Flash->success(__('The kriterium has been deleted.'));
        } else {
            $this->Flash->error(__('The kriterium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
