<?php 

/**
*search matched documents according to keywords and other information. Return an array of IDs of matched documents
*/
function matching($selectlist,$keywordlist,$relation, $orderAttribute){
	
	//去掉未填项
	$keywordlist=array_filter($keywordlist);
	if(count($keywordlist)==0){
		return array();
	}
	$keyword_arr=array();
	$ID_arr=array();
	$getSearch="select * from trade t,post p where t.trade_id=p.trade_id and ";
	
	$j=-1;//j表示字段间逻辑
	for($i=0;$i<count($keywordlist);$i++){	
		if($j>=0){
			if($relation[$j]=="&"){
				$getSearch=$getSearch." and ";
			}
			else if($relation[$j]=="|"){
				$getSearch=$getSearch." or ";
			}
		}
		$j++;
		$getSearch=$getSearch." t.".$selectlist[$i]." regexp '".$keywordlist[$i]."'";
	}
	$getSearch=$getSearch."order by ".$orderAttribute;
	echo $getSearch;
	$result=mysql_query($getSearch);
	
	return $result;
	
}
?>