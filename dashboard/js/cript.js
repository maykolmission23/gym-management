var count=0;

var elementMember;
var elementplan;
var elementoverview;
var elementroutine;
var elementtrainer;
var elementregister;


function collapseSidebar() {
	if(count==0){
		initializeMember();
		var element=document.getElementById("navbarcollapse");
		 element.className = element.className.replace("page-container sidebar-collapsed", "page-container");
		  if(memcount==0)
		  	elementMember.className=elementMember.className.replace("","has-sub");
		  else if(memcount==1){
		  	elementMember.className=elementMember.className.replace("","has-sub opened");
		  }

		  if(plancount==0)
		  	elementplan.className=elementplan.className.replace("","has-sub");
		  else if(plancount==1)
		  	elementplan.className=elementplan.className.replace("","has-sub opened");

		  if(overviewcount==0)
		  	elementoverview.className=elementoverview.className.replace("","has-sub");
		  else if(overviewcount==1)
		  	elementoverview.className=elementoverview.className.replace("","has-sub opened");

		  if(routinecount==0)
		  	elementroutine.className=elementroutine.className.replace("","has-sub");
		  else if(routinecount==1)
		  	elementroutine.className=elementroutine.className.replace("","has-sub opened");
			  
		  if(trainercount==0)
		  	elementtrainer.className=elementtrainer.className.replace("","has-sub");
		  else if(trainercount==1)
		 	elementtrainer.className=elementtrainer.className.replace("","has-sub opened");

		 if(registercount==0)
		  	elementregister.className=elementregister.className.replace("","has-sub");
		  else if(registercount==1)
		  elementregister.className=elementregister.className.replace("","has-sub opened");


		 count=1;
	}
	else if(count==1){
		var element=document.getElementById("navbarcollapse");
		 element.className = element.className.replace("page-container", "page-container sidebar-collapsed");
		  
		 
		 if(memcount==0){
		  	elementMember.className=elementMember.className.replace("has-sub","");
		  }else if(memcount==1){
		  	elementMember.className=elementMember.className.replace("has-sub opened","");
		  } 	

		  if(plancount==0)
		  	elementplan.className=elementplan.className.replace("has-sub","");
		  else
		  	elementplan.className=elementplan.className.replace("has-sub opened","");

		   if(overviewcount==0)
		  	elementoverview.className=elementoverview.className.replace("has-sub","");
		  else if(overviewcount==1)
		  	elementoverview.className=elementoverview.className.replace("has-sub opened","");

		  if(routinecount==0)
		  	elementroutine.className=elementroutine.className.replace("has-sub","");
		  else if(routinecount==1)
		  	elementroutine.className=elementroutine.className.replace("has-sub opened","");

			if(trainercount==0)
		  	elementtrainer.className=elementtrainer.className.replace("has-sub","");
		  else if(trainercount==1)
		 	 elementtrainer.className=elementtrainer.className.replace("has-sub opened","");

			if(registercount==0)
		  	elementregister.className=elementregister.className.replace("has-sub","");
		  else if(registercount==1)
		  elementregister.className=elementregister.className.replace("has-sub opened","");



		 count=0;
	}
 
}

function initializeMember(){
	elementMember=document.getElementById("hassubopen");
	elementplan=document.getElementById("planhassubopen");
	elementoverview=document.getElementById("overviewhassubopen");
	elementroutine=document.getElementById("routinehassubopen");
	elementtrainer=document.getElementById("trainhassubopen");
	elementregister=document.getElementById("registerhassubopen");
}

var memcount=0;
var plancount=0;
var overviewcount=0;
var routinecount=0;
var trainercount=0;
var registercount=0;


