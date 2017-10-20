<?php
class section_controller extends comm_controller{
	protected function _initialize() {
		parent::_initialize();
	}

	//模块首页
	public function index(){
		$data = $this->D2('section');
		$this->view['list']=$data;
		$this->view('section.html');
	}

	//添加、修改模块内容
	public function add(){
		$id = F::input_int('get.id');
		if($id>0){
			$item = $this->D1('section',$id);
			$item['content']=F::html_in($item['content']);
		}
		$this->view['id']=$id;
		$this->view['item']=$item;
		$this->view('section_add.html');
	}

	public function save(){
		if(IS_POST) {
			$id = F::input_int('post.id');
			$data = F::input('post.');
			$name = $data['name'];
			$modle = $data['modle'];
			unset($data['file']);
			unset($data['modle']);
			$data['pagesize'] = is_numeric($data['pagesize'])?$data['pagesize']:0;
			$data['is_add'] = is_numeric($data['is_add'])?$data['is_add']:0;
			$data['is_next'] = is_numeric($data['is_next'])?$data['is_next']:0;
			$data['is_delete'] = is_numeric($data['is_delete'])?$data['is_delete']:0;
			if(!$data['name']){
				F::redirect('请输入栏目标题','',1);
			}
			if(!$data['ename']){
				F::redirect('栏目标题输入不正确','',1);
			}
					if($this->db->table('section')->where('name='."'{$data['name']}'"." and "."id!=".$id)->getlist()){
					F::redirect('栏目名已存在,请重新输入','',1);
				}
			if($id>0){
				unset($data['name']);
				unset($data['ename']);
				$this->db->table('section')->where('id='.$id)->update($data);
				F::redirect('修改成功',$this->url('section/index',['id'=>$id]),1);
			}
			else{
				// 添加数据[更新:栏目名进行排重]
				if($this->db->table('section')->where('name='."'{$data['name']}'")->getlist()){
					F::redirect('栏目名已存在,请重新输入','',1);
				}
				if ($this->ins('section',$data)) {
					$sql = "CREATE TABLE IF NOT EXISTS `".$this->db->pre($data['ename'])."` (";
					$sql .= "`id` int(10) NOT NULL auto_increment,";
					$sql .= "`pid` int(10) NOT NULL default 0,";
					$sql .= "`fid` int(10) NOT NULL default 0,";
					$sql .= "`sort` int(10) NOT NULL default 0,";
					$sql .= "`is_pass` tinyint(1) NOT NULL default 0,";
					$sql .= "`is_best` tinyint(1) NOT NULL default 0,";
					$sql .= "`add_time` int(10) NOT NULL default 0,";
					// [增加:一键创建功能]
					if($modle){
						// $modle = $data['modle'];
						// 产品中心
						if($modle == "products"){
							$sql.="`mingzhi` varchar(50),";
							$sql.="`jiage` decimal(12,1),";
							$sql.="`tupian` varchar(50),";
						}
						//新闻咨询
						if($modle == "news_Information"){
							$sql.="`biaoti` varchar(50),";
							$sql.="`neirong` varchar(65535),";
							$sql.="`tupian` varchar(50),";
							$sql.="`zuozhe` varchar(50),";
						}
						//单页面
						if($modle == "single_page"){
							$sql.="`biaoti` varchar(50),";
							$sql.="`neirong` varchar(65535),";
							$sql.="`tupian` varchar(50),";
						}
						//人才招聘
						if($modle == "join_us"){
							$sql.="`biaoti` varchar(50),";
							$sql.="`zhizhe` varchar(65535),";
							$sql.="`yaoqiu` varchar(50),";
							$sql.="`dianhua` varchar(300),";
							$sql.="`dizhi` varchar(50),";
						}
						//下载中心
						if($modle == "download_center"){
							$sql.="`biaoti` varchar(50),";
							$sql.="`neirong` varchar(65535),";
							$sql.="`tupian` varchar(50),";
							$sql.="`chishu` varchar(50),";
						}
					}
					$sql .= "PRIMARY KEY (`id`))";
					$this->exec($sql);

					if($modle){
						$id=$this->db->table('section')->where('name='."'{$data['name']}'")->getval('id');
						if($modle == "products"){
							$sql2 ="insert into f_field(pid,name,field_name,field_type,field_long,type,is_show)values ('".$id."','名字','mingzhi','varchar','50','input',1),
										('".$id."','价格','jiage','decimal','12,1','inputnumber',1),
										('".$id."','图片','tupian','varchar','50','photo',1)";
						}
						if($modle == "news_Information"){
							$sql2 ="insert into f_field(pid,name,field_name,field_type,field_long,type,is_show)values ('".$id."','标题','biaoti','varchar','50','input',1),
										('".$id."','内容','neirong','varchar','65535','textarea',1),
										('".$id."','图片','tupian','varchar','50','photo',1),
										('".$id."','作者','zuozhe','varchar','50','input',1)";
						}
						if($modle == "single_page"){
							$sql2 ="insert into f_field(pid,name,field_name,field_type,field_long,type,is_show)values ('".$id."','标题','biaoti','varchar','50','input',1),
										('".$id."','内容','neirong','varchar','65535','textarea',1),
										('".$id."','图片','tupian','varchar','50','photo',1)";
						}
						if($modle == "join_us"){
							$sql2 ="insert into f_field(pid,name,field_name,field_type,field_long,type,is_show)values ('".$id."','标题','biaoti','varchar','50','input',1),
										('".$id."','职责','zhizhe','varchar','50','textarea',1),
										('".$id."','要求','yaoqiu','varchar','65535','textarea',1),
										('".$id."','电话','dianhua','varchar','50','input',1),
										('".$id."','地址','dizhi','varchar','50','input',1)";
						}
						if($modle == "download_center"){
							$sql2 ="insert into f_field(pid,name,field_name,field_type,field_long,type,is_show)values ('".$id."','标题','biaoti','varchar','50','input',1),
										('".$id."','内容','neirong','varchar','65535','textarea',1),
										('".$id."','图片','tupian','varchar','50','photo',1),
										('".$id."','下载次数','chishu','decimal','12,1','inputnumber',1)";
						}
						$this->exec($sql2);
					}

					F::redirect('保存成功',$this->url('section/index',['id'=>0]),1);
				} else {
					F::redirect('保存失败',$this->url('section'),1);
				}
			}
		}
	}

