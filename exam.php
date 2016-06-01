<?php
require_once 'vendor/autoload.php';

use \Fhaculty\Graph\Graph as Graph;
//use \Graphp\Algorithms\Search\DepthFirst as search;
use \Graphp\Algorithms\Tree\OutTree as intree;
$graph = new Graph();

// create some cities
$one = $graph->createVertex('One');
$two = $graph->createVertex('Two');
$three = $graph->createVertex('Three');
$four = $graph->createVertex('Four');
$five =$graph->createVertex('Five');
$six = $graph->createVertex('Six');
$seven = $graph->createVertex('Seven');
$eight = $graph->createVertex('Eight');
$nine = $graph->createVertex('Nine');
$ten = $graph->createVertex('Ten');
$eleven = $graph->createVertex('Eleven');
$twelve = $graph->createVertex('Twelve');
$thirteen =$graph->createVertex('Thirteen');
$fourteen = $graph->createVertex('Fourteen');
$fifteen = $graph->createVertex('Fifteen');
$sixteen = $graph->createVertex('Sixteen');
$seventeen= $graph->createVertex('Seventeen');
$eighteen = $graph->createVertex('Eighteen');
$nineteen = $graph->createVertex('Nineteen');
$twenty = $graph->createVertex('Twenty');
$twenty_one = $graph->createVertex('Twenty One');

$one->createEdgeTo($three);
$one->createEdgeTo($two);
$two->createEdgeTo($four);
$three->createEdgeTo($eight);
$four->createEdgeTo($five);
$four->createEdgeTo($six);
$four->createEdgeTo($seven);
$eight->createEdgeTo($nine);
$eight->createEdgeTo($ten);
$five->createEdgeTo($eleven);
$five->createEdgeTo($twelve);
$twelve->createEdgeTo($fourteen);
$twelve->createEdgeTo($fifteen);
$six->createEdgeTo($thirteen);
$seven->createEdgeTo($sixteen);
$nine->createEdgeTo($seventeen);
$seventeen->createEdgeTo($twenty);
$seventeen->createEdgeTo($nineteen);
$ten->createEdgeTo($eighteen);
$eighteen->createEdgeTo($twenty_one);

$flag = False;
$root = $one;
$rev_c1 = $eleven;
$rev_c2 = $five;
$root_id = $root->getId();
//Array to store the parents of revision_c1
$array1 = array();
//Array to store the parents of revision_c2
$array2 = array();
$gettingpar = new intree($graph);
$item = $gettingpar->getVertexParent($rev_c1);
while($item->getId()!=$root_id){
    $parent_name = $item->getId();
    $array1[$parent_name] = 'Blue';
    $item = $gettingpar->getVertexParent($item);
}

$parentnode2 = new intree($graph);
$parent2 = $parentnode2->getVertexParent($rev_c2);
while ($parent2->getId() !== $root_id){
    $name_parent2 = $parent2->getId();
    $array2[$item->getId()] = 'RED';
    $array2[$name_parent2] = "RED";
    $parent2 = $parentnode2->getVertexParent($parent2);
}

foreach ($array2 as $key=>$value)
{
    if (isset($array1[$key]))
    {
        echo "LCA of is $key\n";
        $flag = True;
        break;
    }
}
if($flag !== True)
{
    echo "LCA is $root_id\n";
}
