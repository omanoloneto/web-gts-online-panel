<?php

	class Maker{

		// CONFIGURAÇÕES DE COR
		private $card_color = "#26a69a";
		private $primary_color = "#009acd";
		// CONFIGURAÇÕES DE COR

		private $label = "";
		private $name = "";
		private $class = "";
		private $col = "12";
		private $value = "";
		private $link = "";
		private $href = "";
		private $icon = "";
		private $background = "";
		private $color = "";
		private $onclick = "";
		private $style = "";
		private $opacity = "";
		private $color_to_all = false;

		public function set_label($label)
		{
			$this->label = $label;
		}

		public function set_name($name)
		{
			$this->name = $name;
		}

		public function set_class($class)
		{
			$this->class = $class;
		}

		public function set_col($col)
		{
			$this->col = $col;
		}

		public function set_value($value)
		{
			$this->value = $value;
		}

		public function set_link($link)
		{
			$this->link = $link;
		}

		public function set_href($href)
		{
			$this->href = $href;
		}

		public function set_min($min)
		{
			$this->min = $min;
		}

		public function set_max($max)
		{
			$this->max = $max;
		}

		public function set_icon($icon)
		{
			$this->icon = $icon;
		}

		public function set_background($background)
		{
			$this->background = $background;
		}

		public function set_color($color)
		{
			$this->color = $color;
		}

		public function set_color_to_all($bool)
		{
			$this->color_to_all = $bool;
		}

		public function set_onclick($onclick)
		{
			$this->onclick = $onclick;
		}

		public function set_opacity($opacity)
		{
			$this->opacity = $opacity;
		}

		public function set_style($style)
		{
			$this->style = $style;
		}

		public function clear()
		{
		    $this->class="";
		    $this->col="12";
		    $this->name="";
		    $this->value="";
		    $this->label="";
		    $this->link="";
		    $this->href="";
		    $this->min="";
		    $this->max="";
		    $this->style="";
		    $this->icon="";
		    $this->background="";
		    $this->opacity="";
		    if($this->color_to_all == false) $this->color="";
		    $this->onclick="";
		}

		public function open_mobile_menu()
		{
			echo "<ul id=\"slide-out\" class=\"side-nav\" style=\"";
			if($this->background != "") echo "background: ".$this->background.";";
			if($this->opacity != "") echo "opacity: ".$this->opacity.";";
			echo "\">";
			$this->clear();
		}

		public function open_desk_menu()
		{
			echo "<!-- MENU - MODO DESKTOP --><nav><div class=\"nav-wrapper\" style=\"background-color: ".$this->primary_color.";\"><a href=\"../\" class=\"brand-logo\"><img src=\"images/logo.png\" height=\"54\" style=\"margin-left: 15px; margin-top: 5px;\" /></a> <ul class=\"right hide-on-med-and-down\">";
		}

		public function menu_dropdown($label="", $href="")
		{
			echo "<!--Dropdown Trigger-->
              <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"".$href."\">".$label."<i class=\"material-icons right\">arrow_drop_down</i></a></li>";
		}

		public function close_desk_menu()
		{
			echo "</ul> </div> </nav>";
		}

		public function close_mobile_menu()
		{
			echo "</ul>";
		}

		public function open_header()
		{
			echo "<div class=\"col s12 mobile-top-bar\">";
		}

		public function close_header()
		{
			echo "</div>";
		}

		public function open_div()
		{
			echo "<div class=\"col s".$this->col." ".$this->class."\">";
			$this->clear();
		}

		public function close_div()
		{
			echo "</div>";
		}

		public function menu_item($label, $href)
		{
			echo "<li><a id=\"".$this->name."\" href=\"".$href."\" style=\"";
			if($this->color != "") echo "color: ".$this->color.";";
			echo "\" ";

			if($this->onclick != "") echo "onclick=\"".$this->onclick."\"";

			echo ">".$label."</a></li>";
			$this->clear();
		}

		public function menu_divider()
		{
			echo "<li class=\"divider\"></li>";
		}

		public function hamburger_icon()
		{
			echo "<a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse show-on-large\"><i class=\"material-icons mobile-menu\">menu</i></a>";
		}

		public function open_row()
		{
			echo "<div class=\"row\">";
		}

		public function close_row()
		{
			echo "</div>";
		}

		public function divide_row()
		{
			echo "</div><div class=\"row\">";
		}

		public function title()
		{
			echo "<h4 class=\"header\" style=\"color: ".$this->primary_color.";\">".$this->label."</h4>";
			$this->clear();
		}

		public function input_text($required=false)
		{
			echo "<div class=\"input-field col s".$this->col."\">
		            <input id=\"".$this->name."\" name=\"".$this->name."\" type=\"text\" class=\"validate ".$this->class."\" value=\"".$this->value."\"";
		    if($this->max != "") echo " maxlength=\"".$this->max."\"";
		    if($this->color != "") echo "style=\"color: ".$this->color.";\"";
		    if($required == true) echo " required";
		    echo ">
		            <label for=\"".$this->name."\">".$this->label."</label>
		          </div>";

		    $this->clear();
		}

		public function input_textarea($required=false)
		{
			echo "<div class=\"input-field col s".$this->col."\">
			          <textarea id=\"".$this->name."\" name=\"".$this->name."\" class=\"materialize-textarea ".$this->class."\"";

		    if($this->max != "") echo " maxlength=\"".$this->max."\"";
		    if($required == true) echo " required";

			echo ">".$this->value."</textarea>
			          <label for=\"".$this->name."\">".$this->label."</label>
			       </div>";

		    $this->clear();
		}

		public function input_file($required=false)
		{
			echo "<div class=\"file-field input-field col s".$this->col."\">
			      <div class=\"btn\">
			        <span>".$this->label."</span>
			        <input type=\"file\" id=\"".$this->name."\" name=\"".$this->name."\"";

		    if($required == true) echo " required";

		    echo ">
			      </div>
			      <div class=\"file-path-wrapper\">
			        <input class=\"file-path validate\" type=\"text\" value=\"".$this->value."\">
			      </div>
			    </div>";

		    $this->clear();
		}

		public function input_hidden()
		{
			echo "<input id=\"".$this->name."\" name=\"".$this->name."\" type=\"hidden\" value=\"".$this->value."\"/>";

		    $this->clear();
		}

		public function input_number($required=false)
		{
			echo "<div class=\"input-field col s".$this->col."\">
		            <input id=\"".$this->name."\" name=\"".$this->name."\" type=\"number\" class=\"validate ".$this->class."\" value=\"".$this->value."\" min=\"".$this->min."\" max=\"".$this->max."\"";
		    if($required == true) echo " required";
		    echo ">
		            <label for=\"".$this->name."\">".$this->label."</label>
		          </div>";

		    $this->clear();
		}

		public function input_email($required=false)
		{
			echo "<div class=\"input-field col s".$this->col."\">
		            <input id=\"".$this->name."\" name=\"".$this->name."\" type=\"email\" class=\"validate ".$this->class."\" value=\"".$this->value."\"";
		    if($required == true) echo " required";
		    echo ">
		            <label for=\"".$this->name."\">".$this->label."</label>
		          </div>";

		    $this->clear();
		}

		public function input_password($required=false)
		{
			echo "<div class=\"input-field col s".$this->col."\">
		            <input id=\"".$this->name."\" name=\"".$this->name."\" type=\"password\" class=\"validate ".$this->class."\" value=\"".$this->value."\"";
		    if($required == true) echo " required";
		    echo ">
		            <label for=\"".$this->name."\">".$this->label."</label>
		          </div>";

		    $this->clear();
		}

		public function submit_button()
		{
			echo "<div class=\"input-field col s".$this->col."\">";

			if($this->href != "") echo "<a href=\"".$this->href."\">";

		    echo "<button class=\"btn waves-effect waves-light new-account ".$this->class."\" type=\"submit\" id=\"".$this->name."\" style=\"background-color: ".$this->primary_color.";";

		    if($this->color != "") echo "color: ".$this->color.";";

		    echo "\">".$this->label."
					    <i class=\"material-icons right\">";

			if($this->icon == "") echo "send";
			else echo $this->icon;

			echo "</i> </button>";

			if($this->href != "") echo "</a>";

		    echo "</div>";

		    $this->clear();
		}

		public function cancel_button()
		{
			echo "<div class=\"input-field col s".$this->col."\">";

			if($this->href != "") echo "<a href=\"".$this->href."\">";

		    echo "<button class=\"btn waves-effect waves-light new-account ".$this->class."\" type=\"button\" id=\"".$this->name."\" style=\"background-color: ".$this->card_color.";";

		    if($this->color != "") echo "color: ".$this->color.";";

		    echo "\">".$this->label."
					    <i class=\"material-icons right\">";

			if($this->icon == "") echo "send";
			else echo $this->icon;

			echo "</i> </button>";

			if($this->href != "") echo "</a>";

		    echo "</div>";

		    $this->clear();
		}

		public function button()
		{
			echo "<div class=\"input-field col s".$this->col."\">";

			if($this->href != "") echo "<a href=\"".$this->href."\">";

		    echo "<button class=\"btn waves-effect waves-light new-account ".$this->class."\" type=\"button\" id=\"".$this->name."\" style=\"background-color: ".$this->primary_color.";";

		    if($this->color != "") echo "color: ".$this->color.";";

		    echo "\">".$this->label."
					    <i class=\"material-icons right\">";

			if($this->icon == "") echo "send";
			else echo $this->icon;

			echo "</i> </button>";

			if($this->href != "") echo "</a>";

		    echo "</div>";

		    $this->clear();
		}

		public function card()
		{
			echo "
		        <div class=\"col s".$this->col."\">
		          <div class=\"card\" style=\"background-color: ".$this->card_color.";\">
		            <div class=\"card-content white-text\">
		              <span class=\"card-title\">".$this->label."</span>
		              <p>".$this->value."</p>
		            </div>";

		    if($this->link != ""){
	        	echo "<div class=\"card-action\">
	              <a href=\"".$this->href."\">".$this->link."</a>
	            </div>";
	        }

		    echo "</div>
		        </div>
		    ";
		}

		public function open_table($string)
		{
			$array = explode(",", $string);

			echo "<table class=\"striped\"> <thead> <tr>";

			foreach ($array as $key => $value) {
				echo "<th>".$value."</th>";
			}

			echo "</tr> </thead> <tbody>";
          
		}

		public function column($string="")
		{
			echo "<td style=\"".$this->style."\">".$string."</td>";

			$this->clear();
		}

		public function open_line()
		{
			echo "<tr>";
		}

		public function close_line()
		{
			echo "</tr>";
		}

		public function open_column()
		{
			echo "<td>";
		}

		public function close_column()
		{
			echo "</td>";
		}

		public function open_dropdown()
		{
			echo "<!-- MENU DROPDOWN - MODO DESKTOP -->
        		<ul id=\"".$this->name."\" class=\"dropdown-content\">";

        	$this->clear();
		}

		public function close_dropdown()
		{
			echo "</ul>";
		}

		public function close_table()
		{
			echo "</tbody></table>";
		}

		public function delete_button()
		{
			echo "<a href=\"".$this->href."\"><i class=\"material-icons\" style=\"color: ".$this->primary_color.";\" title=\"Excluir\">delete</i></a>";

			$this->clear();
		}

		public function space($num='')
		{
			for ($i=0; $i < $num; $i++) { 
				echo "&nbsp;";
			}
		}

		public function edit_button()
		{
			echo "<a href=\"".$this->href."\"><i class=\"material-icons\" style=\"color: ".$this->primary_color.";\" title=\"Editar\">mode_edit</i></a>";

			$this->clear();
		}

		public function icon_button()
		{
			echo "<a href=\"".$this->href."\"><i class=\"material-icons\" style=\"color: ".$this->primary_color.";\" title=\"".$this->label."\">".$this->icon."</i></a>";

			$this->clear();
		}

		public function input_select($array, $required=false)
		{
			echo "<div class=\"input-field col s".$this->col."\">
				    <select name=\"".$this->name."\" id=\"".$this->name."\" ";

			if($required == true) echo " required";

			echo "> <option value=\"0\" disabled";

			if($this->value == "") echo " selected";

			echo ">Selecione...</option>";

			foreach ($array as $key => $value) {
				if($key == $this->value) echo "<option value=\"".$key."\" selected>".$value."</option>";
				else echo "<option value=\"".$key."\">".$value."</option>";
			}

			echo "</select>
			    <label>".$this->label."</label>
			  </div>";

			$this->clear();
		}

	}

?>