	/*
	删除栏目操作
	*/
	public function delete(){
		$id = F::input_int('get.id');
		if($id>0){
			$data = $this->D1('section',$id);
			if($this->del('section',$id)){
				$this->exec('DROP Table if Exists `'.$this->db->pre($data['ename']).'`');
				$str = '删除成功';
			}
			else{
				$str = '删除失败，请重试';
			}
		}
		else{
			$str = '参数错误';
		}
		F::redirect($str,$this->url('section'),1);
	}

	/*
	设置字段
	*/
	public function field($pid=0,$id=0){
		$id = F::input_int('get.id');
		$pid = F::input_int('get.pid');
		$list = $this->db->table('field')->where('pid=?',array($pid))->order('sort')->getlist();
		$sec_item = $this->D1('section',$pid);
		if($id){
			$item = $this->D1('field',$id);
			$this->view['item']=$item;
		}
		$this->view['id']=$id;
		$this->view['pid']=$pid;
		$this->view['list']=$list;
		$this->view['sec_item']=$sec_item;
		$this->view('section_field.html');
	}
	/*
	保存字段
	*/
	public function field_save(){
			if(IS_POST){
			$data = F::input('post.');
			if($this->db->table('field')->where('pid='.$data['pid'].' and '.'name='."'{$data['name']}'"." and "."id!=".$data['id'])->getlist()){
				F::redirect('该字段已存在','',1);
			}

			if($data['name']=='选择'||$data['name']=='分类'||$data['name']=='日期'||$data['name']=='排序'||$data['name']=='操作'){
				F::redirect('该字段与已存在的名称产生冲突','',1);
			}

			$data['field_long'] = ($data['field_long'])?$data['field_long']:0;
			$data['is_must'] = is_numeric($data['is_must'])?$data['is_must']:0;
			$data['is_show'] = is_numeric($data['is_show'])?$data['is_show']:0;
			$id = F::input_int('post.id');
			if($id>0){
				unset($data['name']);
				unset($data['field_name']);
				unset($data['field_long']);
				unset($data['field_type']);
				$this->db->table('field')->where('id=?',array($id))->update($data);
				F::redirect('修改成功',$this->url('section/field',['pid'=>$data['pid'],'id'=>$id]),1);
			}
			else{
				if(!$data['name']){
					F::redirect('请输入字段名称','',1);
				}
				if(!$data['field_name']){
					F::redirect('字段英文不正确','',1);
				}
				if($this->db->table('field')->where('pid='.$data['pid'].' and '.'name='."'{$data['name']}'")->getlist()){
				F::redirect('该字段已存在','',1);
				}
				$max = $this->db->table('field')->where('pid=?',array($data['pid']))->max('sort');
				$data['sort'] = $max + 1;
				if($this->ins('field',$data)){
					$db_name = $this->val('section','ename','id='.$data['pid']);
					$a = $data['field_type'];
					$b = $data['field_long'];
					if($a=='float'){
						$data['field_long'] .= ',4';
					}
					$default = "DEFAULT '';";
					if($a=='tinyint' || $a=='float' || $a=='int') $default='DEFAULT 0;';
					if($a=='text' || $a=='MediumText' || $a=='LongText'){
						$sql = "ALTER TABLE `".$this->db->pre($db_name)."` ADD COLUMN `".$data['field_name']."` ".$a.";";
					}
					else{
						$sql = "ALTER TABLE `".$this->db->pre($db_name)."` ADD COLUMN `".$data['field_name']."` ".$a." (".$data['field_long'].") NOT NULL ".$default;
					}
					$this->exec($sql);
					F::redirect('保存成功',$this->url('section/field',['pid'=>$data['pid']]),1);
				}
				else{
					F::redirect('添加失败，请重试','',1);
				}
			}
			$this->reSort($pid);
		}
	}

