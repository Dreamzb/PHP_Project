/*
 * Constructor function for a WeatherWidget instance.
 * 
 * container_element : a DOM element inside which the widget will place its UI
 *
 */
 
function WeatherWidget(container_element){
	var _towns = [];   //will store the towns selected by the user
	var _weather =[];   //an array of WLines
	var _ui = {     //an object representing the widget's UI
		sort_order  :   null,
		container	:	null,
		titlebar	:	null,
		toolbar		: 	null,
		list 		: 	null,
	};
	
	/*********************************************************
	* Constructor function for the WLine object to hold the 
	* full weather data for a town
	********************************************************/
	
	var WLine = function(wtown, woutlook, wmin, wmax){
		/*********************************************************
		 *  Declare the properties for this object to store the 
		 *  relevant data
		 ********************************************************/
		var town=wtown;
		var outlook=woutlook;
		var min_temp=wmin;
		var max_temp=wmax;
		
		var _ui = {
			dom_element  : null,
			name_label   : null,
			outlook_label : null,
			max_temp_label : null,
			min_temp_label : null,
		};
		
		var _createUI = function(){
			
		/*********************************************************
		 *
		 * Add code here to create and configure the DOM elements
		 *
		 * 	- for the name, outlook and temp labels
		 *
		 * constructing an appropriate DOM subtree
		 *
		 ********************************************************/
			_ui.dom_element = document.createElement('div');
			_ui.dom_element.className="section";
			
			var _name_label=document.createElement("span");
			_name_label.innerHTML=town+" ";
			
			var _outlook_label=document.createElement("span");
			_outlook_label.innerHTML=outlook+" ";

			var _min_temp_label=document.createElement("span");
			_min_temp_label.innerHTML=min_temp+" ";

			var _max_temp_label=document.createElement("span");
			_max_temp_label.innerHTML=max_temp;


			
			_ui.dom_element.appendChild(_name_label);
			_ui.dom_element.appendChild(_outlook_label);
			_ui.dom_element.appendChild(_min_temp_label);
			_ui.dom_element.appendChild(_max_temp_label);
			
			
		}
		
		
		this.getTown = function(){
			return town;
		}
			
		this.getMaxTemp = function(){
			return max_temp;
		}
		
		this.getDomElement = function(){
			return _ui.dom_element;
		}
		_createUI();


	 
  };  //this is the end of the function constructor for the WLine object 
	
	
	
	//public method to get the array of selected towns
	this.getTowns = function(){
		return towns;
	}
	
	
	/*********************************************************
	 *   
	 *  Add code here for a private method to read the state of the sort radio buttons 
	 *  and update sort order and refresh list display
	 *  
	 ********************************************************/
	var _setSortOrder = function(sort_order){
		if (sort_order=="town") {
			_ui.sort_order="town";
		}
		if(sort_order=="temp"){
			_ui.sort_order="temp";
		}
		_refreshWeatherDisplay();	
	}
	
	
	var _createUI = function(){
		_ui.sort_order = "town";    //default value
		_ui.container = container_element;
		_ui.container.className = "monitor";
		
		/*********************************************************
		 *
		 * Add code here to create and configure the DOM elements
		 *
		 * 	- for the titlebar
		 *  - for the selection within the titlebar
		 *  - for the sort radio buttons
		 *  - for the weather list
		 *
		 * constructing an appropriate DOM subtree
		 *
		 ********************************************************/

		 _ui.titlebar=document.createElement("div");
		 _ui.titlebar.className="title";
		 
		 var _label=document.createElement("span");
		 _label.innerHTML="Select town:";
		 
		 _ui.titlebar.appendChild(_label);




		 var selection=document.createElement("select");
		 selection.id="_town_selection";
		 selection.onchange=function(){
		 	_checkNewTown(this.value);
		 	};
		 _ui.titlebar.appendChild(selection);
		 


		 var cities = ["","Hamilton","Auckland","Christchurch","Dunedin","Tauranga","Wellington"]; // create a array and array will have same cities
		for(var i = 0; i < cities.length; i++) {
   		 	var opt = document.createElement('option');
   			 opt.innerHTML = cities[i];
    		opt.value = cities[i];
    		selection.appendChild(opt);
		}


		 var _updateW=document.createElement("span");
		 _label.innerHTML="";
		 _ui.titlebar.appendChild(_updateW);
		 
		 var _update=document.createElement("input");
		 _update.type="submit";
		 _update.id="_weather_update";
		 _update.value="Update";
		 _update.onclick=function(){
		 	_updateWeather();
		 };
		 _ui.titlebar.appendChild(_update);


		  var _label_up=document.createElement("span");
		 _label.innerHTML="Select town:";

   		 _ui.toolbar=document.createElement("div");
     	_ui.toolbar.className="toolbar";

     	var tool_label=document.createElement("span");
    	 tool_label.innerHTML="Sort by ";
    	 _ui.toolbar.appendChild(tool_label);


     	 var choice = ["town","temp"];                               // create radio for town and temp
		for(var i = 0; i < choice.length; i++) {
   		 	var opt = document.createElement('input');
   		 	var sub_label=document.createElement("span");
    		 	sub_label.innerHTML=choice[i];
   			 	opt.innerHTML = choice[i];
   			 	console.log("i");
   				opt.type="radio";
   				opt.name="sort";
   				opt.id = choice[i];
    		    opt.value = choice[i];
    			_ui.toolbar.appendChild(opt);
    			_ui.toolbar.appendChild(sub_label);
				    if(opt.value=="town")
					{
 						opt.checked=true;
 						opt.onclick=function(){
     						_setSortOrder("town");
     					};
					}
					if(opt.value=="temp")
					{
						
 						opt.onclick=function(){
     						_setSortOrder("temp");
     					};
					}
				}
     		var sel = document.getElementsByName("sort");                    
			for(var i = 0; i < sel.length; i++){ 
				console.log("i");
				if(sel[i].checked){ 
				var s = sel[i].value; 
				if(s.value=="town")
					{
 						sel[i].onclick=function(){
     						_setSortOrder("town");
     					};
					}
					if(s.value=="temp")
					{
 						sel[i].onclick=function(){
     						_setSortOrder("temp");
     					};
					}
					break;	
				} 
			} 
        

      
     
    		 _ui.list=document.createElement("div");
    		 _ui.list.className="list";
     
     		_ui.container.appendChild(_ui.titlebar);     
     		_ui.container.appendChild(_ui.toolbar);
     		_ui.container.appendChild(_ui.list);     	
		
		}
	

	 var _checkNewTown =  function(ntown){
	/*********************************************************
	 *
	 * Add code here to check if a selected town is already in the 
	 * list. If not, add it to the list and call _getWeatherInfo 
	 * and update the display, if yes, do nothing
	 *
	 ********************************************************/
	 var check=true;
	if(check==true){
		_getWeatherInfo(ntown);
		_towns.push(ntown);
	}
	 }
	
	for(var i=0;i<_towns.length;i++){                       // data will keeping cheack the same data and delete it 
   	 for(var j=i+1;j<_towns.length;j++){  
     	 	 if(_towns[j]===_towns[i]) {  
         	  array.splice(j,1);  
         		  j--;  
       			  }  
         
   			}  
		}
	
	
	var _updateWeather=function(){
		_weather=[];
		
		for(var i=0;i<_towns.length;i++){
			_getWeatherInfo(_towns[i]);
		}
	}
	

	 var _getWeatherInfo = function(ntown){
	 /*********************************************************
	 *
	 * Add code here to create the AJAX request and update with 
	 * the server's response
	 *
	 ********************************************************/
	 
	 dojo.xhrGet({
	 	url:"PHP/weather.php?town="+ntown,
	 	handleAs:"json",
	 	timeout:5000,
	 	load:function(response,details){
	 		_refreshWeatherList(response);
	 	}
	});	
	}
	 
	   
	   var _refreshWeatherList = function(weather_info) {
	/*********************************************************
	 *
	 * Add code here to iterate through the returned data
	 * and add each new item into the _weather array, then call
	 * the _refreshWeatherDisplay method
	 *
	 ********************************************************/
var check=false;
	 
	 for(var i=0;i<_weather.length;i++){
	 	if(_weather[i].getTown()==weather_info[0]){
	 		check=true;
	 		break;
	 	}
	 	
	
	}
	if(check==false){
	var data_town 	=weather_info[0];
	var data_outlook =	weather_info[1];
	var data_min_temp =	weather_info[2];
	var data_max_temp =	weather_info[3];
		_weather.push(new WLine(data_town,data_outlook,data_min_temp,data_max_temp));
	}
	_refreshWeatherDisplay();



   }

	 var _refreshWeatherDisplay = function() {
	 
	 /*********************************************************
	 *
	 * Add code here to update the displayed weather items
	 * - remove the existing nodes of the _ui.list div
	 * - check the required sort order of the data and sort accordingly
	 * - append the items in _weather to _ui.list
	 *
	 ********************************************************/
	 while(_ui.list.hasChildNodes()){
	 	_ui.list.removeChild(_ui.list.lastChild);
	 	}
	 	
	 	if(_ui.sort_order=="town"){
	 		_weather.sort(_sortByTown);
	 	}
	 	if(_ui.sort_order=="temp"){
	 		_weather.sort(_sortByTemp);
	 	}
	 	
	 	for(var i=0;i<_weather.length;i++){
	 		var weather=_weather[i];
	 		_ui.list.appendChild(weather.getDomElement());
	 	}
	 	
	 }
	 

	 var _sortByTown = function(w1, w2) {
	/*********************************************************
	 *
	 * Add code here to define sorting of WLine objects
	 * by town name
	 *
	 ********************************************************/	
	 if(w1.getTown()>w2.getTown()) 	
	 
	 return 1;
	 else if(w1.getTown()<w2.getTown()) 		
	 return -1;
	 else
	 return 0;
	 }




	  var _sortByTemp = function(w1, w2) {
	 /*********************************************************
	 *
	 * Add code here to define sorting of WLine objects
	 * by max temp
	 *
	 ********************************************************/	
	 if(w1.getMaxTemp()>w2.getMaxTemp()) 	
	 return 1;
	 else if(w1.getMaxTemp()<w2.getMaxTemp()) 		
	 return -1;
	 else return 0;
	 	 
	 }
	 
	 /**
	  * private method to intialise the widget's UI on start up
	  */
	  var _initialise = function(container_element){
	  	_createUI(container_element);
	  	}
	  	
	  _initialise(container_element);
}
	 
		 	 
	 
	 
