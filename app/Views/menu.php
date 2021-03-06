<?= $this->section('menu') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>


<div id="sidebar" class="sidebar responsive ace-save-state">
        <script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
  <ul class="nav nav-list">


<?php

$controllers = array();

$controllers['Automovel'][] = "Criar";
$controllers['Automovel'][] = "Listar";
$controllers['Automovel']['icon'] = "fa-car";

$controllers['Cargo'][] = "Criar";
$controllers['Cargo'][] = "Listar";
$controllers['Cargo']['icon'] = "fa-briefcase";

$controllers['Cliente'][] = "Criar";
$controllers['Cliente'][] = "Listar";
$controllers['Cliente']['icon'] = "fa-user";

$controllers['Funcionario'][] = "Criar";
$controllers['Funcionario'][] = "Listar";
$controllers['Funcionario']['icon'] = "fa-id-badge";

$controllers['Locacao'][] = "Criar";
$controllers['Locacao'][] = "Listar";
$controllers['Locacao']['icon'] = "fa-handshake-o";

$controllers['Marca'][] = "Criar";
$controllers['Marca'][] = "Listar";
$controllers['Marca']['icon'] = "fa-certificate";

$controllers['Modelo'][] = "Criar";
$controllers['Modelo'][] = "Listar";
$controllers['Modelo']['icon'] = "fa-clone";

// echo '<pre>';
// var_dump($controllers);

foreach ($controllers as $contr_name => $contr) {
  echo "
  <li class=''>
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
      <i class=\"menu-icon fa ".$contr['icon']."\"></i>
      <span class=\"menu-text\">
        $contr_name
      </span>

      <b class=\"arrow fa fa-angle-down\"></b>
    </a>

    <b class=\"arrow\"></b>
      <ul class=\"submenu\">
    ";

  foreach ($contr as $key => $method) {

    if($method == "Criar")   $url = base_url("public/".$contr_name."/form_create");
    elseif ($method == "Listar") {
      $url = base_url("public/".$contr_name."/".$method);
    }
    else { continue;}

    echo "
        <li class=\"\">
          <a href=\"$url\">
            <i class=\"menu-icon fa fa-tachometer\"></i>
            $method

            </a>
          <b class=\"arrow\"></b>
        </li>
    ";
  }
  echo "
    </ul>
  </li>
  ";
}


 ?>
  </ul><!-- /.nav-list -->

  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon"
       class="ace-icon fa fa-angle-double-left"
       data-icon1="ace-icon fa fa-angle-double-left"
       data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>

<?= $this->endSection() // ENCERRA A SECTION?>
