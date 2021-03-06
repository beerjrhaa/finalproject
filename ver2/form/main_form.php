<?php
	class form{
		public $method = "POST";
		function open($id,$name,$cass=null,$url,$java){
			return "<form id='{$id}'name='{$name}'class='{$cass}' method='{$this->method}' enctype='multipart/form-data' action='{$url}' onSubmit='{$java}' role='form'>";
		}
		function close(){
			return "</form>";
		}
	}

#---------------Text-------------------#
	class textfield{
		public $name,$id = null,$cass = null,$hold = null;
		public $value=null,$functions=null;

		function __construct($name,$id,$cass,$hold){
			$this->name = $name;
			$this->cass = $cass;
			$this->id = $id;
			$this->hold = $hold;

		}
		function __toString(){
			return "<input type='text'
			        id='{$this->id}'
					class='{$this->cass}'
					name='{$this->name}'
					value='{$this->value}'
					{$this->functions}
					placeholder='{$this->hold}'/>";
		}
	}
class textfieldreadonly{
		public $name,$id = null,$hold = null;
		public $value=null,$functions=null;

		function __construct($name,$id,$hold){
			$this->name = $name;
			$this->id = $id;
			$this->hold = $hold;

		}
		function __toString(){
			return "<input type='text'
			        id='{$this->id}'
					class='form-control disabledTextInput'
					name='{$this->name}'
					value='{$this->value}'
					{$this->functions}
					placeholder='{$this->hold}' readonly/>";
		}
	}
class textfieldcalendarreadonly{
		public $name,$id = null,$hold = null,$classinput=null,$classlabel=null,$labelfor=null;
		public $value=null,$functions=null;

		function __construct($name,$id,$hold,$classinput,$classlabel,$labelfor){
			$this->name = $name;
			$this->id = $id;
			$this->hold = $hold;
			$this->classinput = $classinput;
			$this->classlabel = $classlabel;
			$this->labelfor = $labelfor;


		}
		function __toString(){
			return "<input type='text'
			        id='{$this->id}'
					class='{$this->classinput}'
					name='{$this->name}'
					value='{$this->value}'
					{$this->functions}
					placeholder='{$this->hold}' readonly/>
					<label for='{$this->labelfor}'
					class='{$this->classlabel}'>
					<img src='images/icons/calendar.png'/>
					</label>";
		}
	}
#---------------Text Area---------------#
	class textArea{
		public $rows,$cols,$id,$name,$value;

		function __construct($name,$cass,$idtf,$hold){
			$this->name = $name;
			$this->cass = $cass;
			$this->idtf = $idtf;
			$this->hold = $hold;

		}

		function __toString(){
			return "<textarea cols='{$this->cols}'rows='{$this->rows}'id='{$this->id}'name='{$this->name}'class='{$this->cass}'>{$this->value}</textarea>";
		}
	}

#---------------Label-------------------#
	class label{
		public $text;
		function __construct($text){
			$this->text = $text;
		}
		function __toString(){
			return "<label>{$this->text}</label>";
		}
	}
#---------------Password-------------------#
	class pass{
		public $name,$cass=null,$hold = null;


		function __construct($name,$cass,$hold){
			$this->name = $name;
			$this->cass = $cass;
			$this->hold = $hold;
		}

		function __toString(){
			return "<input type='password'
							class='{$this->cass}'
							name='{$this->name}'
							placeholder='{$this->hold}'/>";
		}
	}
#--------------radioGroup----------------#
	class radioGroup{
		private $items = array();
		public $name;
		function __toString(){
			$html ='';
			foreach($this->items as $item){
			$html.="<div style='float:left;padding-right: 5px;'><input type='radio'
					name='{$this->name}'
					{$item[checked]}
					value='{$item[value]}'";
			$html.=	"/>{$item[label]}</div>";
		}
		return $html;
	}
		function add($label,$value,$checked){

			$this->items[count($this->items)] = array(
			'label'=>$label,
			'value'=>$value,
			'checked'=>$checked
			);
		}
		function edit($key,$label,$value,$checked){

			$this->items[$key] = array(
				'label'=>$label,
				'value'=>$value,
				'checked'=>$checked
			);
		}
}
class radio{
		public $name,$check,$value,$cass=null,$realname = null;

		function __construct($name,$cass,$realname){
			$this->name = $name;
			$this->cass = $cass;
			$this->realname = $realname;
		}

		function __toString(){
			return "<input type='radio'
							class='{$this->cass}'
							name='{$this->name}'
							value='{$this->value}' {$this->check}
							>{$this->realname}";
		}
	}