	/**
	 * 字段顺序向下移动
	 * @return [type] [description]
	 */
	public function field_move(){
		$pid = F::input_int('get.pid');
		$id = F::input_int('get.id');
		if($id>0){
			$max = $this->db->table('field')->where('pid=?',array($pid))->max('sort');
			if($max>1){
				$thisSort = $this->val('field','sort','id='.$id);
				if($thisSort<$max){//可以向下移动
					$preid = $this->val('field','id','pid='.$pid.' and sort='.($thisSort+1));
					$this->db->table('field')->where('id=?',array($id))->update([
						'sort'=>($thisSort+1)
					]);
					$this->db->table('field')->where('id=?',array($preid))->update([
						'sort'=>$thisSort
					]);
					$str = '操作成功';
				}
				elseif($thisSort==$max){//可以向下移动
					$str = '已经移到最后位';
				}
			}
			else{
				$str = '无需移动';
			}
		}
		F::redirect($str,$this->url('section/field',['pid'=>$pid,'fid'=>$this->fid]),2);
	}

	/*
	删除字段
	*/
	public function field_del(){
		$pid = F::input_int('get.pid');
		$id = F::input_int('get.id');
		if($pid>0 && $id>0){
			$db_name = $this->val('section','ename','id='.$pid);
			$field_name = $this->val('field','field_name','id='.$id);
			if($db_name && $field_name && $this->del('field',$id)){
				$this->reSort($pid);
				$sql = "ALTER TABLE `".$this->db->pre($db_name)."` DROP COLUMN `".$field_name."`;";
				$this->exec($sql);
				F::redirect('字段删除成功',$this->url('section/field',['pid'=>$pid]),1);
			}
			else{
				F::redirect('删除失败，请重试','',1);
			}
		}
	}

	/**
	 * 全部重新排序
	 * @return [type] [description]
	 */
	public function reSort($pid,$table='field'){
		$sort_list = $this->db->table($table)->field('id,sort')->where('pid=?',array($pid))->order('sort')->getlist();
		foreach($sort_list as $k=>$v){
			$this->db->table($table)->where('id=?',array($v['id']))->update(['sort'=>($k+1)]);
		}
	}

}
?>