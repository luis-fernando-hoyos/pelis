<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut" >
	<div align="center"  >
		<img src="{{ url('img/logo.jpg') }}" width="150px" />
	<div style="background: #FFFFFF; ">
		<span>
				<span>
				  @if (Auth::guest())
					Usuario no Logueado 
				  @else
				 	{{ Auth::user()->name }} 
				  @endif	
				</span>
				<i class="fa fa-angle-down"></i>
				 
		</span>
	</div>
	</div>
</a> 
<?php 

//$sql ="SELECT * from menu where posicion_x > 0 order by orden asc";

//$result = DB::select('SELECT * from menu where posicion_x > 0 order by orden asc'); 

//$menu = new Menu();
//$y = new Menu();
/*$html="";
$html.= "<nav>";
$html.= "<ul style=''>";
foreach( $result as $fila ){
			$ymenu = DB::select("SELECT * from menu where posicion_y = '$fila->posicion_x' order by orden asc");
			$html.= "<li class=''> \n";
				$html.= "<a href='".url($fila->url)."' title='$fila->tittle'> \n";
						$html.= "<i class='fa $fila->iconsleft'></i> \n";
						$html.= "<span class='menu-item-parent'>$fila->descripcion</span>";
				$html.= "</a>";
				$html.= "<ul>";
					foreach($ymenu as $y_menu):		
						$html.= "<li>
									<a href='".url($y_menu->url)."'>
										<i class='fa ".$y_menu->iconsleft."'></i> 
										<span class='menu-item-parent'>".$y_menu->descripcion." </span>
									</a>
								</li>"; 
					endforeach;		
				$html.= "</ul>";		
			$html.= "</li>";

}
$html.= "</ul>";
$html.= "</nav>";
echo $html;

?>
</nav>
<span data-action="minifyMenu" class="minifyme"> 
<i class="fa fa-arrow-circle-left hit"></i> 
</span>