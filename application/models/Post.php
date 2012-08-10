<?php

class Application_Model_Post
{

	public function select($where = null, $order = null, $limit = null)
	{
		$dao = new Application_Model_DbTable_Posts();
		$select = $dao->select()->from($dao)->order($order)->limit($limit);

		if(!is_null($where)){
		 $select->where($where);
		}
		return $dao->fetchAll($select)->toArray();
	}

	public function find($id)
	{
		$dao = new Application_Model_DbTable_Posts();
		$arr = $dao->find($id)->toArray();
		return $arr[0];
	}

	public function insert(array $request)
	{
		$dao = new Application_Model_DbTable_Posts();
		$dados = array(
		 'titulo' => $request['titulo'],
		 'chamada' => $request['chamada'],
		 'texto' => $request['texto'],
		 'registro' => $request['registro']
		);
		return $dao->insert($dados);
	}

	public function update(array $request)
	{
		$dao = new Application_Model_DbTable_Posts();
		$dados = array(
		 'titulo' => $request['titulo'],
		 'chamada' => $request['chamada'],
		 'texto' => $request['texto'],
		 'registro' => $request['registro']
		);
		$where = $dao->getAdapter()->quoteInto("id = ?", $request['id']);
		$dao->update($dados, $where);
	}

	public function delete($id)
	{
		$dao = new Application_Model_DbTable_Posts();
		$where = $dao->getAdapter()->quoteInto("id = ?", $id);
		$dao->delete($where);
	}

}