function memberExpand(passvalue){

	if(passvalue==1){
		if(memcount==0){
		
		    if(plancount==1){
				elementplan.className=elementplan.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("planExpand");
				 element.className = element.className.replace("visible", "");
			 	plancount=0;
		    }
		    if(overviewcount==1){
				elementoverview.className=elementoverview.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("overviewExpand");
				 element.className = element.className.replace("visible", "");
			 	overviewcount=0;
		    }
		    if(routinecount==1){
		    	elementroutine.className=elementroutine.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("routineExpand");
				 element.className = element.className.replace("visible", "");
			 	  routinecount=0;
		    }
			if(trainercount==1){
		    	elementtrainer.className=elementtrainer.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("trainExpand");
				 element.className = element.className.replace("visible", "");
			 	  trainercount=0;  
		    }
			if(registercount==1){
		    	elementregister.className=elementregister.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("registerExpand");
				 element.className = element.className.replace("visible", "");
				 registercount=0;
				   
		    }

			elementMember.className=elementMember.className.replace("has-sub","has-sub opened");

			var element=document.getElementById("memExpand");
			 element.className = element.className.replace("", "visible");
			 memcount=1;
		}
		else if(memcount==1){
			elementMember.className=elementMember.className.replace("has-sub opened","has-sub");

			var element=document.getElementById("memExpand");
			 element.className = element.className.replace("visible", "");
			 memcount=0;
		}
	}
	else if(passvalue==2){
		if(plancount==0){

			if(memcount==1){
				elementMember.className=elementMember.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("memExpand");
				 element.className = element.className.replace("visible", "");
			 	 memcount=0;
		    }
		    if(overviewcount==1){
				elementoverview.className=elementoverview.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("overviewExpand");
				 element.className = element.className.replace("visible", "");
			 	overviewcount=0;
		    }
		    if(routinecount==1){
		    	elementroutine.className=elementroutine.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("routineExpand");
				 element.className = element.className.replace("visible", "");
			 	  routinecount=0;
		    }
			if(trainercount==1){
		    	elementtrainer.className=elementtrainer.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("trainExpand");
				 element.className = element.className.replace("visible", "");
			 	  trainercount=0;
		    }
			if(registercount==1){
		    	elementregister.className=elementregister.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("registerExpand");
				 element.className = element.className.replace("visible", "");
				 registercount=0;
				   
		    }
		
			elementplan.className=elementplan.className.replace("has-sub","has-sub opened");

			var element2=document.getElementById("planExpand");
			 element2.className = element2.className.replace("", "visible");
			 plancount=1;
		}
		else if(plancount==1){
			elementplan.className=elementplan.className.replace("has-sub opened","has-sub");

			var element2=document.getElementById("planExpand");
			 element2.className = element2.className.replace("visible", "");
			 plancount=0;
		}
	}
	else if(passvalue==3){
		if(overviewcount==0){
		
			if(plancount==1){
				elementplan.className=elementplan.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("planExpand");
				 element.className = element.className.replace("visible", "");
			 	plancount=0;
		    }
		    if(memcount==1){
				elementMember.className=elementMember.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("memExpand");
				 element.className = element.className.replace("visible", "");
			 	memcount=0;
		    }
		    if(routinecount==1){
		    	elementroutine.className=elementroutine.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("routineExpand");
				 element.className = element.className.replace("visible", "");
			 	  routinecount=0;
		    }
			if(trainercount==1){
		    	elementtrainer.className=elementtrainer.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("trainExpand");
				 element.className = element.className.replace("visible", "");
			 	  trainercount=0;
		    }
			if(registercount==1){
		    	elementregister.className=elementregister.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("registerExpand");
				 element.className = element.className.replace("visible", "");
				 registercount=0;
				   
		    }

			elementoverview.className=elementoverview.className.replace("has-sub","has-sub opened");

			var element3=document.getElementById("overviewExpand");
			 element3.className = element3.className.replace("", "visible");
			 overviewcount=1;
		}
		else if(overviewcount==1){
			elementoverview.className=elementoverview.className.replace("has-sub opened","has-sub");

			var element3=document.getElementById("overviewExpand");
			 element3.className = element3.className.replace("visible", "");
			 overviewcount=0;
		}
	}
	else if(passvalue==4){
		if(routinecount==0){
		
			if(plancount==1){
				elementplan.className=elementplan.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("planExpand");
				 element.className = element.className.replace("visible", "");
			 	plancount=0;
		    }
		    if(overviewcount==1){
				elementoverview.className=elementoverview.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("overviewExpand");
				 element.className = element.className.replace("visible", "");
			 	overviewcount=0;
		    }
		   if(memcount==1){
				elementMember.className=elementMember.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("memExpand");
				 element.className = element.className.replace("visible", "");
			 	memcount=0;
		    }
			if(trainercount==1){
		    	elementtrainer.className=elementtrainer.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("trainExpand");
				 element.className = element.className.replace("visible", "");
			 	  trainercount=0;
		    }
			if(registercount==1){
		    	elementregister.className=elementregister.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("registerExpand");
				 element.className = element.className.replace("visible", "");
				 registercount=0;
				   
		    }
		
			elementroutine.className=elementroutine.className.replace("has-sub","has-sub opened");

			var element4=document.getElementById("routineExpand");
			 element4.className = element4.className.replace("", "visible");
			 routinecount=1;
		}
		else if(routinecount==1){
			elementroutine.className=elementroutine.className.replace("has-sub opened","has-sub");

			var element4=document.getElementById("routineExpand");
			 element4.className = element4.className.replace("visible", "");
			 routinecount=0;
		}

	}
	else if(passvalue==5){
		if(trainercount==0){
		
			if(plancount==1){
				elementplan.className=elementplan.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("planExpand");
				 element.className = element.className.replace("visible", "");
			 	plancount=0;
		    }
		    if(overviewcount==1){
				elementoverview.className=elementoverview.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("overviewExpand");
				 element.className = element.className.replace("visible", "");
			 	overviewcount=0;
		    }
		   if(memcount==1){
				elementMember.className=elementMember.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("memExpand");
				 element.className = element.className.replace("visible", "");
			 	memcount=0;
		    }
			if(routinecount==1){
		    	elementroutine.className=elementroutine.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("routineExpand");
				 element.className = element.className.replace("visible", "");
			 	  routinecount=0;
		    }
			if(registercount==1){
		    	elementregister.className=elementregister.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("registerExpand");
				 element.className = element.className.replace("visible", "");
				 registercount=0;
				   
		    }
			
			elementtrainer.className=elementtrainer.className.replace("has-sub","has-sub opened");

			var element5=document.getElementById("trainExpand");
			element5.className = element5.className.replace("", "visible");
			 trainercount=1;
		}
		else if(trainercount==1){
			elementtrainer.className=elementtrainer.className.replace("has-sub opened","has-sub");

			var element5=document.getElementById("trainExpand");
			element5.className = element5.className.replace("visible", "");
			 trainercount=0;
		}

	}
	else if(passvalue==6){
		if(registercount==0){
		
			if(plancount==1){
				elementplan.className=elementplan.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("planExpand");
				 element.className = element.className.replace("visible", "");
			 	plancount=0;
		    }
		    if(overviewcount==1){
				elementoverview.className=elementoverview.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("overviewExpand");
				 element.className = element.className.replace("visible", "");
			 	overviewcount=0;
		    }
		   if(memcount==1){
				elementMember.className=elementMember.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("memExpand");
				 element.className = element.className.replace("visible", "");
			 	memcount=0;
		    }
			if(routinecount==1){
		    	elementroutine.className=elementroutine.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("routineExpand");
				 element.className = element.className.replace("visible", "");
			 	  routinecount=0;
		    }
			if(trainercount==1){
		    	elementtrainer.className=elementtrainer.className.replace("has-sub opened","has-sub");

				var element=document.getElementById("trainExpand");
				 element.className = element.className.replace("visible", "");
			 	  trainercount=0;
		    }
			
			elementregister.className=elementregister.className.replace("has-sub","has-sub opened");

			var element6=document.getElementById("registerExpand");
			element6.className = element6.className.replace("", "visible");
			registercount=1;
		}
		else if(registercount==1){
			elementregister.className=elementregister.className.replace("has-sub opened","has-sub");

			var element6=document.getElementById("registerExpand");
			element6.className = element6.className.replace("visible", "");
			registercount=0;
		}

	}
	
}
