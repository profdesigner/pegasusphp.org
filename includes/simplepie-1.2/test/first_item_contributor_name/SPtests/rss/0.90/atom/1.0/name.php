<?php

class SimplePie_First_Item_Contributor_Name_Test_RSS_090_Atom_10_Name extends SimplePie_First_Item_Contributor_Name_Test
{
	function data()
	{
		$this->data = 
'<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://my.netscape.com/rdf/simple/0.9/" xmlns:a="http://www.w3.org/2005/Atom">
	<item>
		<a:contributor>
			<a:name>Item Contributor</a:name>
		</a:contributor>
	</item>
</rdf:RDF>';
	}
	
	function expected()
	{
		$this->expected = 'Item Contributor';
	}
}

?>