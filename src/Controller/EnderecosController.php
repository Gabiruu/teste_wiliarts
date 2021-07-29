<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Enderecos Controller
 *
 * @property \App\Model\Table\EnderecosTable $Enderecos
 * @method \App\Model\Entity\Endereco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnderecosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes'],
        ];
        $enderecos = $this->paginate($this->Enderecos);

        $this->set(compact('enderecos'));
    }

    /**
     * View method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => ['Clientes'],
        ]);

        $this->set(compact('endereco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $endereco = $this->Enderecos->newEmptyEntity();
        if ($this->request->is('post')) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->getData());
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('O endereço foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O endereço não pôde ser salvo. Por favor, tente novamente.'));
        }
        $clientes = $this->Enderecos->Clientes->find('list', ['limit' => 200]);

        $abcc = $this->Enderecos->get(6, [
            'contain' => ['Clientes'],
        ]);

        /*$clientes->enableHydration(false);
        $abc = $clientes->toList();

        $teste = $this->Enderecos->find('list', ['limit' => 200]);
        $teste->enableHydration(false);
        $abcc = $teste->toList();


        var_dump($abc[0]->id);*/
        //var_dump($abcc);
        //var_dump(array_diff_key($abc, $abcc));

        $this->set(compact('endereco', 'clientes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->getData());
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('O endereço foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O endereço não pôde ser salvo. Por favor, tente novamente.'));
        }
        $clientes = $this->Enderecos->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'clientes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $endereco = $this->Enderecos->get($id);
        if ($this->Enderecos->delete($endereco)) {
            $this->Flash->success(__('O endereço foi excluído.'));
        } else {
            $this->Flash->error(__('O endereço não pôde ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
