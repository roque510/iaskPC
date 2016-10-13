<?php require_once("funciones.php"); ?>

  <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <img class="background" src="images/office.jpg">
      <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
<div class="row parent">
	
<div class="charts col s12 l12">
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Compras</a></li>
        <li class="tab col s3"><a class="" href="#test2">Ventas</a></li>
        <li class="tab col s3 "><a href="#test3">Metas Anuales</a></li>
        <li class="tab col s3"><a href="#test4">Inventario</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
    	<?php bloque("medidorCompra","row container"); ?>
		<div class="row">
			<div class="col m6 s12 center ">
				<div id="container" >
					<canvas id="radar" ></canvas>
				</div>	
			</div>
			<div class="col m6 s12 center ">
				<div id="container" >
			
		        <canvas id="pie"></canvas>
		    
				</div>	
			</div>

		</div>
    </div>
    <div id="test2" class="col s12">
    		<?php bloque("medidorVenta","row container"); ?>
    		<div class="row ">
				<div class="col m6 s12 center ">
					<div id="container" >
						<canvas id="myChart" ></canvas>
					</div>	
				</div>
				<div class="col m6 s12 center ">
					<div id="container" >
				
			        <canvas id="canvas"></canvas>
			    
					</div>	
				</div>

    		</div>
    </div>
    <div id="test3" class="col s12">
    	
    	      <table class="col s12 m6 border-obj striped highlight responsive-table">
		        <thead>
		          <tr>
		          	  <th data-field="id"></th>
		              <th data-field="id">Ventas Netas</th>
		              <th data-field="name">Margen Bruto</th>
		              <th data-field="price">Utilidad Neta</th>
		              <th data-field="price">Margen Neto</th>
		              <th data-field="price">TOTAL</th>

		          </tr>
		        </thead>

		        <tbody>
		          <tr>
		          	<b><td style="font-weight:bolder;">Actual</td></b>
		            <td>L5.6</td>
		            <td>6</td>
		            <td>7</td>
		            <td>8</td>		            
		            <td>30</td>
		          </tr>
		          <tr>
		          	<b><td style="font-weight:bolder;">Jun-15</td></b>
		            <td>6</td>
		            <td>6.3</td>
		            <td>7.35</td>
		            <td>8.4</td>		            
		            <td>37.5</td>
		          </tr>
		          <tr>
		          	<b><td style="font-weight:bolder;">May-16</td></b>
		          	<td>6</td>
		          	<td>6.6</td>
		          	<td>7.7</td>
		            <td>8.82</td>		            
		            <td>39</td>
		          </tr>
		          <tr>
		          	<b><td style="font-weight:bolder;">2016</td></b>
		            <td>6</td>
		            <td>7.29</td>
		            <td>8.5</td>
		            <td>9.7</td>		            
		            <td>42.4</td>
		          </tr>
		        </tbody>
		      </table>


  <ul class="collapsible popout col m4 s12" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>

  <div class="row">
			<div class="col m6 s12 center ">
				<div id="container" >
					<canvas id="bar" ></canvas>
				</div>	
			</div>
			<div class="col m6 s12 center ">
				<div id="container" >
			
		        <canvas id="doughnut"></canvas>
		    
				</div>	
			</div>

		</div>



    </div>
    <div id="test4" class="col s12">
    	<div class="col s8">
    		<div id="container" >
			
		        <canvas id="linear"></canvas>
		    
			</div>
    		
    	</div>
	    <div class="col s4">
	    	


			     <div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">
              	
					<svg width="300px" height="90px">
			    	  <defs>
					    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
					    <stop offset="0%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
					      <stop offset="50%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
					      <stop offset="100%" style="stop-color:rgb(0,255,0);stop-opacity:1" />
					      
					    </linearGradient>
					  </defs>
					  <path d="m 15.5 66 a 4.5 4.5 0 0 0 9 0" fill="red" />

					  <path d="m 100.5 66 a 4.5 4.5 0 0 0 9 0" fill="#00FF00" />
					  <path d="m 20 66 a 42.5 42.5 0 0 1 85 0" fill="none" stroke="url(#grad1)" stroke-width="9" />
					  <path id="needle" d="m 50 60 a 13.5 17 0 1 0 27 0 l -13.5 -73 z" fill="#000" stroke="#546e7a" stroke-width="9"/>
					</svg>
					<h4 style="margin-top:-20px; margin-left:35px;">60%</h4>
				Positivo
              </span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            
          </div>
        </div>
      </div>

		</div>

  </div>

</div>



</div>

	
</div>
