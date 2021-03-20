<?PHP

$expire=time()+60*60*24*30*12;


//Imprime la cabecera del panel
function imprimir_cabeza($seleccion)
{
	print('<!-- MENU -->
        <header class="l-header l-header-1 t-header-1">
          <div class="navbar navbar-ason">
            <div class="container-fluid">
                
              <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#ason-navbar-collapse" class="navbar-toggle collapsed">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
				<div>
					<a href="../home/index.php" class="btn dropdown-toggle selecion "><h3 style="font-family: \'Open Sans\', sans-serif; margin-top: 4px">PANEL DE GESTIÓN</h3></a>
				</div>
			  </div>
              
              <div id="ason-navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <div class="">
                      <a href="../index.html" class="btn dropdown-toggle selecion"><h3 style="font-family: \'Open Sans\', sans-serif; margin-top: 4px"><i class="fa fa-power-off"></i></h3></a>
                    </div>
                  </li>
                  
                </ul>
              </div>
              
            </div>
          </div>
        </header>
        <!-- FIN MENU -->');
}








































