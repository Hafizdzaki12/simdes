<?php
require_once ("component/Penduduk.php");
require_once ("component/List.php");

// get parameter
$page = 0;
$limit = 10;
$keyword = $getVars_keyword ? $getVars_keyword : $postVars_keyword;;


if ($keyword){
    $list = new Lists($ADODB);

    $M_KAWIN = $list->getMKawin();
    $M_AGAMA = $list->getMAgama();
    $M_WARGA = $list->getMWarga();
    $M_KERJA = $list->getMKerja();
    $M_PENDIDIDKAN = $list->getMPendidikan();

    $penduduk = new Penduduk($ADODB);
    $result = $penduduk->search($keyword, $limit, $page);

    for ($i = 0; $i < $result["numPage"]; $i++){
        $pageOptions[$i] = ($i + 1);
    }

    if (!$result)
        $errorCode = "notFound";
}
include_once ("template/penduduk.lookup.php");

?>