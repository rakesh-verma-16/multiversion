<?php

namespace Relaxed\LCA\LowestCommonAncerstor;

use Fhaculty\Graph\Vertex;
use Fhaculty\Graph\Graph;
use \Graphp\Algorithms\Tree\OutTree as outtree;

class LowestCommonAncestor {

function __construct(Graph $graph) {
$this->graph = $graph;
}

function find(Vertex $local, Vertex $remote) {
// @TODO
return $ancestor;
}
}