#--------------SelectMenu----------------#

	class selectMenu{
		public $name,$items;

		function __construct(){
			$this->items = array();
		}

		function addItem($label,$value){
			$index = count($this->items);
			$this->items[$index] = array($label,$value);
		}

		function __toString(){
			$html = "<select class='form-control' name ='{$this->name}'>";

			if(count($this->items)>0){
				$length = count($this->items);

				for($i = 0; $i<$length; $i++){
					$label = $this->items[$i][0];
					$value = $this->items[$i][1];

				$html.= "<option value='{$value}'>{$label}</option>";
				}
			}

			$html.="</select>";
			return $html;
		}
	}


	class SelectFromDB{
	public $name,$lists,$idtf,$value = null;
	function selectFromTB($table,$value,$label,$result){
		include_once 'database/db_tools.php';
		$db = new db_tools();
		$rs = $db->findAll($table)->execute();
		$html = "<select id='{$this->idtf}' class='form-control css-require' name='{$this->name}' >
			<option value='$this->value'>
			-----{$this->lists}-----
			</option>
			";

		while($r = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
			$html.="<option value= '{$r[$value]}'";
		if($r[$value]==$result){
				$html.='selected';
			};
			$html.=">
			{$r[$label]}
			</option>";
			}
		$html.="</select>";
		return $html;
		}

     function selectFromTBinDB($table,$value,$label,$type,$id,$result){
		include_once 'database/db_tools.php';
		$db = new db_tools();
		$rs = $db->findbyPK($table,$type,$id)->execute();
		$html = "<select class='form-control css-require' name='{$this->name}' id='{$this->idtf}'>
			<option value=''>
			-----{$this->lists}-----
			</option>
			";

		while($r = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
			$html.="<option value= '{$r[$value]}'";
		if($r[$value]==$result){
				$html.='selected';
			};
			$html.=">
			{$r[$label]}
			</option>";
			}
		$html.="</select>";
		return $html;
		}
	function selectFromTBinDBZootype($table,$value,$label,$type,$id,$result){
		include_once 'database/db_tools.php';
		$db = new db_tools();
		$rs = $db->findbyPK($table,$type,$id)->execute();
		$html = "<select class='form-control css-require' name='{$this->name}' id='{$this->idtf}'>
			<option value=''>
			-----{$this->lists}-----
			</option>
			";

		while($r = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
			$html.="<option value= '{$r[$value]}'";
		if($r[$value]==$result){
				$html.='selected';
			};
			$html.=">
			{$r[$label]}
			 </option>";
			}
		$html.="</select>";
		return $html;
		}

	function selectFromTBinDB2($table,$value,$label,$label2,$type,$id,$zoo,$idzoo,$result){
		include_once 'database/db_tools.php';
		$db = new db_tools();
		$rs = $db->findbyPK12($table,$type,$id,$zoo,$idzoo)->execute();
		$html = "<select class='form-control css-require' name='{$this->name}' id='{$this->idtf}'>
			<option value=''>
			-----{$this->lists}-----
			</option>
			";

		while($r = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
			$html.="<option value= '{$r[$value]}'";
		if($r[$value]==$result){
				$html.='selected';
			};
			$html.=">
			{$r[$label]} ";
			$html.=" {$r[$label2]}";

			$html.="</option>";
			}
		$html.="</select>";
		return $html;
		}
	}

#---------------Upload-------------------#
	class uploadPic{
		public $name;
		function __construct($name){
			$this->name = $name;
		}
		function __toString(){
			return "<input type='file' name='{$this->name}' />";
		}
	}
#---------------Link-------------------#
	class link{
		public $url,$label,$params;
		function __toString(){
			return "
			<a href='{$this->url}?{$this->params}'>{$this->label}
			</a>";
		}
	}
#---------------Botton-------------------#
	class buttonok{
		public $text,$cass=null,$id=null;

		function __construct($text,$id,$cass,$value){
			$this->text = $text;
			$this->cass	 = $cass;
			$this->value = $value;
			$this->id = $id;
		}
		function __toString(){
			return "<input type='submit' id='{$this->id}' class='{$this->cass}' name='{$this->value}'value='{$this->text}'/>";
		}
	}
	class buttoncheck{
		public $text,$cass=null;

		function __construct($text,$cass,$value,$onclick){
			$this->text = $text;
			$this->cass	 = $cass;
			$this->value = $value;
			$this->onclick = $onclick;
		}
		function __toString(){
			return "<input type='button' class='{$this->cass}' name='{$this->value}'value='{$this->text}' onClick='{$this->onclick}'/>";
		}
	}
?>
